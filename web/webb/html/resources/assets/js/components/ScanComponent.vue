<template>
    <div id="app">
        <div class="preview-container">
            <video id="preview"></video>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-5 mx-auto" style="display: flex;margin: 30px 0px;">
                        <input id="studentID" type="text" ref="studentID" class="form-control" name="studentID" placeholder="61XXXXXXXX" required autofocus style="border-radius: 50px;text-align: center">
                        <button type="button"  @click.prevent="postStudentID()" class="btn btn-primary" style="border-radius: 30px;margin-left: 10px">SUBMIT</button>
                    </div>
                </div>
                <!--<div class="row">-->
                    <!--<div class="col-5 mx-auto" style="display: flex;background-color: white;padding: 12px 0px;border-radius: 15px;box-shadow: 2px 3px #dbdbdb;">-->
                        <!--<div class="col-4"  id="department" style="border-right: 1px solid black;padding-right: 10px;text-align: right;color: #28a745;font-weight: bold">คณะ</div>-->
                        <!--<template v-if="sdIDOut.length === 0">-->
                            <!--<div class="col-8" style="color: #28a745;font-weight: bold">ชื่อ - นามสกุล</div>-->
                        <!--</template>-->
                        <!--<template v-else>-->
                            <!--<div class="col-8" id="studentIDshow" style="color: #28a745;font-weight: bold">{{ sdIDOut }}</div>-->
                        <!--</template>-->
                    <!--</div>-->
                <!--</div>-->
            </div>
        </div>

        <div class="sidebar">
            <div class="content" style="width: 100%;display: flex">
                <section class="nameScan" style="width: 50%">
                    <h2 style="border-right: 1px solid black;">NAME</h2>
                    <ul>
                        <ul v-if="scans.length === 0">
                            <li class="empty" style="border-right: 1px solid;">-</li>
                        </ul>
                    </ul>
                    <transition-group name="names" tag="ul" style="border-right: 1px solid;">
                        <li v-for="namee in names" :key="namee.date" :title="namee.name" style="text-align: center">{{ namee.name }}</li>
                    </transition-group>
                </section>
                <section class="scans" style="width: 50%">
                    <h2>ID</h2>
                    <ul v-if="scans.length === 0">
                        <li class="empty">-</li>
                    </ul>
                    <transition-group name="scans" tag="ul">
                        <li v-for="scan in scans" :key="scan.date" :title="scan.content" style="text-align: center">{{ scan.content }}</li>
                    </transition-group>
                </section>
            </div>
        </div>

        <div class="cameraShow">
            <section class="cameras">
                <ul style="list-style-type: none;margin-bottom: 0px">
                    <li v-if="cameras.length === 0" class="empty">No cameras found</li>
                    <li v-for="camera in cameras">
                        <span v-if="camera.id == activeCameraId" :title="formatName(camera.name)" class="active">{{ formatName(camera.name) }}</span>
                        <span v-if="camera.id != activeCameraId" :title="formatName(camera.name)">
                            <a @click.stop="selectCamera(camera)">{{ formatName(camera.name) }}</a>
                        </span>
                    </li>
                </ul>
            </section>
        </div>
    </div>
</template>

<script>
    var Instascan = require('instascan');

    export default {
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

                //insert data to history
                axios.post('https://ประชุมเชียร์วิศวะบางมด.com/api/insertDATA', {
                    studentID: content,
                })
                    .then(function (response) {

                        //
                        const toast = swal.mixin({
                            toast: true,
                            position: 'top-left',
                            showConfirmButton: false,
                            timer: 3000
                        });

                        toast({
                            type: 'error',
                            title: response.data
                        })
                        console.log(response.data);
                    })
                    .catch(function (error) {

                        //data form scan output to department
                        axios.post('https://ประชุมเชียร์วิศวะบางมด.com/api/ProfileDetailDepartment', {
                            studentID: content,
                        })
                            .then(function (response) {
                                // playsound
                                var audio = document.getElementById("myAudio");
                                audio.play();
                                document.getElementById('department').innerHTML = response.data;
                            })
                            .catch(function (error) {
                                swal({
                                    type: 'error',
                                    title: 'ยืนยันตัวตนผิดพลาด',
                                    text: 'ไม่พบผู้ใช้งานในนี้ในฐานข้อมูลของเรา',
                                    footer: '<a href>โปรดติดต่อ สโมสรนักศึกษาคณะวิศวกรรมศาสตร์</a>'
                                });
                                document.getElementById('department').innerHTML = "คณะ";
                                // console.log(error);
                            });

                        // get name
                        axios({
                            method:'post',
                            url: 'https://ประชุมเชียร์วิศวะบางมด.com/api/ProfileDetail',
                            data: {
                                studentID:content
                            }
                        })
                            .then(function (response) {
                                // playsound
                                var audio = document.getElementById("myAudio");
                                audio.play();
                                self.sdIDOut = content;
                                self.scans.unshift({ date: +(Date.now()), content: content });
                                self.names.unshift({ date: +(Date.now()), name: response.data });
                            })
                            .catch(function (error) {
                                console.log(" no data");
                                console.log(error);
                            });
                        console.log(error);
                    });

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
                var thiss = this;
                // data form input
                id = document.getElementById('studentID').value;

                //insert data to history
                axios.post('https://ประชุมเชียร์วิศวะบางมด.com/api/insertDATA', {
                    studentID: document.getElementById('studentID').value,
                })
                    .then(function (response) {
                        const toast = swal.mixin({
                            toast: true,
                            position: 'top-left',
                            showConfirmButton: false,
                            timer: 3000
                        });

                        toast({
                            type: 'error',
                            title: response.data
                        })
                        console.log(response.data);
                    })
                    .catch(function (error) {

                        //data form input output to department
                        axios.post('https://ประชุมเชียร์วิศวะบางมด.com/api/ProfileDetailDepartment', {
                            studentID: document.getElementById('studentID').value,
                        })
                            .then(function (response) {
                                // playsound
                                var audio = document.getElementById("myAudio");
                                audio.play();
                                document.getElementById('department').innerHTML = response.data;
                            })
                            .catch(function (error) {
                                swal({
                                    type: 'error',
                                    title: 'ยืนยันตัวตนผิดพลาด',
                                    text: 'ไม่พบผู้ใช้งานในนี้ในฐานข้อมูลของเรา',
                                    footer: '<a href>โปรดติดต่อ สโมสรนักศึกษาคณะวิศวกรรมศาสตร์</a>'
                                });
                                document.getElementById('department').innerHTML = "คณะ";
                                console.log(error);
                            });

                        //data form input output to name
                        axios.post('https://ประชุมเชียร์วิศวะบางมด.com/api/ProfileDetail', {
                            studentID: document.getElementById('studentID').value,
                        })
                            .then(function (response) {
                                // playsound
                                var audio = document.getElementById("myAudio");
                                audio.play();
                                thiss.sdIDOut = thiss.$refs.studentID.value;
                                thiss.scans.unshift({ date: +(Date.now()), content: document.getElementById('studentID').value });
                                thiss.names.unshift({ date: +(Date.now()), name: response.data });
                            })
                            .catch(function (error) {
                                thiss.sdIDOut = "ชื่อ - นามสกุล";
                                console.log(error);
                            });

                        console.log(error);
                    });

            }
        }
    }

</script>


