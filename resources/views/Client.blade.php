@extends('Layouts')

@section('title') ادخال عميل  @endsection

@section('content')




        {!! Form::open(['route' => 'client.store','method'=>'post']) !!}



                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-header" style="margin:30px ;">
                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                    <h5 class="card-title text-center ">ادخال عميل</h5>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">الاسم</label>
                        <div class="col-sm-4">
                        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'الاسم'])!!}

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">رقم الهاتف</label>
                        <div class="col-sm-4">
                        {!!Form::number('phone',null,['class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">البلد</label>
                        <div class="col-sm-4">
                        {!!Form::text('address',null,['class'=>'form-control','placeholder'=>'البلد'])!!}

                        </div>
                    </div>
                    <div class="container">

                    <div class="form-row" style="margin-top:50;">
                        <div class="col-sm-4">
                            <label>خامة الفريم </label>

                            {!! Form::select('frame_material'
                            , ['سيليكون'=>'سيليكون', 'معدن'=>'معدن','بلاستيك'=>'بلاستيك'],null
                            , ['class'=>'form-control','placeholder' => 'اختار'])
                            !!}

                        </div>

                        <div class="col-sm-4">
                            <label >نوع الفريم </label>

                            {!! Form::select('frame_types_id',$frameType, null,
                            ['class'=>'custom-select my-1 mr-sm-2','placeholder' => 'اختار']) !!}

                        </div>

                    </div>

                    <div class="form-row" style="margin-top:50;">
                        <div class="col-sm-4">
                            <label >خامة العدسه </label>

                            {!! Form::select('lens_material'
                            , ['زجاج'=>'زجاج','بلاستيك'=>'بلاستيك'],null
                            , ['class'=>'form-control','placeholder' => 'اختار'])
                            !!}

                        </div>
                        <div class="col-sm-4">
                            <label>نوع العدسه </label>

                            {!!Form::text('lens_type',null,['class'=>'form-control','placeholder'=>'نوع العدسه'])!!}

                        </div>
                    </div>



                    <div class="form-row" style="margin-top:20px ;">

                        <div class="col">
                            <label>AX</label>
                            {!!Form::number('l_ax',null,['class'=>'form-control','placeholder'=>'AX', 'step'=>'0.01'])!!}
                        </div>

                        <div class="col">
                            <label>CYL</label>
                            {!!Form::number('l_cyl',null,['class'=>'form-control','placeholder'=>'CYL' , 'step'=>'0.01'])!!}
                        </div>

                        <div class="col">
                            <label>SPIL</label>
                            {!!Form::number('l_spil',null,['class'=>'form-control','placeholder'=>'SPIL' , 'step'=>'0.01'])!!}
                        </div>

                        <div class="col">
                        <label>I.P.D</label>
                        {!!Form::number('i_p_d',null,['class'=>'text-center form-control','placeholder'=>'I.P.D' , 'step'=>'0.01'])!!}
                        </div>

                        <div class="col">
                        <label>AX</label>
                        {!!Form::number('r_ax',null,['class'=>'form-control','placeholder'=>'AX', 'step'=>'0.01'])!!}
                        </div>

                        <div class="col">
                        <label>CYL</label>
                        {!!Form::number('r_cyl',null,['class'=>'form-control','placeholder'=>'CYL' , 'step'=>'0.01'])!!}
                        </div>

                        <div class="col ">
                        <label>SPIL</label>
                        {!!Form::number('r_spil',null,['class'=>'form-control','placeholder'=>'SPIL', 'step'=>'0.01'])!!}
                        </div>

                    </div>


                    <div class="form-row" style="margin-top:20px ;">
                    <div class="col mb-3">
                    <label>السعر</label>
                    {!!Form::number('price',null,['class'=>'form-control','placeholder'=>'السعر'])!!}
                    </div>

                    <div class="col">
                    <label>مدفوع</label>
                    {!!Form::number('paid_up',null,['class'=>'form-control','placeholder'=>'مدفوع' ])!!}
                    </div>

                    <div class="col">
                    <label>متبقي</label>
                    {!!Form::number('remainder',null,['class'=>'form-control','placeholder'=>'متبقي'])!!}
                    </div>


                    </div>



                    <button type="submit" class="btn btn-outline-success">حفظ البيانات</button>

                    {!! Form::close() !!}

@endsection

