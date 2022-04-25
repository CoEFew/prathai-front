<!-- decktop -->
<div class="navbar-head py-3 ipad-ver mobile-ver mobile-xs-ver" style="position: fixed;background-color:rgba(0, 0, 0, 0.3);">
    <div class="row ">
        <div class="col-8 ipad-ver mobile-ver mobile-xs-ver">
            <a class="navbar-brand nav-text text-light koho font-weight-light" style="font: size 24pt;" href="#">
                <img src="/img/logo/logo.png" style="width: 30px;margin-top:-10px;">
                Meta Prathai
            </a>
        </div>
        <div class="col nav-textend ipad-ver mobile-ver mobile-xs-ver">
            <button type="button" class="btn rounded-pill text-light" style="background-color: #d09b2c;width:150px;" data-toggle="modal" data-target="#login">
                เข้าสู่ระบบ
            </button>
            <button type="button" class="btn rounded-pill text-light" style="background-color: #7f8685;width:150px;" data-toggle="modal" data-target="#register">
                สมัครสมาชิก
            </button>

            <a class="nav-link dropdown-toggle btn rounded-pill" style="color:#d09b2c;background-color:#f0ebe1;width:80px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                TH
            </a>
            <div class="dropdown-menu" style="min-width: 5rem;" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" style="" href="#">TH</a>
                <a class="dropdown-item" href="#">EN</a>
                <a class="dropdown-item" href="#">CN</a>
            </div>

        </div>
    </div>
</div>
<!-- mobile -->
<div class="navbar-head py-2 dacktop-xl-ver dacktop-lg-ver dacktop-md-ver" style="position: fixed;background-color:rgba(0, 0, 0, 0.3);">
    <!--Navbar-->
    <nav class="navbar navbar-light light-blue lighten-4">

        <!-- Navbar brand -->
        <a class="navbar-brand text-light koho " href="#">
            <img src="/img/logo/logo.png" style="width: 30px;">
            Meta Prathai
        </a>

        <!-- Collapse button -->
        <div>
            <button class="navbar-toggler toggler-example text-light" data-toggle="collapse" data-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-search"></i>
            </button>

            <button class="navbar-toggler toggler-example text-light" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-video"></i>
            </button>

            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-light"><i class="fas fa-bars fa-1x"></i></span></button>
        </div>

        <!-- Collapsible content 3 search -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent3">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <div class="p-3" style="background-color: #f0ebe1 ;border-radius: 10px;z-index:20;">
                    <div class="p-3 " style="border-radius: 10px;">

                        <li class="nav-item">
                            <div>
                                <b class="font-size18">ตามหาพระ</b>
                                <form class="mt-3">
                                    <div class="form-row">
                                        <div class="col-12 mb-2">
                                            <select class="custom-select my-1 mr-sm-2 rounded-pill" id="inlineFormCustomSelectPref">
                                                <option selected>เลือกจากพระเภทพระ</option>
                                                <option value="1">พระบูชา</option>
                                                <option value="2">พระกรุ</option>
                                                <option value="3">เครื่องราง</option>
                                                <option value="4">พระรูปหล่อ</option>
                                                <option value="5">พระปิดตา</option>
                                                <option value="6">เหรียญหล่อ</option>
                                                <option value="7">พระกรึ่ง พระชัย</option>
                                                <option value="8">พระอื่นๆ</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <input type="text" class="form-control rounded-pill" placeholder="ชื่อพระเครื่อง / ร้านพระ">
                                        </div>
                                        <div class="col-6 mb-2">
                                            <select class="custom-select my-1 mr-sm-2 rounded-pill" id="inlineFormCustomSelectPref">
                                                <option selected>ราคา</option>
                                                <option value="1">100-999</option>
                                                <option value="2">1000-1499</option>
                                                <option value="3">1500-5000</option>
                                            </select>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <select class="custom-select my-1 mr-sm-2 rounded-pill" id="inlineFormCustomSelectPref">
                                                <option selected>จังหวัด</option>
                                                <option value="1">กรุงเทพ</option>
                                                <option value="2">ระนอง</option>
                                                <option value="3">ระยอง</option>
                                                <option value="3">ยะลา</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                                <button class="btn text-light rounded-pill col-12" style="background-color: #d09b2c;">ค้นหาพระ</button>
                                <!-- <hr class="mt-4 rounded" style="border-width: 2px;background-color:#c3c1bd;"> -->
                            </div>
                        </li>

                    </div>

                </div>

            </ul>
            <!-- Links -->

        </div>
        <!-- Collapsible content -->

        <!-- Collapsible content 2 video -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <div class="p-3" style="background-color: #f0ebe1 ;border-radius: 10px;z-index:20;">
                    <div class="p-3 mb-3" style="border-radius: 10px;">
                        <li class="nav-item active mb-2">

                            <b class="font-size18">วิดีโอถ่ายทอดสด</b>
                            <div class="d-flex justify-content-center mt-3">
                                <a type="button" data-toggle="modal" data-target="#liveModal">
                                    <i class="far fa-play-circle text-light" style="margin:45px 0 0 120px;position: absolute;font-size:50px;opacity: 0.5;"></i>
                                </a>
                                <!-- <i class="far fa-play-circle text-light" style="margin-top: 45px;position: absolute;font-size:50px;opacity: 0.5;"></i> -->
                                <img class="w-100" src="/img/png/profile pic/Group 1054.png">
                                <a class="badge bg-danger text-light rounded-pill" style="position: absolute;margin:10px 0 0 -200px;">Live <i class="fas fa-caret-down"></i></a>
                            </div>

                        </li>
                        <li class="nav-item">
                            <div class="card p-3 mt-3" style="background-color: #ffffff;border-radius: 10px;color:#7f8685;">
                                <h5 class="font-size15">ตารางเวลาถ่ายทอดสดวิดีโอ</h5>
                                <hr>
                                <div class="row">
                                    <h5 class="d-flex pr-3 font-size15">MON</h5>
                                    <h5 class="col badge rounded-pill font-weight-light" style="background-color: #f0ebe1;">10.00-11.00</h5>
                                    <h5 class="col badge rounded-pill font-weight-light" style="background-color: #f0ebe1;">19.00-20.00</h5>
                                </div>
                                <div class="row">
                                    <h5 class="d-flex pr-3 font-size15">TUE</h5>
                                    <h5 class="col"></h5>
                                    <h5 class="col badge rounded-pill font-weight-light" style="background-color: #f0ebe1;">19.00-20.00</h5>
                                </div>
                                <div class="row">
                                    <h5 class="d-flex pr-3 font-size15">WED</h5>
                                    <h5 class="col badge rounded-pill font-weight-light" style="background-color: #f0ebe1;">10.00-11.00</h5>
                                    <h5 class="col badge rounded-pill font-weight-light" style="background-color: #f0ebe1;">19.00-20.00</h5>
                                </div>
                                <div class="row">
                                    <h5 class="d-flex pr-3 font-size15">THU</h5>
                                    <h5 class="col"></h5>
                                    <h5 class="col badge rounded-pill font-weight-light" style="background-color: #f0ebe1;">19.00-20.00</h5>
                                </div>
                                <div class="row">
                                    <h5 class="d-flex pr-3 font-size15">FRI</h5>
                                    <h5 class="col"></h5>
                                    <h5 class="col badge rounded-pill font-weight-light" style="background-color: #f0ebe1;">19.00-20.00</h5>
                                </div>
                                <div class="row">
                                    <h5 class="d-flex pr-3 font-size15">SAT</h5>
                                    <h5 class="col badge rounded-pill font-weight-light" style="background-color: #f0ebe1;">10.00-11.00</h5>
                                    <h5 class="col"></h5>
                                </div>
                                <div class="row">
                                    <h5 class="d-flex pr-3 font-size15">SUN</h5>
                                    <h5 class="col"></h5>
                                    <h5 class="col badge rounded-pill font-weight-light" style="background-color: #f0ebe1;">19.00-20.00</h5>
                                </div>
                            </div>
                        </li>
                    </div>

                </div>

            </ul>
            <!-- Links -->

        </div>
        <!-- Collapsible content -->


        <!-- Collapsible content 1 hamberger -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <div class="p-3" style="background-color: #f0ebe1 ;border-radius: 10px;z-index:20;">
                    <div class="" style="background-color: #f0ebe1;border-radius: 10px;padding:1rem 1rem 0 1rem">
                        <li class="nav-item active mb-2">

                            <a type="button" class="rounded  font-size21" style="width:150px;color: #7f8685;" data-toggle="modal" data-target="#login">
                                เข้าสู่ระบบ
                            </a>
                            <span class="sr-only">(current)</span>
                        </li>
                        <li class="nav-item">

                            <a type="button" class="rounded font-size21" style="width:150px;color: #7f8685;" data-toggle="modal" data-target="#register">
                                สมัครสมาชิก
                            </a>

                        </li>
                        <hr>
                    </div>

                    <div class="p-3" style="background-color: #f0ebe1;border-radius: 10px;">
                        <li class="nav-item">
                            <a class="nav-link font-size21" style="color: #d09b2c;text-decoration:none;" href="{{ url('/') }}">
                                <img src="/img/svg/home2.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                                หน้าหลัก
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-size21" style="color: #7f8685;text-decoration:none;" href="{{ url('/amuletlist') }}">
                                <img src="/img/svg/amulet-list.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                                รายการพระเครื่อง</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-size21" style="color: #7f8685;text-decoration:none;" href="{{ url('/certificate') }}">
                                <img src="/img/svg/certificate.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                                ตรวจสอบใบรับรอง</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-size21" style="color: #7f8685;text-decoration:none;" href="{{ url('/new') }}">
                                <img src="/img/svg/news.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                                ข่าวสาร</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-size21" style="color: #7f8685;text-decoration:none;" href="{{ url('/contact') }}">
                                <img src="/img/svg/contact.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                                ติดต่อเรา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-size21" style="color: #7f8685;text-decoration:none;" href="{{ url('/policy') }}">
                                <img src="/img/svg/policy.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                                นโยบายและเงื่อนไข</a>
                        </li>
                    </div>

                </div>

            </ul>
            <!-- Links -->

        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->
</div>

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
                <a class="btn text-center w-100 text-light mt-1" style="background-color: #d09b2c;border-radius: 15px;" href="{{ url('/index_login') }}">เข้าสู่ระบบ</a>
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