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
                    <div class="container">
                        <h5 class="font-weight-bold " style="font-size:24px;padding: 30px 0 0 0;">สวัสดี Suttilak</h5>
                        <h5 class="font-size13" style="color: #7f8685;">คุณยังไม่ได้ลงทะเบียนร้านค้า</h5>
                        <h5 class="font-size15 text-center font-weight-bold">เลือกแพคเกจเพื่อลงทะเบียนร้านค้า</h5>
                        <div class="row">
                            <div class="col-12 col-sm col-md- col-lg -col-xl p-2 m-2 border pagget-profile active" style="border-radius: 10px;">
                                <h5 class="font-size14 font-weight-bold">ร้านพระธรรมดา</h5>
                                <h5 class="font-size13">
                                    ลงพระ 1 รายการ/วัน <br>
                                    อายุประกาศ 15 วัน
                                </h5>
                                <b class="font-size16 d-flex justify-content-end pagget-profile3">ฟรี</b>
                            </div>
                            <div class="col-12 col-sm col-md- col-lg -col-xl p-2 m-2 border pagget-profile" style="border-radius: 10px;">
                                <h5 class="font-size14 font-weight-bold">ร้านพระธรรมดา</h5>
                                <h5 class="font-size13" style="color: #7f8685;">
                                    ลงพระ 25 ประกาศ <br>
                                    อายุประกาศ 1 ปี
                                </h5>
                                <b class="font-size16 d-flex justify-content-end pagget-profile3">899 บาท/ปี</b>
                            </div>
                            <div class="col-12 col-sm col-md- col-lg -col-xl p-2 m-2 border pagget-profile" style="border-radius: 10px;">
                                <h5 class="font-size14 font-weight-bold">ร้านพระ Gold</h5>
                                <h5 class="font-size13" style="color: #7f8685;">
                                    ลงพระ 100 ประกาศ <br>
                                    อายุประกาศ 1 ปี
                                </h5>
                                <b class="font-size16 d-flex justify-content-end pagget-profile3">2,500 บาท/ปี</b>
                            </div>
                            <div class="col-12 col-sm col-md- col-lg -col-xl p-2 m-2 border pagget-profile" style="border-radius: 10px;">
                                <h5 class="font-size14 font-weight-bold">ร้านพระ VIP</h5>
                                <h5 class="font-size13" style="color: #7f8685;">
                                    ลงพระ 200 ประกาศ <br>
                                    อายุประกาศ 1 ปี
                                </h5>
                                <b class="font-size16 d-flex justify-content-end pagget-profile3">4,000 บาท/ปี</b>
                            </div>
                        </div>
                    </div>
                    <div class="container py-3">
                        <h5 class="font-size15 font-weight-bold">เงื่อนไขการรสมัครร้านพระ</h5>
                        <h5 class="font-size14" style="margin-bottom:3px;"> - สินค้าที่โพสต์สามารถโพสต์ได้จำนวน 5 โพสต์ต่อวัน</h5>
                        <h5 class="font-size14" style="margin-bottom:3px;"> - หากโพสต์สินค้าปลอม (พระปลอม) จะถูกแบนร้านพระเป็นเวลา 3 วัน</h5>
                        <h5 class="font-size14" style="margin-bottom:3px;"> - หากพบโพสต์หรือคอมเมนต์ที่ไม่เหมาะสม ผู้ใช้สามารถกด Report ได้</h5>
                        <h5 class="font-size14" style="margin-bottom:3px;"> &nbsp;&nbsp;และแอดมินจะทำการตรวจสอบ เพื่อดำเนินการตามกฎระเบียบต่อไป</h5>
                    </div>
                    <div class="text-center pb-4">
                        <a type="button" class="btn rounded-pill text-light w-25" style="background-color: #d09b2c;" href="{{ url('/payment') }}">ลงทะเบียน</a>
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


    <script>
        $(".nav a").on("click", function() {
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
    </script>

</body>

</html>