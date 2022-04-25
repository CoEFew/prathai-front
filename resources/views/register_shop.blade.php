<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.inc-header')
</head>

<body>
    <div class="">
        <!-- Navbar header -->
        @include('include.navbar.inc-navbar-profile')

        <!-- banner img header -->
        @include('include.body.inc-banner')

        <div class="row">
            <div class="col-3 mobile-xs-ver mobile-ver ipad-ver dacktop-md-ver p-4">

                <div class="row pl-3 pb-2">
                    <div class="col-1" style="margin-left:-60px;">
                    </div>
                    <a class="col font-size21" style="color: #7f8685;text-decoration:none;" href="{{ url('/') }}">
                        <img src="/img/svg/home.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        หน้าหลัก
                    </a>
                </div>
                <div class="row pl-3 pb-2">
                    <div class="col-1" style="margin-left:-60px;">
                    </div>

                    <a class="col font-size21" style="color: #7f8685;text-decoration:none;" href="{{ url('/amuletlist') }}">
                        <img src="/img/svg/amulet-list.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        รายการพระเครื่อง</a>

                </div>
                <div class="row pl-3 pb-2">
                    <div class="col-1" style="margin-left:-60px;">
                    </div>
                    <a class="col font-size21" style="color: #7f8685;text-decoration:none;" href="{{ url('/certificate') }}">
                        <img src="/img/svg/certificate.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        ตรวจสอบใบรับรอง
                    </a>
                </div>
                <div class="row pl-3 pb-2">
                    <div class="col-1" style="margin-left:-60px;">
                    </div>
                    <a class="col font-size21" style="color: #7f8685;text-decoration:none;" href="{{ url('/new') }}">
                        <img src="/img/svg/news.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        ข่าวสาร
                    </a>
                </div>
                <div class="row pl-3 pb-2">
                    <div class="col-1" style="margin-left:-60px;">
                    </div>
                    <a class="col font-size21" style="color: #7f8685;text-decoration:none;" href="{{ url('/contact') }}">
                        <img src="/img/svg/contact.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        ติดต่อเรา
                    </a>
                </div>
                <div class="row pl-3 pb-2 mb-4">
                    <div class="col-1" style="margin-left:-60px;">
                    </div>
                    <a class="col font-size21" style="color: #7f8685;text-decoration:none;" href="{{ url('/policy') }}">
                        <img src="/img/svg/policy.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        นโยบายและเงื่อนไข
                    </a>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">

                <div class="bg-light card-new">
                    <div class="container text-center">
                        <h5 class="font-weight-bold " style="font-size:24px;padding: 30px 0 10px 0;">ลงทะเบียนร้านค้า</h5>
                        <b class="font-size15">รายละเอียดร้านค้า</b>
                    </div>
                    <div class="mt-4">
                        <div class="row mb-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <h5 style="font-size: 16px;">ชื่อร้านพระ</h5>
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
                                <h5 style="font-size: 16px;">เงื่อนไขในการรับประกัน</h5>
                            </div>
                            <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                                <textarea class="form-control" style="border-radius: 10px;" id="" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <h5 style="font-size: 16px;">ผู้รับรองการเปิดร้าน</h5>
                            </div>
                            <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                                <input type="text" class="form-control" style="border-radius: 10px;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <h5 style="font-size: 16px;">เบอร์โทรศัพท์ผู้รับรอง</h5>
                            </div>
                            <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                                <input type="text" class="form-control" style="border-radius: 10px;">
                            </div>
                        </div>
                        <hr>
                        <h5 class="text-center font-size15 font-weight-bold my-4">รูปพระเพื่อประกอบพิจารณา</h5>
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
                        <div class="text-center pb-4 my-4">
                            <a class="btn text-light rounded-pill w-25" style="background-color: #d09a2d;" href="{{ url('/profile_shop') }}">ลงทะเบียนร้านค้า</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 mobile-xs-ver mobile-ver ipad-ver dacktop-md-ver p-4">
                <div>
                    <div class="mt-3 mb-2">
                        <img class="img-profile" style="width: 100px;" src="/img/png/profile pic/Mask Group 2.png">
                        <h5 class="font-weight-bold " style="font-size:24px;padding: 30px 0 0 0;">Suttilak</h5>
                        <h5 class="" style="font-size:16px;color: #7f8685;">@Suttilak1234</h5>
                    </div>
                    <a type="button" class="btn bg-light rounded-pill" style="border-color: #d09b2c;color:#d09b2c">แก้ไขโปรไฟล์</a>
                    <hr class="mt-4 rounded" style="border-width: 2px;background-color:#c3c1bd;">
                    <h5 class="font-size15" style="color: #7f8685;">suttilak@gmail.com</h5>
                    <h5 class="font-size15" style="color:#d09b2c">เปลี่ยนอีเมล</h5>
                    <hr class="mt-4 rounded" style="border-width: 2px;background-color:#c3c1bd;">
                    <h5 class="font-size15" style="color: #7f8685;">ยังไม่ได้เซ็ตรหัสผ่าน</h5>
                    <h5 class="font-size15" style="color:#d09b2c">รีเซ็ตรหัสผ่าน</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    @include('include.footer.inc-chat-admin')
    @include('include.footer.inc-footer')

    <!-- Modal login -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" style="font-size: 3rem;padding: 0 1rem 0 1rem;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 0 1rem 1rem 1rem;">
                    <h5 class="text-center font-weight-bold mb-4">เข้าสู่ระบบ</h5>
                    <h5 class="font-size15">เบอร์โทรศัพท์</h5>
                    <input type="number" class="form-control mb-3" style="border-radius: 15px;" placeholder="เบอร์โทรศัพท์">
                    <h5 class="font-size15">รหัสผ่าน</h5>
                    <input type="text" class="form-control mb-3" style="border-radius: 15px;" placeholder="รหัสผ่าน">
                    <h5 class="d-flex justify-content-end font-size15" style="color:#d09b2c;">ลืมรหัสผ่าน</h5>
                    <button class="btn text-center w-100 text-light mt-1" style="background-color: #d09b2c;border-radius: 15px;">เข้าสู่ระบบ</button>
                    <div class="row mt-2">
                        <div class="col">
                            <hr>
                        </div>
                        <div class="col-2 text-center">หรือ</div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <button class="btn text-center w-100 text-light mt-2" style="background-color: #1877f2;border-radius: 15px;">เข้าสู่ระบบด้วย Facebook <i class="fab fa-facebook-f"></i></button>
                    <button class="btn text-center w-100 text-light mt-3" style="background-color: #dc4e41;border-radius: 15px;">เข้าสู่ระบบด้วย Google <i class="fab fa-google-plus-g"></i></button>
                    <button class="btn text-center w-100 text-light mt-3" style="background-color: #000000;border-radius: 15px;">เข้าสู่ระบบด้วย Apple ID <i class="fab fa-apple"></i></button>
                    <button class="btn text-center w-100 text-light mt-3 mb-2" style="background-color: #7f8685;border-radius: 15px;">ลงทะเบียน</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal register -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" style="font-size: 3rem;padding: 0 1rem 0 1rem;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 0 1rem 1rem 1rem;">
                    <h5 class="text-center font-weight-bold mb-4">สมัครสมาชิก</h5>
                    <h5 class="font-size15">ชื่อ - นามสกุล</h5>
                    <input type="text" class="form-control mb-3" style="border-radius: 15px;" placeholder="ชื่อ - นามสกุล">
                    <h5 class="font-size15">เบอร์โทรศัพท์ (เพื่อใช้ในการเข้าสู่ระบบ)</h5>
                    <input type="number" class="form-control mb-3" style="border-radius: 15px;" placeholder="เบอร์โทรศัพท์">
                    <h5 class="font-size15">รหัสผ่าน (เพื่อใช้ในการเข้าสู่ระบบ)</h5>
                    <input type="text" class="form-control mb-3" style="border-radius: 15px;" placeholder="รหัสผ่าน">
                    <h5 class="font-size15">ยืนยันรหัสผ่าน</h5>
                    <input type="text" class="form-control mb-3" style="border-radius: 15px;" placeholder="ยืนยันรหัสผ่าน">
                    <button class="btn text-center w-100 text-light mt-3 mb-2" style="background-color: #d09b2c;border-radius: 15px;">สมัครสมาชิก</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(".nav a").on("click", function() {
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
    </script>

</body>

</html>