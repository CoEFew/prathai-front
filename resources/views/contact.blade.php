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
                    <div class="col-1" style="background-color: #d09b2c;margin-left:-60px;">
                    </div>
                    <a class="col" style="color: #d09b2c;text-decoration:none;font-size:21px;" href="{{ url('/contact') }}">
                        <img src="/img/svg/contact2.svg" class="" style="width: 24px;">&nbsp;&nbsp;
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
                        <h5 class="font-weight-bold " style="font-size:24px;padding: 30px 0 10px 0;">ติดต่อเรา</h5>
                        <a style="font-size:15px;">
                            บริษัท พระเครื่องเมืองไทย จำกัด<br>
                            บริหารโดย โทน บางแค<br><br>
                            บริการ รับเช่า-รับจัดหาพระเครื่อง พระบูชา เหรียญคณาจารย์ ยอดนิยมทุกชนิด<br>
                            และของเก่าโบราณทุกประเภท ทั่วราชอาณาจักร ในราคายุติธรรม<br>
                            บริการเอ็กซเรย์ ออกบัตรรับรองพระเครื่อง และ หนังสือรับรองพระแท้
                        </a>
                        <hr>
                    </div>
                    <div class="container">
                        <div class="row pb-5">
                            <a class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 font-weight-bold" style="font-size:15px;">ข้อมูลการติดต่อ</a>
                            <a class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="font-size:15px;">โทร</a>
                            <a class="col-9 col-sm-10 col-md-10 col-lg-10 col-xl-10" style="font-size:15px;">: 02-953-5587</a>
                            <a class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="font-size:15px;">Facebook</a>
                            <a class="col-9 col-sm-10 col-md-10 col-lg-10 col-xl-10" style="font-size:15px;">: https://facebook.com/โทน บางแค Fc</a>
                            <a class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="font-size:15px;">LineID</a>
                            <a class="col-9 col-sm-10 col-md-10 col-lg-10 col-xl-10" style="font-size:15px;">: @tone888</a>
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
                    <div class="card p-3 mt-3" style="border-radius: 10px;color:#7f8685;">
                        <b class="text-dark font-size15">ตารางเวลาถ่ายทอดสดวิดีโอ</b>
                        <hr>
                        <div class="row">
                            <h5 class="d-flex mr-2 font-size15">MON</h5>
                            <h5 class="col mr-2 badge rounded-pill font-weight-light bag-light-yellow">10.00-11.00</h5>
                            <h5 class="col badge rounded-pill font-weight-light bag-light-yellow">19.00-20.00</h5>
                        </div>
                        <div class="row">
                            <h5 class="d-flex mr-2 font-size15">TUE</h5>
                            <h5 class="col"></h5>
                            <h5 class="col badge rounded-pill font-weight-light bag-light-yellow">19.00-20.00</h5>
                        </div>
                        <div class="row">
                            <h5 class="d-flex mr-2 font-size15">WED</h5>
                            <h5 class="col mr-2 badge rounded-pill font-weight-light bag-light-yellow">10.00-11.00</h5>
                            <h5 class="col badge rounded-pill font-weight-light bag-light-yellow">19.00-20.00</h5>
                        </div>
                        <div class="row">
                            <h5 class="d-flex mr-2 font-size15">THU</h5>
                            <h5 class="col"></h5>
                            <h5 class="col badge rounded-pill font-weight-light bag-light-yellow">19.00-20.00</h5>
                        </div>
                        <div class="row">
                            <h5 class="d-flex mr-2 font-size15">FRI</h5>
                            <h5 class="col"></h5>
                            <h5 class="col badge rounded-pill font-weight-light bag-light-yellow">19.00-20.00</h5>
                        </div>
                        <div class="row">
                            <h5 class="d-flex mr-2 font-size15">SAT</h5>
                            <h5 class="col badge rounded-pill font-weight-light bag-light-yellow">10.00-11.00</h5>
                            <h5 class="col"></h5>
                        </div>
                        <div class="row">
                            <h5 class="d-flex mr-2 font-size15">SUN</h5>
                            <h5 class="col"></h5>
                            <h5 class="col badge rounded-pill font-weight-light bag-light-yellow">19.00-20.00</h5>
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