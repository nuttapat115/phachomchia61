<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';
    protected $guard = 'admin';

    public function showLoginForm()
    {
        return view('adminauth.login');
    }

    public function showRegistrationForm()
    {
        return view('adminauth.register');
    }

    public function username()
    {
        return 'studentID';
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {

        return Auth::guard('admin');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'studentID'   => 'required',
            'password' => 'required|min:6'
        ]);

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['studentID' => $request->studentID, 'password' => $request->password], $request->remember)) {
            DB::table('admins')
                ->where('studentID', $request->studentID)
                ->update(['LoginStatus' => '1']);
            // if successful, then redirect to their intended location
            Session::put('authen_type', 'admin');
            Session::put('authen_id', $request->studentID);
            return redirect()->intended(route('dashboard'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('studentID', 'remember'));
    }

    public function logout(Request $request)
    {
        $id = $request->session()->get('authen_id');
        DB::table('admins')
            ->where('studentID', $id)
            ->update(['LoginStatus' => '0']);
        Auth::guard('admin')->logout();
        Session::forget('authen_type');
        Session::forget('authen_id');
        return redirect('/admin');
    }


}
