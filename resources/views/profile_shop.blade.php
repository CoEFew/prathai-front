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
                <div class="bg-light">
                    <div class="container">

                        <div class="pt-3 mb-3">
                            <b class="font-size18">โพสต์ขายทางนี้</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1">
                            <img src="/img/png/profile pic/Mask Group 2.png" class="img-profile">
                        </div>
                        <div class="col-10 col-xs-10 col-sm-10 col-md-11 col-lg-11 col-xl-11">
                            <input type="text" class="form-control border w-100" style="border-radius: 10px;" placeholder="คุณกำลังจะขายพระอะไร ?">
                            <a class="btn rounded-pill text-light mt-3 mb-2" style="background-color: #d09b2c;width:170px;">โพสต์</a>
                        </div>
                    </div>
                    <hr>

                    <nav class="text-center">
                        <div class="row nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="col nav-item nav-link nav-tabs-post active font-weight-bold" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">โพสต์ทั้งหมด</a>
                            <a class="col nav-item nav-link nav-tabs-post font-weight-bold" id="nav-new-tab" data-toggle="tab" href="#nav-new" role="tab" aria-controls="nav-new" aria-selected="false">ข่าวสาร</a>
                            <a class="col nav-item nav-link nav-tabs-post font-weight-bold" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">ร้านพระที่ติดตาม</a>
                            <a class="col nav-item nav-link nav-tabs-post font-weight-bold" id="nav-like-tab" data-toggle="tab" href="#nav-like" role="tab" aria-controls="nav-like" aria-selected="false">พระที่ถูกใจ</a>
                        </div>
                    </nav>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="bg-light card-new" style="border-top-right-radius: 0;border-top-left-radius:0;">
                            <div class="pt-3">
                                <div class="row">
                                    <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1">
                                        <img src="/img/png/profile pic/Group 1079.png" class="img-profile">
                                    </div>
                                    <div class="col-8 col-xs-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
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
                            </div>
                            <div class="container">
                                <p class="text-primary font-size15">#โทนบางแคFC</p>
                                <p class="text-primary font-size15" style="margin-top:-15px;">#รับเช่าพระด้วยเงินสดให้ราคายุติธรรม</p>
                                <p class="font-size15" style="margin-top:-15px;">
                                <h5 class="font-size15">สวัสดียามเช้าครับ ท่านที่กดรหัสจองเหรียญ ทองคำฝังเพชรเข้ามาทั้ง5พิมพ์ วันนี้เวลา 12.00 น. แอดมินจะเก็บยอดของทุกท่านให้ครบภายในวันนี้ หากมีเพิ่มเติมสามารถใส่รหัส A4-A5-A6-A7-A8 เข้ามาได้เลยนะครับ...</h5>
                                <h5 class="font-size15" style="color: #d09b2c;margin-top:-10px;">อ่านเพิ่มเติม</h5>
                                </p>
                                <!-- img content trigger modal -->
                                <img src="/img/jpeg/Post1.jpg" style="width: 100%;" data-toggle="modal" data-target="#contentModal">


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
                                            <img src="/img/png/profile pic/Group 1079.png" class="img-profile">
                                        </div>
                                        <div class="col-8 col-xs-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                            <b class="font-size16">โทน บางแค FC</b>&nbsp;&nbsp;
                                            <a class="font-size15" style="color: #d09b2c;">ติดตาม</a><br>
                                            <h5 class="font-size16" style="color: #a9aca7;">@Tone8888</h5>
                                            <h5 class="font-size13" style="color: #a9aca7;margin-top:-5px;">8 ชั่วโมงก่อน</h5>
                                        </div>
                                        <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-end">
                                            <img src="/img/svg/save.svg" style="width: 20px;">&nbsp;
                                            <img src="/img/svg/other.svg" style="width: 20px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <p class="text-primary font-size15">#เหรียญนกยุงโภคทรัพย์ #ครูบาอริยชาติอริยะจิตโต</p>
                                    <p class="text-primary font-size15" style="margin-top:-15px;">#4289 #6395 #เศรษฐีแสนล้าน</p>
                                    <p class="font-size15" style="margin-top:-15px;">
                                    <h5 class="font-size15">ถ้าคุณรู้ความหมายStoriesเรื่องราววันข้างหน้าคุณจะเสียดาย</h5>
                                    </p>
                                    <img src="/img/jpeg/Post2.jpg" style="width: 100%;">
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
                            <div class="pt-3">
                                <div class="row">
                                    <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1">
                                        <img src="/img/หน้า Home/Home - ข่าวสาร/รูปภาพ/png/Group 1584.png" class="img-profile">
                                    </div>
                                    <div class="col-8 col-xs-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                        <b class="font-size16">Meta Prathai Officiail</b>&nbsp;&nbsp;
                                        <a class="font-size15" style="color: #d09b2c;">ติดตาม</a><br>
                                        <h5 class="font-size16" style="color: #a9aca7;">@MetaPraThai</h5>
                                        <h5 class="font-size13" style="color: #a9aca7;margin-top:-5px;">3 ชั่วโมงก่อน</h5>
                                    </div>
                                    <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-end">
                                        <img src="/img/svg/save.svg" style="width: 20px;">&nbsp;
                                        <img src="/img/svg/other.svg" style="width: 20px;">
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <p class="text-primary font-size15">#ใบรับรองพระแท้ #ใบเซอร์ #ใบการันตีคุณภาพ</p>
                                <p class="font-size15" style="margin-top:-15px;">
                                    <a class="font-size15">ขอบคุณที่นำพระมาออกบัตรประเมินราคากับเรา ขอบคุณ FCที่มาใช้บริการนะครับ วันนี้เปิดบริการนะครับ ตรวจสอบพระออกบัตรพร้อมประเมินราคา ได้ภายในวันเดียว 11.0 น. ถึง 19.00 น. ยินดีต้อนรับ...</a>
                                    <a style="color: #d09b2c;">อ่านเพิ่มเติม</a>
                                </p>
                                <img src="/img/หน้า Home/Home - ข่าวสาร/รูปภาพ/jpeg/02hCb0.jpg" style="width: 100%;">
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
                                            <h5 class="font-size15" style="margin-top:-15px;padding: 0.375rem;">ขอบคุณครับ</h5>
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
                                            <img src="/img/หน้า Home/Home - ข่าวสาร/รูปภาพ/png/Group 1584.png" class="img-profile">
                                        </div>
                                        <div class="col-8 col-xs-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                            <b class="font-size16">Meta Prathai Officiail</b>&nbsp;&nbsp;
                                            <a class="font-size15" style="color: #d09b2c;">ติดตาม</a><br>
                                            <h5 class="font-size16" style="color: #a9aca7;">@MetaPraThai</h5>
                                            <h5 class="font-size13" style="color: #a9aca7;margin-top:-5px;">3 ชั่วโมงก่อน</h5>
                                        </div>
                                        <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-end">
                                            <img src="/img/svg/save.svg" style="width: 20px;">&nbsp;
                                            <img src="/img/svg/other.svg" style="width: 20px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <p class="font-size15">
                                        <a class="font-size15">สวัสดียามเช้าสามาชิกFCทุกท่านครับ<br>หากเรามีการวางแผนในการดำเนินชีวิต ในทุกวินาทีของลมหายใจ ผมเชื่อว่า ชีวิตคุณจะเปลี่ยนไปในทางที่ดีเสมอ จงรักษาโอกาสเมื่อได้รับ จงพัฒนาโอกาสใหม่ให้ดีกว่าเดิม ตลอดเวลา นั่นแหละ</a>
                                        <a style="color: #d09b2c;">อ่านเพิ่มเติม</a>
                                    </p>
                                    <img src="/img/หน้า Home/Home - ข่าวสาร/รูปภาพ/jpeg/l863qi.jpg" style="width: 100%;">
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
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="bg-light card-new" style="border-top-right-radius: 0;border-top-left-radius:0;">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
                                    <div class="border p-4 mt-4 " style="border-color: #a9aca7;border-radius:10px;">
                                        <img src="/img/หน้า Home/Home - ร้านพระที่ติดตาม/รูปภาพ/png/Group 228.png" class="img-profile-follow">
                                        <h5 class="font-size15 mt-4">บอยท่า พระจันทร์ FC</h5>
                                        <h5 class="font-size15" style="color: #a9aca7;">@boythaphrachan</h5>
                                        <button class="btn border rounded-pill" style="color: #a9aca7;border-color:#a9aca7;">กำลังติดตาม</button>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
                                    <div class="border p-4 mt-4 " style="border-color: #a9aca7;border-radius:10px;">
                                        <img src="/img/หน้า Home/Home - ร้านพระที่ติดตาม/รูปภาพ/png/Group 231.png" class="img-profile-follow">
                                        <h5 class="font-size15 mt-4">ร้านพระเครื่องนพเก้า</h5>
                                        <h5 class="font-size15" style="color: #a9aca7;">@Noppagao168</h5>
                                        <button class="btn border rounded-pill" style="color: #a9aca7;border-color:#a9aca7;">กำลังติดตาม</button>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
                                    <div class="border p-4 mt-4" style="border-color: #a9aca7;border-radius:10px;">
                                        <img src="/img/หน้า Home/Home - ร้านพระที่ติดตาม/รูปภาพ/png/Group 240.png" class="img-profile-follow">
                                        <h5 class="font-size15 mt-4">หวานเจี๊ยบพระเครื่อง Fc.</h5>
                                        <h5 class="font-size15" style="color: #a9aca7;">@Waanjeab</h5>
                                        <button class="btn border rounded-pill" style="color: #a9aca7;border-color:#a9aca7;">กำลังติดตาม</button>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
                                    <div class="border p-4 mt-4" style="border-color: #a9aca7;border-radius:10px;">
                                        <img src="/img/หน้า Home/Home - ร้านพระที่ติดตาม/รูปภาพ/png/Group 234.png" class="img-profile-follow">
                                        <h5 class="font-size15 mt-4">พระเครื่องเมืองไทย รับประกันแท้สากล</h5>
                                        <h5 class="font-size15" style="color: #a9aca7;">@Thaiamulet</h5>
                                        <button class="btn border rounded-pill" style="color: #a9aca7;border-color:#a9aca7;">กำลังติดตาม</button>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
                                    <div class="border p-4 mt-4 " style="border-color: #a9aca7;border-radius:10px;">
                                        <img src="/img/หน้า Home/Home - ร้านพระที่ติดตาม/รูปภาพ/png/Group 243.png" class="img-profile-follow">
                                        <h5 class="font-size15 mt-4">พระเครื่องเรื่องสนุก</h5>
                                        <h5 class="font-size15" style="color: #a9aca7;">@delightfulamulets</h5>
                                        <button class="btn border rounded-pill" style="color: #a9aca7;border-color:#a9aca7;">กำลังติดตาม</button>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
                                    <div class="border p-4 mt-4 " style="border-color: #a9aca7;border-radius:10px;">
                                        <img src="/img/หน้า Home/Home - ร้านพระที่ติดตาม/รูปภาพ/png/Group 237.png" class="img-profile-follow">
                                        <h5 class="font-size15 mt-4">นิยมพระแท้Byโจ้ พีหัง</h5>
                                        <h5 class="font-size15" style="color: #a9aca7;">@sathuamulet</h5>
                                        <button class="btn border rounded-pill" style="color: #a9aca7;border-color:#a9aca7;">กำลังติดตาม</button>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
                                    <div class="border p-4 mt-4" style="border-color: #a9aca7;border-radius:10px;">
                                        <img src="/img/หน้า Home/Home - ร้านพระที่ติดตาม/รูปภาพ/png/Group 221.png" class="img-profile-follow">
                                        <h5 class="font-size15 mt-4">คลองหกพระเครื่อง</h5>
                                        <h5 class="font-size15" style="color: #a9aca7;">@Yaamulet</h5>
                                        <button class="btn border rounded-pill" style="color: #a9aca7;border-color:#a9aca7;">กำลังติดตาม</button>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center mb-3">
                                    <div class="border p-4 mt-4" style="border-color: #a9aca7;border-radius:10px;">
                                        <img src="/img/หน้า Home/Home - ร้านพระที่ติดตาม/รูปภาพ/png/Group 224.png" class="img-profile-follow">
                                        <h5 class="font-size15 mt-4">ร้าน บ้านอยู่ดี มงคลอุดมลาภ</h5>
                                        <h5 class="font-size15" style="color: #a9aca7;">@Baan-yu-dee</h5>
                                        <button class="btn border rounded-pill" style="color: #a9aca7;border-color:#a9aca7;">กำลังติดตาม</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-like" role="tabpanel" aria-labelledby="nav-like-tab">
                        <div class="bg-light card-new" style="border-top-right-radius: 0;border-top-left-radius:0;">
                            <div class="pt-3">
                                <div class="row">
                                    <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1">
                                        <img src="/img/png/profile pic/Group 1079.png" class="img-profile">
                                    </div>
                                    <div class="col-8 col-xs-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                        <b class="font-size16">พระเมืองนนท์</b>&nbsp;&nbsp;
                                        <a class="font-size15" style="color: #d09b2c;">ติดตาม</a><br>
                                        <h5 class="font-size16" style="color: #a9aca7;">@pramuangnon1</h5>
                                        <h5 class="font-size13" style="color: #a9aca7;margin-top:-5px;">2 วันก่อน</h5>
                                    </div>
                                    <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-end">
                                        <img src="/img/svg/save2.svg" style="width: 20px;">&nbsp;
                                        <img src="/img/svg/other.svg" style="width: 20px;">
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <p>"เหรียญหลวงปู่เปลี่ยน รุ่นแรก วัดใต้ ปี2472"</p>
                                <p>ท่านสามรถดูคลิปวิดีโอเพิ่มได้เพียงคลิ๊กที่ลิ้งค์</p>
                                <p class="text-primary mb-0 font-size15">#https://youtube/1HUy3qtMoPM</p>
                                <p class="text-primary mb-0 font-size15">#เหรียญหลวงปู่เปลี่ยนรุ่นแรก</p>
                                <p class="text-primary mb-0 font-size15">#วัดใต้</p>
                                <p class="text-primary mb-0 font-size15">#หยิบกล้องส่งพระ</p>
                                <p class="text-primary font-size15">#โทนบางแค</p>

                                <div class="row">
                                    <img class="col-6 p-1" src="/img/หน้า Home/Home - พระที่ถูกใจ/รูปภาพ/jpeg/Group 150.jpg" style="width: 100%;">
                                    <img class="col-6 p-1" src="/img/หน้า Home/Home - พระที่ถูกใจ/รูปภาพ/jpeg/Group 152.jpg" style="width: 100%;">
                                    <img class="col-6 p-1" src="/img/หน้า Home/Home - พระที่ถูกใจ/รูปภาพ/jpeg/Group 154.jpg" style="width: 100%;">
                                    <img class="col-6 p-1" src="/img/หน้า Home/Home - พระที่ถูกใจ/รูปภาพ/jpeg/Group 156.jpg" style="width: 100%;">
                                </div>

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
                                            <img src="/img/png/profile pic/Group 1079.png" class="img-profile">
                                        </div>
                                        <div class="col-8 col-xs-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                                            <b class="font-size16">โทน บางแค FC</b>&nbsp;&nbsp;
                                            <a class="font-size15" style="color: #d09b2c;">ติดตาม</a><br>
                                            <h5 class="font-size16" style="color: #a9aca7;">@Tone8888</h5>
                                            <h5 class="font-size13" style="color: #a9aca7;margin-top:-5px;">8 ชั่วโมงก่อน</h5>
                                        </div>
                                        <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-end">
                                            <img src="/img/svg/save2.svg" style="width: 20px;">&nbsp;
                                            <img src="/img/svg/other.svg" style="width: 20px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <p class="font-size15">ช่วงนี้กำลังแรงครับ</p>
                                    <p class="font-size15" style="margin-top:-15px;">หลวงพ่อรุ่งวัดท่ากระบือ ใครมีแบบนี้รับเช่านะครับ</p>
                                    <div class="row">
                                        <img class="col-6 p-1" src="/img/หน้า Home/Home - พระที่ถูกใจ/รูปภาพ/jpeg/Group 150.jpg" style="width: 100%;">
                                        <img class="col-6 p-1" src="/img/หน้า Home/Home - พระที่ถูกใจ/รูปภาพ/jpeg/Group 152.jpg" style="width: 100%;">
                                    </div>
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
                                                <h5 class="font-size15" style="margin-top:-15px;padding: 0.375rem;">แจ่มครับ</h5>
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
                    <hr class="mt-4 rounded" style="border-width: 2px;background-color:#c3c1bd;">
                    <h5 class="font-size15" style="color: #7f8685;">แก้ไขข้อมูลร้านค้า</h5>
                    <h5 class="font-size15" style="color:#d09b2c">แก้ไขข้อมูลบัญชีรับเงิน</h5>
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