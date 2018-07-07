var app = new Vue({
  el: '#app',
  data: {
    scanner: null,
    activeCameraId: null,
    cameras: [],
    scans: [],
    names:[]
  },
  mounted: function () {
    var self = this;
    var id;
    self.scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5 });
    self.scanner.addListener('scan', function (content, image) {
      self.scans.unshift({ date: +(Date.now()), content: content });
      id = content;
      // axios.post('http://127.0.0.1:8000/api/ProfileDetail',{
      //   studentID: id
      // })
      // .then(function (response) {
      //   this.name = response.data[0];
      //   console.log(response.data);
      // })
      // .catch(function (error) {
      //   this.name = 'Error - ' + error; 
      // })
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
      console.log(id);
    });
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
    formatName: function (name) {
      return name || '(ไม่พบรายชื่อกล้อง)';
    },
    selectCamera: function (camera) {
      this.activeCameraId = camera.id;
      this.scanner.start(camera);
    }
  }
});
