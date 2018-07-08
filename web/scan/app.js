var app = new Vue({
  el: '#app',
  data: {
    scanner: null,
    activeCameraId: null,
    cameras: [],
    scans: [],
    names:[],
    sdIDOut:''
  },
  
  mounted: function () {
    // data from scan
    var self = this;
    var id;
    self.scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5 });
    self.scanner.addListener('scan', function (content, image) {
      self.scans.unshift({ date: +(Date.now()), content: content });
      id = content;
      // get name
      axios({
        method:'post',
        url: 'http://127.0.0.1:8000/api/ProfileDetail',
        data: {
          studentID:id
        }
      })
      .then(function (response) {
        self.names.unshift({ date: +(Date.now()), name: response.data });
        console.log(response.data);
      })
      .catch(function (error) {
        console.log(error);
      })

      //insert data to history
      axios.post('http://127.0.0.1:8000/api/insertDATA', {
        studentID: id,
      })
      .then(function (response) {
        //
      })
      .catch(function (error) {
        console.log(error);
      });
        // date: currentdate.getFullYear+"-"+currentdate.getMonth+"-"+currentdate.getDay+" "+currentdate.getHours+":"+currentdate.getMinutes+":"+currentdate.getSeconds,

    });
    // camera
    Instascan.Camera.getCameras().then(function (cameras) {
      self.cameras = cameras;
      if (cameras.length > 0) {
        self.activeCameraId = cameras[0].id;
        self.scanner.start(cameras[0]);
      } else {
        console.error('ไม่พบรายชื่อกล้อง.');
      }
    }).catch(function (e) {
      console.error(e);
    });
  },
  methods: {
    // data from scan
    formatName: function (name) {
      return name || '(ไม่พบรายชื่อกล้อง)';
    },
    // camera
    selectCamera: function (camera) {
      this.activeCameraId = camera.id;
      this.scanner.start(camera);
    },
    // form sent data
    postStudentID: function() {
      this.sdIDOut = this.$refs.studentID.value;
      var thiss = this;
      // data form input
      this.scans.unshift({ date: +(Date.now()), content: document.getElementById('studentID').value });
      id = document.getElementById('studentID').value;

      //data form input output to department
      axios.post('http://127.0.0.1:8000/api/ProfileDetailDepartment', {
        studentID: document.getElementById('studentID').value,
      })
      .then(function (response) {
        document.getElementById('department').innerHTML = response.data;
        console.log("console depart - " + response.data);
      })
      .catch(function (error) {
        console.log(error);
      });

      //data form input output to name
      axios.post('http://127.0.0.1:8000/api/ProfileDetail', {
        studentID: document.getElementById('studentID').value,
      })
      .then(function (response) {
        thiss.names.unshift({ date: +(Date.now()), name: response.data });
      })
      .catch(function (error) {
        console.log(error);
      });

      //insert data to history
      axios.post('http://127.0.0.1:8000/api/insertDATA', {
        studentID: document.getElementById('studentID').value,
      })
      .then(function (response) {
        //
      })
      .catch(function (error) {
        console.log(error);
      });

    }
  }
});
