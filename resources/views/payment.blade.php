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
                        <h5 class="font-size15 font-weight-bold mt-3">ลงทะเบียนด้วย</h5>
                        <h5 class="font-size15" style="color: #7f8685;">suttilak@gmail.com <a class="font-weight-bold" style="color: #d09b2c;">เปลี่ยน</a></h5>
                        <hr>
                        <h5 class="font-weight-bold font-size15">กรุณาเลือกวิธีการชำระเงิน</h5>
                        <nav class="text-center">
                            <div class="row nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 nav-item nav-link nav-tabs-post active font-weight-bold" id="nav-PromptPay-tab" data-toggle="tab" href="#nav-PromptPay" role="tab" aria-controls="nav-PromptPay" aria-selected="true">พร้อมเพย์</a>
                                <a class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 nav-item nav-link nav-tabs-post font-weight-bold" id="nav-bank-tab" data-toggle="tab" href="#nav-bank" role="tab" aria-controls="nav-bank" aria-selected="false">บัญชีธนาคาร</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-PromptPay" role="tabpanel" aria-labelledby="nav-PromptPay-tab">
                                <div class="bg-light card-new" style="border-top-right-radius: 0;border-top-left-radius:0;">
                                    <div class="pt-3">
                                        <div class="row">
                                            <div class="col-5 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="padding-left: 0px!important;">
                                                <dt class="font-size15">หมายเลยบัญชี</dt>
                                            </div>
                                            <div class="col-7 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                                <dd class="font-size15">xxx xxx xxxx</dd>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="padding-left: 0px!important;">
                                                <dt class="font-size15">จำนวนเงิน</dt>
                                            </div>
                                            <div class="col-7 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                                <dd class="font-size15">xxxx บาท</dd>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-3"></div>
                                            <div class="col text-center">
                                                <img src="/img/หน้าจ่ายตัง/หน้าจ่ายตังค์2/Group 1602.png" class="w-50">
                                                <img src="/img/หน้าจ่ายตัง/หน้าจ่ายตังค์2/Image 19.png" class="w-100">
                                            </div>
                                            <div class="col-3"></div>
                                        </div>
                                        <div class="text-center p-4">
                                            <a type="button" class="btn  rounded-pill cl-yellow" style="border-color: #d09b2c;" href="#">
                                                <img src="/img/หน้าจ่ายตัง/หน้าจ่ายตังค์2/Group 186.svg" class="">
                                                ดาวน์โหลด QR Code
                                            </a>
                                        </div>
                                        <h5 class="font-size15 font-weight-bold">อัพโหลดหลักฐานการโอนเงิน</h5>
                                        <h5 class="font-size15 cl-dark-grey">รองรับนามสกุลไฟล์ .jpg .png .jpeg ขนาดไม่เกิน 10MB</h5>
                                        <div class="text-center py-4">
                                            <a type="button" class="btn  rounded-pill text-light w-100 bag-yellow" href="{{ url('/register_shop') }}">
                                                อัพโหลดรูปภาพ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-bank" role="tabpanel" aria-labelledby="nav-bank-tab">
                                <div class="bg-light card-new" style="border-top-right-radius: 0;border-top-left-radius:0;">
                                    <div class="pt-3">
                                        <div class="row">
                                            <div class="col-5 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="padding-left: 0px!important;">
                                                <dt class="font-size15">บัญชีธนาคาร</dt>
                                            </div>
                                            <div class="col-7 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                                <dd class="font-size15">ธนาคารไทยพาณิชย์</dd>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 col-sm-4 col-md-3 col-lg-3 col-xl-3"style="padding-left: 0px!important;">
                                                <dt class="font-size15">ชื่อบัญชี</dt>
                                            </div>
                                            <div class="col-7 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                                <dd class="font-size15">นายโทน บางแค</dd>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="padding-left: 0px!important;">
                                                <dt class="font-size15">ประเภทบัญชี</dt>
                                            </div>
                                            <div class="col-7 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                                <dd class="font-size15">ออมทรัพย์</dd>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="padding-left: 0px!important;">
                                                <dt class="font-size15">หมายเลยบัญชี</dt>
                                            </div>
                                            <div class="col-7 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                                <dd class="font-size15">xxx xxx xxxx</dd>
                                            </div>
                                        </div>
                                        <div class="row my-5">
                                            <div class="col-5 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="padding-left: 0px!important;">
                                                <dt class="font-size15">จำนวนเงิน</dt>
                                            </div>
                                            <div class="col-7 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                                <dd class="font-size15">xxxx บาท</dd>
                                            </div>
                                        </div>
                                        <h5 class="font-size15 font-weight-bold">อัพโหลดหลักฐานการโอนเงิน</h5>
                                        <h5 class="font-size15 cl-dark-grey">รองรับนามสกุลไฟล์ .jpg .png .jpeg ขนาดไม่เกิน 10MB</h5>
                                        <div class="text-center py-4">
                                            <a type="button" class="btn  rounded-pill text-light w-100 bag-yellow" href="{{ url('/register_shop') }}">
                                                อัพโหลดรูปภาพ
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-3 mobile-xs-ver mobile-ver ipad-ver dacktop-md-ver p-4">
                <div>
                    <div class="mt-3 mb-2">
                        <h5 class="font-size18 font-weight-bold">สรุปผล</h5>
                        <hr class="mt-4 rounded" style="border-width: 2px;background-color:#c3c1bd;">
                        <h5 class="font-size18 font-weight-bold">แพคเกจ ร้านพระ Gold</h5>
                        <h5 class="font-size15" style="color: #7f8685;">วิธีการชำระเงิน</h5>
                        <div class="row">
                            <a class="col font-size15" style="color: #d09b2c;padding: 0!important;">รายปี / ชำระรายเดือน <i class="fas fa-caret-down"></i></a>
                            <a class="col-4 font-size15 d-flex justify-content-end" style="color: #7f8685;padding: 0!important;">2,500 บาท/ปี</a>
                        </div>
                        <hr class="mt-4 rounded" style="border-width: 2px;background-color:#c3c1bd;">
                        <div class="row">
                            <a class="col font-size15" style="color: #7f8685;padding: 0!important;">Subtotal</a>
                            <a class="col font-size15 d-flex justify-content-end" style="color: #7f8685;padding: 0!important;">208 บาท/เดือน</a>
                        </div>
                        <div class="row">
                            <a class="col-4 font-size15" style="padding: 0!important;">Total</a>
                            <a class="col font-size15 d-flex justify-content-end" style="padding: 0!important;">220 บาท/เดือน + tax</a>
                        </div>

                    </div>

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