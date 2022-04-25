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
        <form action="{{route('adddashboard')}}" method="post">
            @csrf
            <input type="text" class="form-control border w-100" style="border-radius: 10px;" name="user_content" placeholder="คุณกำลังจะขายพระอะไร ?">
            <input type="submit" value="โพสต์" class="btn rounded-pill text-light mt-3 mb-2" style="background-color: #d09b2c;width:170px;">
        </form>
    </div>
</div>

<hr>

<div class="table">
    <thead>

        <tr>
            <td></td>
        </tr>

    </thead>
    <tbody>
        <tr>
            <td></td>
        </tr>
    </tbody>
</div>
@foreach($user_content as $row)
<div class="bg-light card-new" style="border-top-right-radius: 0;border-top-left-radius:0;">
    <div class="pt-3">
        <div class="row">
            <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1">
                <img src="/img/png/profile pic/Group 1079.png" class="img-profile">
            </div>
            <div class="col-8 col-xs-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                <b class="font-size16">{{$row->name}}</b>&nbsp;&nbsp;
                <a class="font-size15" style="color: #d09b2c;">ติดตาม</a><br>
                <h5 class="font-size16" style="color: #a9aca7;">{{$row->email}}</h5>
                <h5 class="font-size13" style="color: #a9aca7;margin-top:-5px;">
                    @if($row->created_at == NULL)
                    ไม่มีการเก็บเวลาcreate
                    @else
                    {{Carbon\Carbon::parse($row->created_at)->diffForHumans()}}
                    @endif

                </h5>
            </div>
            <div class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-end">
                <div class="pb-2">
                    <img src="/img/svg/save.svg" style="width: 20px;">&nbsp;
                </div>

                <div class="dropdown">
                    <img src="/img/svg/other.svg" class="dropdown-toggle" style="width: 20px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{url('/dashboard/edit/'.$row->id)}}" type="button" data-toggle="modal" data-target="#editModal">แก้ไขโพสต์</a>
                        <a class="dropdown-item" href="{{url('/dashboard/softdelete/'.$row->id)}}">ลบโพสต์</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <p class=" font-size15">{{$row->user_content}} {{$user_content->firstItem()+$loop->index}}</p>
        <img src="/img/jpeg/Post1.jpg" style="width: 100%;" data-toggle="modal" data-target="#contentModal">

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
@endforeach

{{$user_content->links()}}

<!-- Modal edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">แก้ไขโพสต์</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-2 col-xs-2 col-sm-2 col-md-1 col-lg-1 col-xl-1">
                        <img src="/img/png/profile pic/Mask Group 2.png" class="img-profile">
                    </div>
                    <div class="col-10 col-xs-10 col-sm-10 col-md-11 col-lg-11 col-xl-11">
                        <form action="{{url('/dashboard/update/'.$row->id)}}" method="post">
                            @csrf
                            <input type="text" class="form-control border w-100" style="border-radius: 10px;" name="user_content" value="{{$row->user_content}}" placeholder="แก้ไขโพสต์">
                            <input type="submit" value="อัพเดท" class="btn rounded-pill text-light mt-3 mb-2" style="background-color: #d09b2c;width:170px;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>