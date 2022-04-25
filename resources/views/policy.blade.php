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
                    <div class="col-1" style="margin-left:-60px;">
                    </div>
                    <a class="col" style="color: #7f8685;text-decoration:none;font-size:21px;" href="{{ url('/contact') }}">
                        <img src="/img/svg/contact.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        ติดต่อเรา
                    </a>
                </div>
                <div class="row pl-3 pb-2 mb-4">
                    <div class="col-1" style="background-color: #d09b2c;margin-left:-60px;">
                    </div>
                    <a class="col" style="color: #d09b2c;text-decoration:none;font-size:21px;" href="{{ url('/policy') }}">
                        <img src="/img/svg/policy2.svg" class="" style="width: 24px;">&nbsp;&nbsp;
                        นโยบายและเงื่อนไข
                    </a>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">

                <div class="bg-light card-new">
                    <div class="container text-center">
                        <h5 class="font-weight-bold " style="font-size:24px;padding: 30px 0 0 0;">นโยบายเงื่อนไข</h5>
                    </div>
                    <div class="container p-5" style="padding: 1rem 3rem 3rem 3rem!important;">
                        <h5 class="font-weight-bold" style="font-size:15px;">เราเก็บข้อมูลอะไรบ้าง?</h5>
                        <h5 class="mb-4" style="font-size:15px;">เราจะมีการเก็บข้อมูลผู้ใช้ เมื่อลงทะเบียนกับ Prathai<br>
                            เราจะขอให้คุณกรอก ชื่อ, อีเมล, อายุ, เพศ หรือดึงข้อมูลเหล่านี้จากการลงทะเบียนผ่าน Facebook เพื่อเก็บไว้ในระบบ<br>
                            เราอาจจะเก็บรายชื่อนิยายที่คุนอ่าน โดยจะไม่มีผู้ใช้และนักเขียนคนอื่นสามารถเข้าถึงข้อมูลนี้ได้ <br>
                            อย่างไรก็ตามคุณสามารถเข้าใช้เว็บไซต์ขั้นพื้นฐานโดยไม่ต้องลงทะเบียนและไม่เปิดเผยตัวตนได้เช่นกัน</h5>

                        <h5 class="font-weight-bold" style="font-size:15px;">เรานำข้อมูลของคุณไปใช้อะไรบ้าง?</h5>
                        <h5 class="mb-4" style="font-size:15px;">ทุกข้อมูลที่เราเก็บไว้ เราจะนำไปใช้เพื่อจุดประสงค์ดังนี้<br>
                            - ใช้ส่งข้อมูล ข่าวสาร รวมถึงการแจ้งเตือนไปถึงคุณผ่านอีเมล โดยคุณสามารถปิดการรับข้อมูลข่าวสารเหล่านี้ได้ทุกเมนู Setting<br>
                            - ปรับปรุงประสบการณ์ผู้ใช้ เช่น แนะนำนิยายให้เหมาะสมกับกลุ่มนักอ่านที่มีความสนใจใกล้เคียงกัน<br>
                            -เก็บสถิติพฤติกรรมการอ่านในแต่ละกลุ่มเพศและอายุ เพื่อส่งให้นักเขียนปรับปรุงให้เข้าใจกลุ่มเป้าหมายของตัวเอง</h5>

                        <h5 class="font-weight-bold" style="font-size:15px;">การเก็บ cookies</h5>
                        <h5 class="mb-4" style="font-size:15px;">เราจะเก็บ cookies เพื่อจดจำการเข้าใช้ของผู้ใช้ เพื่อพัฒนาประปรับปรุงประสบการณ์การใช้งานโดยเราอาจมีการใช้บริการของบริษัทหรือบุคคลที่สาม ซึ่งเราจะไม่มีการาใช้ของมูลส่วนนี้เพื่อประโยชน์อื่นๆ นอกจากพัฒนาบริการของเราเอง</h5>

                        <h5 class="font-weight-bold" style="font-size:15px;">เราปกปิดข้อมูลผู้ใช้</h5>
                        <h5 class="mb-4" style="font-size:15px;">เราจะไม่ขาย, แลกดปลี่ยน หรือเผยแพร่ข้อมูลของคุณ ยกเว้นแต่บริษัทหรือบุคคลที่สามที่ร่วมงานได้ให้คำสัญญาว่าจะไม่เปิดเผยข้อมูลส่วนตัวผู้ใช้ได้ในกรณีเกิดการร้องเรียนทางกฎหมายหรือเหตุกาณ์ขัดแย้งที่ผิดกับนโยบายและกฎระเบียบที่แจ้งไว้</h5>

                        <h5 class="font-weight-bold" style="font-size:15px;">เงื่อนไขการให้บริการ</h5>
                        <h5 class="mb-4" style="font-size:15px;">กรุณาอ่านเงื่อนไขการให้บริการของเราในหน้า "ข้อตกลงในการใช้งาน" ประกอบไปด้วย</h5>

                        <h5 class="font-weight-bold" style="font-size:15px;">ความยินยอมของคุณ</h5>
                        <h5 class="mb-4" style="font-size:15px;">เมื่อคุณเข้าใช้ Prathai ทั้งเว็บไซต์และแอปพลิเคชัน ถือว่าคุณยอมรับนโยบายความเป็นส่วนตัวนี้</h5>

                        <h5 class="font-weight-bold" style="font-size:15px;">การเปลี่ยนแปลงนโยบายความเป็นส่วนตัว</h5>
                        <h5 class="mb-4" style="font-size:15px;">หากเรามีการอัพเดทนโยบายความเป็นส่วนตัว ทีมงานจะแจ้งผู้ใช้ทุกคนผ่านอีเมลที่ลงทะเบียนไว้ นโยบายความเป็นส่วนตัวนี้ปรับปรุงล่าสุดในวันที่ 1 ธันวาคม 2564 หากมีข้อสงสัยใดๆ สามารถติดต่อทีมงานได้ทาง <a class="text-primary">suppprt๑prathai.com</a> </h5>
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
                <div>
                    <b style="font-size: 18px;">ตามหาพระ</b>
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