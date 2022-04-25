<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.inc-header')

    <!-- Owl Carousel Assets -->
    <link href="owl-carousel/bootstrapTheme.css" rel="stylesheet">
    <link href="owl-carousel/custom.css" rel="stylesheet">
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
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
                    <div class="col-1" style="background-color: #d09b2c;margin-left:-60px;">
                    </div>

                    <a class="col" style="color: #d09b2c;text-decoration:none;font-size:21px;" href="{{ url('/amuletlist') }}">
                        <img src="/img/svg/amulet-list2.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        รายการพระเครื่อง</a>

                </div>
                <div class="row pl-3 pb-2">
                    <div class="col-1" style="margin-left:-60px;">
                    </div>
                    <a class="col" style="color: #7f8685;text-decoration:none;font-size:21px;" href="{{ url('/certificate') }}">
                        <img src="/img/svg/certificate.svg" class="" style="width: 24px;">&nbsp;&nbsp;
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
                    <div>
                        <div>
                            <h5 class="font-weight-bold text-center" style="font-size:24px;padding: 30px 0 10px 0;">รายการพระเครื่อง</h5>
                        </div>
                        <div class="mobile-xs-ver mobile-ver">
                            <div class="row text-center p-4 ">
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                    <button class="btn rounded-pill text-light w-100 mb-2" style="background-color: #d09a2d;">พระบูชา</button>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                    <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">พระกรุ</button>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                    <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">เครื่องราง</button>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                    <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">พระรูปหล่อ</button>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                    <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">พระปิดตา</button>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                    <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">เหรียญหล่อ</button>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                    <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">พระกริ่ง พระชัย</button>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                    <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">พระอื่นๆ</button>
                                </div>
                            </div>
                        </div>


                        <div id="demo" class="mb-3 ipad-ver dacktop-md-ver dacktop-lg-ver dacktop-xl-ver">
                            <div class="">
                                <div class="row">
                                    <div class="span12">

                                        <div id="owl-example" class="owl-carousel">
                                            <div class="col-12 p-1">
                                                <button class="btn rounded-pill text-light w-100 mb-2" style="background-color: #d09a2d;">พระบูชา</button>
                                            </div>
                                            <div class="col-12 p-1">
                                                <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">พระกรุ</button>
                                            </div>
                                            <div class="col-12 p-1">
                                                <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">เครื่องราง</button>
                                            </div>
                                            <div class="col-12 p-1">
                                                <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">พระรูปหล่อ</button>
                                            </div>
                                            <div class="col-12 p-1">
                                                <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">พระปิดตา</button>
                                            </div>
                                            <div class="col-12 p-1">
                                                <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">เหรียญหล่อ</button>
                                            </div>
                                            <div class="col-12 p-1">
                                                <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">พระกริ่ง พระชัย</button>
                                            </div>
                                            <div class="col-12 p-1">
                                                <button class="btn rounded-pill text-secondary border bg-light w-100 mb-2">พระอื่นๆ</button>
                                            </div>

                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="bg-light card-new">
                    <div class="row p-4">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-2">
                            <img src="/img/หน้า รายการพระเครื่อง/รูปภาพ/png/Group 773.png" class="w-100">
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <div class="row">
                                <div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 pl-0">
                                    <img src="/img/หน้า รายการพระเครื่อง/รูปภาพ/png/Group 775.png" class="img-profile">
                                </div>
                                <div class="col-8 col-sm-10 col-md-10 col-lg-10 col-xl-10 pl-0">
                                    <h5 style="font-size: 15px;">บอย ท่าพระจัทน์ FC</h5>
                                    <h5 class="text-secondary" style="font-size: 15px;margin-top:-8px;">@boythaphrachan</h5>
                                    <h5 class="text-secondary" style="font-size: 13px;margin-top:-8px;">10 ตุลาคม 2021</h5>
                                </div>

                            </div>
                            <div class="py-3">
                                <h5 style="font-size:15px;">
                                    <a class="badge text-light" style="background-color: #d09a2d;">พระบูชา</a>
                                    <a>ภปร. 2058 หน้าตัก 9 นิ้ว (บล๊อกดินไทย เสริมยุคแรกเท่านั้น) ศิลปะแห่งยุคใน</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-4">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-2">
                            <img src="/img/หน้า รายการพระเครื่อง/รูปภาพ/png/Group 777.png" class="w-100">
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <div class="row">
                                <div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 pl-0">
                                    <img src="/img/หน้า รายการพระเครื่อง/รูปภาพ/png/Group 779.png" class="img-profile">
                                </div>
                                <div class="col-8 col-sm-10 col-md-10 col-lg-10 col-xl-10 pl-0">
                                    <h5 style="font-size: 15px;">ร้านพระเครื่องนพเก้า</h5>
                                    <h5 class="text-secondary" style="font-size: 15px;margin-top:-8px;">@Noppagao68</h5>
                                    <h5 class="text-secondary" style="font-size: 13px;margin-top:-8px;">5 กุมภาพันธ์ 2021</h5>
                                </div>

                            </div>
                            <div class="py-3">
                                <h5 style="font-size:15px;">
                                    <a class="badge text-light" style="background-color: #d09a2d;">พระบูชา</a>
                                    <a>หลวงพ่อพัฒน์ รุ่น ฉลอง 100 ปี ขนาด 5 นิ้ว</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-4">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-2">
                            <img src="/img/หน้า รายการพระเครื่อง/รูปภาพ/png/Group 787.png" class="w-100">
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <div class="row">
                                <div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 pl-0">
                                    <img src="/img/หน้า รายการพระเครื่อง/รูปภาพ/png/Group 797.png" class="img-profile">
                                </div>
                                <div class="col-8 col-sm-10 col-md-10 col-lg-10 col-xl-10 pl-0">
                                    <h5 style="font-size: 15px;">พระเครื่องเรื่องสนุก</h5>
                                    <h5 class="text-secondary" style="font-size: 15px;margin-top:-8px;">@delightfulamulets</h5>
                                    <h5 class="text-secondary" style="font-size: 13px;margin-top:-8px;">24 ธันวาคม 2020</h5>
                                </div>

                            </div>
                            <div class="py-3">
                                <h5 style="font-size:15px;">
                                    <a class="badge text-light" style="background-color: #d09a2d;">พระพุทธรูปบูชา</a>
                                    <a>ยุครัชกาลปางสมาธิ เนื้อแดงธรรมชาติ เกศบัวตูมนิยม พระหนาหล่อศิลป์สวย บัวเด้ง ดินไทยเดิมๆ มาตรฐานครับ ขนาดหน้าตัก 5 นิ้วหย่อน</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-4">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-2">
                            <img src="/img/หน้า รายการพระเครื่อง/รูปภาพ/png/Group 789.png" class="w-100">
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <div class="row">
                                <div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 pl-0">
                                    <img src="/img/หน้า รายการพระเครื่อง/รูปภาพ/png/Group 791.png" class="img-profile">
                                </div>
                                <div class="col-8 col-sm-10 col-md-10 col-lg-10 col-xl-10 pl-0">
                                    <h5 style="font-size: 15px;">พระเครื่องเมืองกรุง</h5>
                                    <h5 class="text-secondary" style="font-size: 15px;margin-top:-8px;">@ByTaeHello</h5>
                                    <h5 class="text-secondary" style="font-size: 13px;margin-top:-8px;">18 กันยายน 2020</h5>
                                </div>

                            </div>
                            <div class="py-3">
                                <h5 style="font-size:15px;">
                                    <a class="badge text-light" style="background-color: #d09a2d;">พระพุทธรูปบูชา</a>
                                    <a>ภปร วัดบวรนิเวศวิหาร ปี 2508 บล็อกหนังไก่ หน้าตัก 5 นิ้ว (ที่สุดของพระบูชา ภปร. วัดบวร)</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-4">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-2">
                            <img src="/img/หน้า รายการพระเครื่อง/รูปภาพ/png/Group 793.png" class="w-100">
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <div class="row">
                                <div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 pl-0">
                                    <img src="/img/หน้า รายการพระเครื่อง/รูปภาพ/png/Group 795.png" class="img-profile">
                                </div>
                                <div class="col-8 col-sm-10 col-md-10 col-lg-10 col-xl-10 pl-0">
                                    <h5 style="font-size: 15px;">พระลาน</h5>
                                    <h5 class="text-secondary" style="font-size: 15px;margin-top:-8px;">@Phralanofficial</h5>
                                    <h5 class="text-secondary" style="font-size: 13px;margin-top:-8px;">1 กุมภาพันธ์ 2019</h5>
                                </div>

                            </div>
                            <div class="row py-3">
                                <h5 style="font-size:15px;">
                                    <a class="badge text-light" style="background-color: #d09a2d;">พระบูชา</a>
                                    <a>รุ่นแรกหน้าตัก 5 นิ้ว หลวงพ่อแก้ว วัดโคกโดน จ.พัทลุง</a>
                                </h5>
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

    <script src="owl-carousel/jquery-1.9.1.min.js"></script>
    <script src="owl-carousel/owl.carousel.min.js"></script>

    <!-- Frontpage Demo -->
    <script>
        $(document).ready(function($) {
            $("#owl-example").owlCarousel();
        });
        // $("body").data("page", "frontpage");
    </script>

</body>

</html>