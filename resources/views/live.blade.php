<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.inc-header')
</head>

<body>
    <div class="">
         <!-- Navbar header -->
         @include('include.navbar.inc-navbar-profile')



        <div class="" style="padding-top: 80px;">
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