@extends('Dashboard.Layouts.master')

@section('content')


<div class="card">



@if (Session::has('success'))

<div class="alert alert-success border-0 alert-dismissible">
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    <span class="font-weight-semibold ">تم تعديل كلمه المرور بنجاح</span>
</div>
@endif

@if (Session::has('update'))

<div class="alert alert-success border-0 alert-dismissible">
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    <span class="font-weight-semibold ">تم تعديل البيانات بنجاح</span>
</div>
@endif

@if (Session::has('add'))

<div class="alert alert-success border-0 alert-dismissible">
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    <span class="font-weight-semibold ">تم اضافة مشرف بنجاح</span>
</div>
@endif




        <div class="card-header header-elements-inline">
            <h5 class="font-weight-semibold">Site stats</h5>
            <div class="header-elements">

            </div>
        </div>

        <div class="card-body">


            <ul class="media-list">

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon"><i class="icon-users "></i></a>
                    </div>

                    <div class="media-body">
                        <h6>عدد  العملاء <a href="">{{$client->count()}}</a></h6>
                        <div class="text-muted"></div>
                    </div>
                </li>



            </ul>
        </div>
</div>
@endsection
