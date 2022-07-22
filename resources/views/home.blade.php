@extends('Layouts')

@section('title')الصفحة الرئيسيه @endsection

@section('content')

            @if(Session::has('success'))
                <div class="alert alert-success border-0 alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <span class="font-weight-semibold ">تمت الاضافة  بنجاح</span>
                </div>
            @endif

<img src="/11.png" class="card-img-top" alt="..." height="600px">
@endsection
