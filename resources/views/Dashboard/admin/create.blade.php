@extends('Dashboard.layouts.master')

@section('title')
 اضافة مستخدم
@endsection

@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">اضافة مستخدم</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <p class="mb-4"> <strong></strong> </p>

        <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->

        {!!Form::open(['route' => 'register', 'class'=>'form-validate-jquery','method'=>'post'])!!}


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>


     <!-- <x-auth-validation-errors  class="alert alert-warning alert-styled-left alert-dismissible" :errors="$errors"/> -->

    <!-- Basic text input -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">الاسم بالكامل <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('name',null,['class'=>'form-control'])!!}
        </div>
    </div>
    <!-- /basic text input -->




    <!-- Email field -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">البريد الالكتروني <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::email('email',null,['class'=>'form-control'])!!}
            {{-- <input type="email" name="email" class="form-control"  required placeholder="Enter a valid email address"> --}}
        </div>
    </div>
    <!-- /email field -->


    <!-- /input group -->


    <!-- Password field -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">كلمه السر  <span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!!Form::password('password',['class'=>'form-control'])!!}

        </div>
    </div>
    <!-- /password field -->


    <!-- Repeat password -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">تاكيد كلمه السر <span class="text-danger">*</span></label>
        <div class="col-lg-9">


            {!!Form::password('password_confirmation',['class'=>'form-control'])!!}

        </div>
    </div>






    <!-- /repeat password -->
</fieldset>




        <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> اضافة </button>
        {!! Form::close() !!}
    </div>
</div>





@endsection
