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
                    <div class="col-1" style="background-color: #d09b2c;margin-left:-60px;">
                    </div>
                    <a class="col font-size21" style="color: #d09b2c;text-decoration:none;" href="{{ url('/') }}">
                        <img src="/img/svg/home2.svg" class="" style="width: 24px;">&nbsp;&nbsp;
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


                <div class="bg-light">
                    <div class="">
                        <div class="pt-3">
                            <div class="row">
                                <div class="col-3 col-xs-3 col-sm-3 col-md-1 col-lg-1 col-xl-1">
                                    <img src="/img/png/profile pic/Group 1062.png" class="img-profile-follow">
                                </div>
                                <div class="col-9 col-xs-9 col-sm-9 col-md-11 col-lg-11 col-xl-11">
                                    <div class="row">
                                        <div class="col mt-3">
                                            <b class="font-size16">พระเครื่องเรื่องสนุก</b>&nbsp;&nbsp;
                                            <a class="font-size15">
                                                <i class="fas fa-check-circle" style="color: #d09b2c;"></i>
                                                <span class="badge text-light rounded-pill" style="background-color: #d09b2c;width:35px;">vip</span>
                                            </a><br>
                                            <h5 class="font-size16 " style="color: #a9aca7;">@delightfulamulets</h5>
                                        </div>
                                        <div class="col d-flex justify-content-end">
                                            <a type="button" class="btn rounded-pill" style="color:#d09b2c;border-color: #d09b2c;height:40px;">ติดตาม</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container py-3">
                            <h5 class="font-size15 font-weight-bold">ข้อมูลร้านพระ</h5>
                            <h5 class="font-size15">เปิดให้เช่า-รับเช่า บูชา พระเครื่องและเครื่องราง แท้ 100%</h5>
                            <h5 class="font-size15">รับเช่าใบราคาที่ท่านพอใจ</h5>
                            <div class="row">
                                <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    <h5 class="font-size15">โทร</h5>
                                </div>
                                <div class="col-10 col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                                    <h5 class="font-size15">: 085-5567890 ติดต่อ คุณนนท์</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    <h5 class="font-size15">E-mail</h5>
                                </div>
                                <div class="col-10 col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                                    <h5 class="font-size15">: delightfulamulet@gmail.com</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    <h5 class="font-size15">Facebook</h5>
                                </div>
                                <div class="col-10 col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                                    <h5 class="font-size15">: http://www.facebook.com./ delightfulamulets</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    <h5 class="font-size15">Line ID</h5>
                                </div>
                                <div class="col-10 col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                                    <h5 class="font-size15">: delightfulamulet</h5>
                                </div>
                            </div>
                        </div>

                    </div>

                    <nav class="text-center">
                        <div class="row nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="col nav-item nav-link nav-tabs-post active font-weight-bold" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">โพสต์ทั้งหมด</a>
                            <a class="col nav-item nav-link nav-tabs-post font-weight-bold" id="nav-new-tab" data-toggle="tab" href="#nav-new" role="tab" aria-controls="nav-new" aria-selected="false">ข้อมูลร้านค้า</a>
                            <a class="col"></a>
                            <a class="col"></a>
                        </div>
                    </nav>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="bg-light card-new" style="border-top-right-radius: 0;border-top-left-radius:0;">
                            <div class="pt-3">
                                <div class="row">
                                    <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1">
                                        <img src="/img/png/profile pic/Group 1062.png" class="img-profile">
                                    </div>
                                    <div class="col-8 col-xs-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                        <b class="font-size16">พระเครื่องเรื่องสนุก</b>
                                        <h5 class="font-size16" style="color: #a9aca7;">@delightfulamulets</h5>
                                        <h5 class="font-size13" style="color: #a9aca7;margin-top:-5px;">2 วันก่อน</h5>
                                    </div>
                                    <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-end">
                                        <img src="/img/svg/save.svg" style="width: 20px;">&nbsp;
                                        <img src="/img/svg/other.svg" style="width: 20px;">
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h5 class="font-size15">น้อนรำลึกครบรอบ 77 ปี วันมรณภาพ "สมเด็จพระอริยวงศาคตญาณ (แพ ดิสสเทโว)"<br>
                                    <a class="text-primary">#สมเด็จพระอริยวงศาคตญาณ</a> พระนามเดิม แพ ฉายา ดิสสเทโว เป็นสมเด็จพระสงฆราช สกลมหาสังฆปริณายก พระองค์ที่ 12 แห่งกรุงรัตนโกสินทร์ สถิต ณ <a class="text-primary">#วัดสุทัศนเทพวรารามราชวรมหาวิหาร</a> ทรงดำรงตำแหน่งเมื่อวันที่ 15 พฤศจิกายน พ.ศ.2481 ในรัชสมัยสมเด็จพระเจ้า.. <a style="color:#d09b2c">อ่านเพิ่มเติม</a>
                                </h5>
                                <!-- img content trigger modal -->
                                <img src="/img/หน้า รายการพระเครื่อง/Hpeiym.tif.jpg" style="width: 100%;" data-toggle="modal" data-target="#contentModal">


                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contentModal">
                                    Launch demo modal
                                </button> -->

                                <div class="row mt-3">
                                    <div class="col-3">
                                        <h5 class="font-size15" style="color:#a9aca7;"><img src="/img/svg/like3.svg" class="rounded-circle" style="width: 25px;background-color:#d09b2c"> 2.9 หมื่น</h5>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <h5 class="font-size15" style="color:#a9aca7;">ความคิดเห็น 1.4 พัน รายการ แชร์ 4.7 พัน ครั้ง</h5>
                                    </div>
                                </div>
                                <hr style="margin-top: 0rem;">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="font-size15" style="color:#a9aca7;"><img src="/img/svg/like.svg" class="" style="width: 15px;"> ถูกใจ</h5>
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <h5 class="font-size15" style="color:#a9aca7;"><i class="far fa-comment-alt"></i> แสดงความคิดเห็น</h5>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <h5 class="font-size15" style="color:#a9aca7;"><i class="far fa-share-square"></i> แชร์</h5>
                                    </div>
                                </div>
                                <hr style="margin-top:0px;">
                                <h5 class="font-size15" style="color: #d09b2c;margin-top:-5px;">ความคิดเห็นก่อนหน้า</h5>
                                <div class="row">
                                    <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1" style="padding: 0!important;">
                                        <img src="/img/หน้า video live/รูปภาพ/png/Group 1582.png" class="img-profile">
                                    </div>
                                    <div class="col-10 col-xs-10 col-sm-10 col-md-11 col-lg-11 col-xl-11">
                                        <div style="background-color: #f0ebe1;border-radius:10px;">
                                            <div class="d-flex">
                                                <b class="font-size15" style="color: #d09b2c;margin-top:5px;padding: 0.375rem;">วิชัย เลาหสุวรรณรัตน์</b> &nbsp; &nbsp;
                                                <h5 class="font-size15" style="color: #a9aca7;margin-top:5px;padding: 0.375rem;">2 วันก่อน</h5>
                                            </div>
                                            <h5 class="font-size15" style="margin-top:-15px;padding: 0.375rem;">น้อมกราบสาธุครับ</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1" style="padding: 0!important;">
                                        <img src="/img/png/profile pic/Mask Group 2.png" class="img-profile">
                                    </div>
                                    <div class="col-10 col-xs-10 col-sm-10 col-md-11 col-lg-11 col-xl-11 mt-1 mb-5">
                                        <input type="text" class="form-control border-0 mt-1 " style="background-color: #f0ebe1;" placeholder="เขียนความคิดเห็น...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light card-new">
                            <div>
                                <div class="mt-3 pt-3">
                                    <div class="row">
                                        <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1">
                                            <img src="/img/png/profile pic/Group 1062.png" class="img-profile">
                                        </div>
                                        <div class="col-8 col-xs-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                            <b class="font-size16">พระเครื่องเรื่องสนุก</b>
                                            <h5 class="font-size16" style="color: #a9aca7;">@delightfulamulets</h5>
                                            <h5 class="font-size13" style="color: #a9aca7;margin-top:-5px;">2 วันก่อน</h5>
                                        </div>
                                        <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-end">
                                            <img src="/img/svg/save.svg" style="width: 20px;">&nbsp;
                                            <img src="/img/svg/other.svg" style="width: 20px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <h5 class="font-size15">ปกติผมจะติดผงติดเหรียญติดหล่อวันนี้ขอเป็นคนติดดินนะครับ มีแบบนี้ส่งมาได้นัครับ ร่วมอนุรักษ์พระแท้ไปด้วยกัน รายละเอียดอยู่ในคอมเม้นต์ครับ</h5>
                                    </p>
                                    <img src="/img/หน้า รายการพระเครื่อง/Group 556.jpg" style="width: 100%;">
                                    <div class="row mt-3">
                                        <div class="col-3">
                                            <h5 class="font-size15" style="color:#a9aca7;"><img src="/img/svg/like3.svg" class="rounded-circle" style="width: 25px;background-color:#d09b2c"> 2.9 หมื่น</h5>
                                        </div>
                                        <div class="col d-flex justify-content-end">
                                            <h5 class="font-size15" style="color:#a9aca7;">ความคิดเห็น 1.4 พัน รายการ แชร์ 4.7 พัน ครั้ง</h5>
                                        </div>
                                    </div>
                                    <hr style="margin-top: 0rem;">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="font-size15" style="color:#a9aca7;"><img src="/img/svg/like.svg" class="" style="width: 15px;"> ถูกใจ</h5>
                                        </div>
                                        <div class="col d-flex justify-content-center">
                                            <h5 class="font-size15" style="color:#a9aca7;"><i class="far fa-comment-alt"></i> แสดงความคิดเห็น</h5>
                                        </div>
                                        <div class="col d-flex justify-content-end">
                                            <h5 class="font-size15" style="color:#a9aca7;"><i class="far fa-share-square"></i> แชร์</h5>
                                        </div>
                                    </div>
                                    <hr style="margin-top:0px;">
                                    <h5 class="font-size15" style="color: #d09b2c;margin-top:-5px;">ความคิดเห็นก่อนหน้า</h5>
                                    <div class="row">
                                        <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1" style="padding: 0!important;">
                                            <img src="/img/หน้า video live/รูปภาพ/png/Group 1583.png" class="img-profile">
                                        </div>
                                        <div class="col-10 col-xs-10 col-sm-10 col-md-11 col-lg-11 col-xl-11">
                                            <div style="background-color: #f0ebe1;border-radius:10px;">
                                                <div class="d-flex">
                                                    <b class="font-size15" style="color: #d09b2c;margin-top:5px;padding: 0.375rem;">สุบัน พันธ์ุวัด</b> &nbsp; &nbsp;
                                                    <h5 class="font-size15" style="color: #a9aca7;margin-top:5px;padding: 0.375rem;">2 วันก่อน</h5>
                                                </div>
                                                <h5 class="font-size15" style="margin-top:-15px;padding: 0.375rem;">พระรอดพิมอะไรคับช่วยดูหน่อยครับ</h5>
                                                <img src="/img/หน้า Home/หน้า พระที่ถูกใจ พระเครื่องเรื่องสนุก/Group 581.jpg" style="width: 150px;margin: 0 15px 15px 15px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1" style="padding: 0!important;">
                                            <img src="/img/png/profile pic/Mask Group 2.png" class="img-profile">
                                        </div>
                                        <div class="col-10 col-xs-10 col-sm-10 col-md-11 col-lg-11 col-xl-11 mt-1 mb-5">
                                            <input type="text" class="form-control border-0 mt-1" style="background-color: #f0ebe1;" placeholder="เขียนความคิดเห็น...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-new" role="tabpanel" aria-labelledby="nav-new-tab">
                        <div class="bg-light card-new" style="border-top-right-radius: 0;border-top-left-radius:0;">
                            <div class="container">
                                <h5 class="pt-4 pb-2 font-size15 text-center">
                                    สวัสดีครับทุกท่าน ที่เข้าเยี่ยมชมพระเครื่องของร้าน พระเครื่องเรื่องสนุก <br>
                                    ผม นนท์ ท่าพระ ยินดีต้อนรับทุกท่าน ทางร้านเรามีความยินดีให้บริการ<br>
                                    และจัดหาพระเครื่องที่ท่านต้องการ และ ท่านสามารถพบปะพูดคุย<br>
                                    และชมพระแท้ ได้ที่ชมรมพระเครื่องท่าพระ ทุกวัน เวลา 9.00-17.00 น.
                                </h5>
                                <h5 class="font-size15">
                                    <dt class="mb-2">ที่อยู่</dt>
                                    108 ท่าพระ ถนนประชาอุทิศ แขวงท่าพระ<br>
                                    เขตท่าพระ กรุงเทพมหานคร 10150
                                </h5>
                                <hr>
                                <div class="font-size15">
                                    <dt class="mb-2">ข้อมูลร้านพระ</dt>
                                    <div class="row">
                                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                            <dd>ชื่อบัญชี</dd>
                                        </div>
                                        <div class="col-8 col-sm-9 col-md-10 col-lg-10 col-xl-10">
                                            <dd>: นนท์ บางปะกอก</dd>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                            <dd>เลขที่บัญชี</dd>
                                        </div>
                                        <div class="col-8 col-sm-9 col-md-10 col-lg-10 col-xl-10">
                                            <dd>: 0022636891</dd>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                            <dd>ธนาคาร</dd>
                                        </div>
                                        <div class="col-8 col-sm-9 col-md-10 col-lg-10 col-xl-10">
                                            <dd>: กสิกรไทย</dd>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                            <dd>สาขา</dd>
                                        </div>
                                        <div class="col-8 col-sm-9 col-md-10 col-lg-10 col-xl-10">
                                            <dd>: ทุ่งครุ</dd>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                            <dd>ประเภทบัญชี</dd>
                                        </div>
                                        <div class="col-8 col-sm-9 col-md-10 col-lg-10 col-xl-10">
                                            <dd>: ออมเทรัพย์</dd>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="font-size15 pb-5">
                                    <dt class="mb-2">ที่อยู่</dt>
                                    พระเครื่องทุกองค์จากทางร้านเรา เรายินดี รับประกันแท้ 100% ทุกองค์ครับ
                                </h5>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-3 mobile-xs-ver mobile-ver ipad-ver dacktop-md-ver p-4">
                <div class="">
                    <b class="font-size18">วิดีโอถ่ายทอดสด</b>
                    <div class="d-flex justify-content-center mt-3">
                        <a type="button" data-toggle="modal" data-target="#liveModal">
                            <i class="far fa-play-circle text-light" style="margin:45px 0 0 120px;position: absolute;font-size:50px;opacity: 0.5;"></i>
                        </a>

                        <img class="w-100" src="/img/png/profile pic/Group 1054.png">
                        <a class="badge bg-danger text-light rounded-pill" style="position: absolute;margin:10px 0 0 -200px;">Live <i class="fas fa-caret-down"></i></a>
                    </div>

                    <!-- ตาราง live ขวา -->
                    @include('include.body.inc-timetable-live')

                    <hr class="mt-4 rounded" style="border-width: 2px;background-color:#c3c1bd;">
                </div>

                <!-- ตามหาพระ ขวา -->
                @include('include.body.inc-looking-monk')

                <div>
                    <div class="mt-3 mb-2">
                        <b class="font-size18">ร้านที่คุณอาจจะถูกใจ</b>
                    </div>

                    <div class="row mb-3">
                        <div class="d-flex">
                            <img src="/img/png/profile pic/Group 1058.png" class="img-profile">

                        </div>
                        <div class="col">
                            <b class="font-size15">บอย ท่าพระจันทร์ FC</b>
                            <h5 class="font-size14" style="color: #a9aca7;">@boythaphrachan</h5>
                        </div>
                        <div class="col-3">
                            <button class="btn bg-light rounded-pill font-size15" style="color: #d09b2c;border-color:#d09b2c">ติดตาม</button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="d-flex">
                            <img src="/img/png/profile pic/Group 1060.png" class="img-profile">

                        </div>
                        <div class="col">
                            <b class="font-size15">ร้านพระเครื่องนพเก้า</b>
                            <h5 class="font-size14" style="color: #a9aca7;">@Noppagao168</h5>
                        </div>
                        <div class="col-3">
                            <button class="btn bg-light rounded-pill font-size15" style="color: #d09b2c;border-color:#d09b2c">ติดตาม</button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="d-flex">
                            <img src="/img/png/profile pic/Group 1062.png" class="img-profile">

                        </div>
                        <div class="col">
                            <b class="font-size15">พระเครื่องเรื่องสนุก</b>
                            <h5 class="font-size14" style="color: #a9aca7;">@delightfulamulets</h5>
                        </div>
                        <div class="col-3">
                            <button class="btn bg-light rounded-pill font-size15" style="color: #d09b2c;border-color:#d09b2c">ติดตาม</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a class="font-size15" style="color: #d09b2c;" href="#">ดูเพิ่มเติม <i class="fas fa-caret-down"></i></a>
                    </div>

                    <hr class="mt-4 rounded" style="border-width: 2px;background-color:#c3c1bd;">
                </div>
                <div>
                    <div class="mt-3 mb-2">
                        <b class="font-size18">พระยอดนิยม</b>
                    </div>

                    <h5 class="mb-4 font-size18" style="color: #d09b2c;">#พระบูชา</h5>
                    <h5 class="mb-4 font-size18" style="color: #d09b2c;">#เครื่องราง</h5>
                    <h5 class="mb-4 font-size18" style="color: #d09b2c;">#รูปหล่อ</h5>
                    <div class="d-flex justify-content-end">
                        <a class="font-size15" style="color: #d09b2c;" href="#">ดูเพิ่มเติม <i class="fas fa-caret-down"></i></a>
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



    <!-- Modal content -->
    <div class="modal fade" id="contentModal" tabindex="-1" role="dialog" aria-labelledby="contentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="row">
                        <div class="col">
                            <img src="/img/jpeg/Post1.jpg" style="width: 100%;">
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1">
                                    <img src="/img/png/profile pic/Group 1079.png" class="img-profile">
                                </div>
                                <div class="col-8 col-xs-8 col-sm-8 col-md-9 col-lg-9 col-xl-9" style="padding: 0 0 0 30px!important;">
                                    <b class="font-size16">โทน บางแค FC</b>&nbsp;&nbsp;
                                    <a class="font-size15" style="color: #d09b2c;">ติดตาม</a><br>
                                    <h5 class="font-size16" style="color: #a9aca7;">@Tone8888</h5>
                                    <h5 class="font-size13" style="color: #a9aca7;margin-top:-5px;">3 ชั่วโมงก่อน</h5>
                                </div>
                                <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-end">
                                    <img src="/img/svg/save.svg" style="width: 20px;">&nbsp;
                                    <img src="/img/svg/other.svg" style="width: 20px;">
                                </div>
                            </div>
                            <div class="container">
                                <p class="text-primary font-size15">#โทนบางแคFC</p>
                                <p class="text-primary font-size15" style="margin-top:-15px;">#รับเช่าพระด้วยเงินสดให้ราคายุติธรรม</p>
                                <p class="font-size15" style="margin-top:-15px;">
                                <h5 class="font-size15">สวัสดียามเช้าครับ ท่านที่กดรหัสจองเหรียญ ทองคำฝังเพชรเข้ามาทั้ง5พิมพ์ วันนี้เวลา 12.00 น. แอดมินจะเก็บยอดของทุกท่านให้ครบภายในวันนี้ หากมีเพิ่มเติมสามารถใส่รหัส A4-A5-A6-A7-A8 เข้ามาได้เลยนะครับ...</h5>
                                <h5 class="font-size15" style="color: #d09b2c;margin-top:-10px;">อ่านเพิ่มเติม</h5>
                                </p>
                                <div class="row mt-3">
                                    <div class="col-3">
                                        <h5 class="font-size15" style="color:#a9aca7;"><img src="/img/svg/like3.svg" class="rounded-circle" style="width: 25px;background-color:#d09b2c"> 2.9 หมื่น</h5>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <h5 class="font-size15" style="color:#a9aca7;">ความคิดเห็น 1.4 พัน รายการ แชร์ 4.7 พัน ครั้ง</h5>
                                    </div>
                                </div>
                                <hr style="margin-top: 0rem;">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="font-size15" style="color:#a9aca7;"><img src="/img/svg/like.svg" class="" style="width: 15px;"> ถูกใจ</h5>
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <h5 class="font-size15" style="color:#a9aca7;"><i class="far fa-comment-alt"></i> แสดงความคิดเห็น</h5>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <h5 class="font-size15" style="color:#a9aca7;"><i class="far fa-share-square"></i> แชร์</h5>
                                    </div>
                                </div>
                                <hr style="margin-top:0px;">
                                <h5 class="font-size15" style="color: #d09b2c;margin-top:-5px;">ความคิดเห็นก่อนหน้า</h5>
                                <div class="row">
                                    <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1" style="padding: 0!important;">
                                        <img src="/img/png/profile pic/Group 1084.png" class="img-profile">
                                    </div>
                                    <div class="col-10 col-xs-10 col-sm-10 col-md-11 col-lg-11 col-xl-11">
                                        <div style="background-color: #f0ebe1;border-radius:10px;">
                                            <div class="d-flex">
                                                <b class="font-size15" style="color: #d09b2c;margin-top:5px;padding: 0.375rem;">ออย' เด็กดื้อ</b> &nbsp; &nbsp;
                                                <h5 class="font-size15" style="color: #a9aca7;margin-top:5px;padding: 0.375rem;">2 ชั่วโมงก่อน</h5>
                                            </div>
                                            <h5 class="font-size15" style="margin-top:-15px;padding: 0.375rem;">ผมจะปล่อยหลวงพ่อคง แต่ติดต่อไม่ได้ครับ</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1" style="padding: 0!important;">
                                        <img src="/img/png/profile pic/Mask Group 2.png" class="img-profile">
                                    </div>
                                    <div class="col-10 col-xs-10 col-sm-10 col-md-11 col-lg-11 col-xl-11 mt-1">
                                        <input type="text" class="form-control border-0 mt-1 " style="background-color: #f0ebe1;" placeholder="เขียนความคิดเห็น...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal live -->
    <div class="modal fade" id="liveModal" tabindex="-1" role="dialog" aria-labelledby="liveModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">
                        <div class="bg-light">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8" style="background-color: #000000;">
                                    <div class="align-middle pt-4">
                                        <img class="w-100" src="/img/png/profile pic/Group 1054.png">
                                    </div>

                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg col-xl">
                                    <div class="bg-light card-new" style="border-top-right-radius: 0;border-top-left-radius:0;">
                                        <div class="pt-3">
                                            <div class="row">
                                                <div class="col" style="padding: 0!important;">
                                                    <h5 class="font-size16 font-weight-bold">มาคุยกาันแบบ ไลฟ์สาระ</h5>
                                                </div>
                                                <div class="col-1">
                                                    <a type="button" class="close" href="{{ url('/') }}">
                                                        <span aria-hidden="true">&times;</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="padding: 0!important;">
                                                    <img src="/img/png/profile pic/Group 1079.png" class="img-profile">
                                                </div>
                                                <div class="col col-xs col-sm col-md col-lg col-xl">
                                                    <b class="font-size16">โทน บางแค FC</b><br>
                                                    <h5 class="font-size16" style="color: #a9aca7;">@Tone8888</h5>
                                                </div>
                                                <div class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-end">
                                                    <a class="font-size13" style="color:#a9aca7;">ได้แพร่ภาพสด</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="row mt-3">
                                                <div class="col-3">
                                                    <h5 class="font-size15" style="color:#a9aca7;"><img src="/img/svg/like3.svg" class="rounded-circle" style="width: 25px;background-color:#d09b2c"> 2.9 หมื่น</h5>
                                                </div>
                                                <div class="col d-flex justify-content-end">
                                                    <h5 class="font-size15" style="color:#a9aca7;">ความคิดเห็น 1.4 พัน รายการ แชร์ 4.7 พัน ครั้ง</h5>
                                                </div>
                                            </div>
                                            <hr style="margin-top: 0rem;">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="font-size15" style="color:#a9aca7;"><img src="/img/svg/like.svg" class="" style="width: 15px;"> ถูกใจ</h5>
                                                </div>
                                                <div class="col d-flex justify-content-center">
                                                    <h5 class="font-size15" style="color:#a9aca7;"><i class="far fa-comment-alt"></i> แสดงความคิดเห็น</h5>
                                                </div>
                                                <div class="col d-flex justify-content-end">
                                                    <h5 class="font-size15" style="color:#a9aca7;"><i class="far fa-share-square"></i> แชร์</h5>
                                                </div>
                                            </div>
                                            <hr style="margin-top:0px;">
                                            <h5 class="font-size15" style="color: #d09b2c;margin-top:-5px;">ความคิดเห็นก่อนหน้า</h5>
                                            <div class="row">
                                                <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-2 col-xl-2" style="padding: 0!important;">
                                                    <img src="/img/png/profile pic/Group 1084.png" class="img-profile">
                                                </div>
                                                <div class="col-10 col-xs-10 col-sm-10 col-md-11 col-lg-10 col-xl-10">
                                                    <div style="background-color: #f0ebe1;border-radius:10px;">
                                                        <div class="d-flex">
                                                            <b class="font-size15" style="color: #d09b2c;margin-top:5px;padding: 0.375rem;">ออย' เด็กดื้อ</b> &nbsp; &nbsp;
                                                            <h5 class="font-size15" style="color: #a9aca7;margin-top:5px;padding: 0.375rem;">2 ชั่วโมงก่อน</h5>
                                                        </div>
                                                        <h5 class="font-size15" style="margin-top:-15px;padding: 0.375rem;">ผมจะปล่อยหลวงพ่อคง แต่ติดต่อไม่ได้ครับ</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-2 col-xl-2" style="padding: 0!important;">
                                                    <img src="/img/png/profile pic/Mask Group 2.png" class="img-profile">
                                                </div>
                                                <div class="col-10 col-xs-10 col-sm-10 col-md-11 col-lg-10 col-xl-10 mt-1 mb-5">
                                                    <input type="text" class="form-control border-0 mt-1 " style="background-color: #f0ebe1;" placeholder="เขียนความคิดเห็น...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
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