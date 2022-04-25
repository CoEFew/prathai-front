<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.inc-header')
</head>

<body>
    <div class="">
        <!-- Navbar header -->
        @include('include.navbar.inc-navbar')

        <!-- banner img header -->
        @include('include.body.inc-banner')

        <div class="row">
            <div class="col-3 mobile-xs-ver mobile-ver ipad-ver dacktop-md-ver p-4">

                <div class="row pl-3 pb-2">
                    <div class="col-1" style="margin-left:-60px;">
                    </div>
                    <a class="col" style="color: #7f8685;text-decoration:none;font-size:21px;" href="{{ url('/') }}">
                        <img src="/img/svg/home.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        หน้าหลัก
                    </a>
                </div>
                <div class="row pl-3 pb-2">
                    <div class="col-1" style="margin-left:-60px;">
                    </div>

                    <a class="col" style="color: #7f8685;text-decoration:none;font-size:21px;" href="{{ url('/amuletlist') }}">
                        <img src="/img/svg/amulet-list.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        รายการพระเครื่อง</a>

                </div>
                <div class="row pl-3 pb-2">
                    <div class="col-1" style="background-color: #d09b2c;margin-left:-60px;">
                    </div>
                    <a class="col" style="color: #d09b2c;text-decoration:none;font-size:21px;" href="{{ url('/certificate') }}">
                        <img src="/img/svg/certificate2.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        ตรวจสอบใบรับรอง
                    </a>
                </div>
                <div class="row pl-3 pb-2">
                    <div class="col-1" style="margin-left:-60px;">
                    </div>
                    <a class="col" style="color: #7f8685;text-decoration:none;font-size:21px;" href="{{ url('/new') }}">
                        <img src="/img/svg/news.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        ข่าวสาร
                    </a>
                </div>
                <div class="row pl-3 pb-2">
                    <div class="col-1" style="margin-left:-60px;">
                    </div>
                    <a class="col" style="color: #7f8685;text-decoration:none;font-size:21px;" href="{{ url('/contact') }}">
                        <img src="/img/svg/contact.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        ติดต่อเรา
                    </a>
                </div>
                <div class="row pl-3 pb-2 mb-4">
                    <div class="col-1" style="margin-left:-60px;">
                    </div>
                    <a class="col" style="color: #7f8685;text-decoration:none;font-size:21px;" href="{{ url('/policy') }}">
                        <img src="/img/svg/policy.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        นโยบายและเงื่อนไข
                    </a>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">

                <div class="bg-light card-new">
                    <div class="container text-center">
                        <h5 class="font-weight-bold " style="font-size:24px;padding: 30px 0 10px 0;">บริการออกใบรับรองพระเครื่องบูชา</h5>
                        <a class="font-size15">
                            Prathai นี้มีระบบสำหรับการตรวจสอบพระ เพื่อให้สมาชิกและบุคคลทั่วไป <br>
                            ที่ต้องการทราบว่า พระที่ท่านถือครองนั้น เป็นพระอะไร รุ่นไหน แก้หรือไม่แก้<br>
                            พวกเราสามารถสร้างความเชื่อมั่นให้วงการพระเครื่องเมืองไทย ให้มีกฎเกณฑ์และใบรับรองพระที่ได้มาตรฐาน<br>
                            จากสมาคม Meta Prathai ที่ได้คุณภาพในการตรวจสอบ โดยทีมงานผู้ดูแลระบบเบื่องหลังเป็นงานเซียนพระ<br>
                            ที่มีประสบการณ์มากกว่า 50 ปี สามารถตรวจสอบและให้ข้อมูลได้อย่างชัดเจน
                        </a>
                    </div>
                    <div class="mt-4">
                        <h5 class="p-3 font-weight-bold">ตรวจสอบพระของท่าน</h5>
                        <div class="row mb-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <h5 style="font-size: 16px;">ชื่อ - นามสกุล</h5>
                            </div>
                            <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                                <input type="text" class="form-control" style="border-radius: 10px;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <h5 style="font-size: 16px;">รายละเอียดร้าน</h5>
                            </div>
                            <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                                <textarea class="form-control" style="border-radius: 10px;" id="" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <h5 style="font-size: 16px;">อัพโหลดรูป</h5>
                            </div>
                            <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-2">
                                        <img id="pre_img" name="pre_img" class="img-fluid w-100" src="{{asset('/img/หน้า certificate/img.png')}}" style="width: 100%;height:100%;">
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-2">
                                        <img id="pre_img" name="pre_img" class="img-fluid w-100" src="{{asset('/img/หน้า certificate/img.png')}}">

                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-2">
                                        <img id="pre_img" name="pre_img" class="img-fluid w-100" src="{{asset('/img/หน้า certificate/img.png')}}">

                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-2">
                                        <img id="pre_img" name="pre_img" class="img-fluid w-100" src="{{asset('/img/หน้า certificate/img.png')}}">

                                    </div>
                                    <div class="col-3 custom-file btn" style="margin-top: -70px;opacity:0;">
                                        <input type="file" class="form-control rounded" accept="image/JPEG" id="Pm_Img" name="Pm_Img" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pb-3">
                            <button class="btn text-light rounded-pill w-25" style="background-color: #d09a2d;">ส่งข้อมูล</button>
                        </div>
                        <hr>
                        <h5 class="p-3 font-weight-bold">ค้นหาใบประกันพระแท้</h5>
                        <div class="row mb-3 pb-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <h5 style="font-size: 16px;">รหัสใบประกัน</h5>
                            </div>
                            <div class="col-6 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                <input type="text" class="form-control" style="border-radius: 10px;">

                            </div>
                            <div class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                <button class="btn text-light rounded-pill w-100" style="background-color: #d09a2d;">ค้นหา</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 mobile-xs-ver mobile-ver ipad-ver dacktop-md-ver p-4">
                <div class="">
                    <b class="font-size18">วิดีโอถ่ายทอดสด</b>
                    <div class="d-flex mt-3">
                        <i class="far fa-play-circle text-light" data-toggle="modal" data-target="#liveModal" style="margin-top: 45px;position: absolute;font-size:50px;opacity: 0.5;margin:50px 0 0 150px;"></i>
                        <img class="w-100" src="/img/png/profile pic/Group 1054.png" data-toggle="modal" data-target="#liveModal">
                        <a class="badge bg-danger text-light rounded-pill" style="position: absolute;margin:1.25rem;">Live <i class="fas fa-caret-down"></i></a>
                    </div>

                    <!-- ตาราง live ขวา -->
                    @include('include.body.inc-timetable-live')

                    <hr class="mt-4 rounded" style="border-width: 2px;background-color:#c3c1bd;">
                </div>

                <!-- ตามหาพระ ขวา -->
                @include('include.body.inc-looking-monk')

                <div>
                    <div class="mt-3 mb-2">
                        <b style="font-size: 18px;">ร้านที่คุณอาจจะถูกใจ</b>
                    </div>

                    <div class="row mb-3">
                        <div class="d-flex">
                            <img src="/img/png/profile pic/Group 1058.png" class="img-profile">

                        </div>
                        <div class="col">
                            <b style="font-size: 15px;">บอย ท่าพระจันทร์ FC</b>
                            <h5 style="font-size: 14px;color: #a9aca7;">@boythaphrachan</h5>
                        </div>
                        <div class="col-3">
                            <button class="btn bg-light rounded-pill" style="font-size: 15px;color: #d09b2c;border-color:#d09b2c">ติดตาม</button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="d-flex">
                            <img src="/img/png/profile pic/Group 1060.png" class="img-profile">

                        </div>
                        <div class="col">
                            <b style="font-size: 15px;">ร้านพระเครื่องนพเก้า</b>
                            <h5 style="font-size: 14px;color: #a9aca7;">@Noppagao168</h5>
                        </div>
                        <div class="col-3">
                            <button class="btn bg-light rounded-pill" style="font-size: 15px;color: #d09b2c;border-color:#d09b2c">ติดตาม</button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="d-flex">
                            <img src="/img/png/profile pic/Group 1062.png" class="img-profile">

                        </div>
                        <div class="col">
                            <b style="font-size: 15px;">พระเครื่องเรื่องสนุก</b>
                            <h5 style="font-size: 14px;color: #a9aca7;">@delightfulamulets</h5>
                        </div>
                        <div class="col-3">
                            <button class="btn bg-light rounded-pill" style="font-size: 15px;color: #d09b2c;border-color:#d09b2c">ติดตาม</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a class="" style="font-size: 15px;color: #d09b2c;" href="#">ดูเพิ่มเติม <i class="fas fa-caret-down"></i></a>
                    </div>

                    <hr class="mt-4 rounded" style="border-width: 2px;background-color:#c3c1bd;">
                </div>
                <div>
                    <div class="mt-3 mb-2">
                        <b style="font-size: 18px;">พระยอดนิยม</b>
                    </div>

                    <h5 class="mb-4" style="font-size: 18px;color: #d09b2c;">#พระบูชา</h5>
                    <h5 class="mb-4" style="font-size: 18px;color: #d09b2c;">#เครื่องราง</h5>
                    <h5 class="mb-4" style="font-size: 18px;color: #d09b2c;">#รูปหล่อ</h5>
                    <div class="d-flex justify-content-end">
                        <a class="" style="font-size: 15px;color: #d09b2c;" href="#">ดูเพิ่มเติม <i class="fas fa-caret-down"></i></a>
                    </div>
                    <hr class="mt-4 rounded" style="border-width: 2px;background-color:#c3c1bd;">
                </div>

                <!-- advert โฆษณา -->
                @include('include.body.inc-advert')

            </div>
        </div>
    </div>

    <!-- footer -->
    @include('include.footer.inc-chat-admin')
    @include('include.footer.inc-footer')


    <script>
        $(".nav a").on("click", function() {
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
    </script>
    <script>
        let img_input = document.querySelector("#Pm_Img");
        let img_pre = document.querySelector("#pre_img");

        img_input.onchange = evt => {
            const [file] = img_input.files;
            if (file) {
                img_pre.src = URL.createObjectURL(file);
            }
        }
        let img_input2 = document.querySelector("#Pd_Exten_Img");
        let img_pre2 = document.querySelector("#pre_img2");

        img_input2.onchange = evt => {
            const [file] = img_input2.files;
            if (file) {
                img_pre2.src = URL.createObjectURL(file);
            }
        }
    </script>
</body>

</html>