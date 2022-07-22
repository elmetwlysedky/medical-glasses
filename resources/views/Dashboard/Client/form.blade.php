<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">الاسم <span class="text-danger">*</span></label>
        <div class="col-lg-9">

        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'الاسم'])!!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">رقم الهاتف <span class="text-danger">*</span></label>
        <div class="col-lg-9">
        {!!Form::number('phone',null,['class'=>'form-control'])!!}
        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3">البلد <span class="text-danger">*</span></label>
        <div class="col-lg-9">
        {!!Form::text('address',null,['class'=>'form-control','placeholder'=>'البلد'])!!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3"> الفريم <span class="text-danger">*</span></label>
        <div class="col mb-3">
        <label>خامة الفريم </label>
        {!! Form::select('frame_material'
        , ['سيليكون'=>'سيليكون', 'معدن'=>'معدن','بلاستيك'=>'بلاستيك'],null
        , ['class'=>'form-control','placeholder' => 'اختار'])
        !!}
        </div>


        <div class="col" >
        <label>نوع الفريم </label>
        {!! Form::select('frame_types_id',$frameType, null,
        ['class'=>'form-control','placeholder' => 'اختار']) !!}
        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3">  العدسه<span class="text-danger">*</span></label>
        <div  class="col mb-3">
        <label>خامة العدسه</label>
        {!! Form::select('lens_material'
        , ['زجاج'=>'زجاج','بلاستيك'=>'بلاستيك'],null
        , ['class'=>'form-control','placeholder' => 'اختار'])
        !!}
        </div>

        <div class="col">
        <label>نوع العدسه</label>
        {!!Form::text('lens_type',null,['class'=>'form-control','placeholder'=>'نوع العدسه'])!!}
        </div>
    </div>


    <div class="form-group row">
    <label class="col-form-label col-lg-3">الكشف<span class="text-danger">*</span></label>

                <div class="col">
                <label>AX</label>
                {!!Form::number('l_ax',null,['class'=>'form-control', 'step'=>'0.01'])!!}
                </div>

                <div class="col">
                <label>CYL</label>
                {!!Form::number('l_cyl',null,['class'=>'form-control', 'step'=>'0.01'])!!}
                </div>

                <div class="col">
                <label>SPIL</label>
                {!!Form::number('l_spil',null,['class'=>'form-control', 'step'=>'0.01'])!!}
                </div>

                <div class="col">
                <label>I.P.D</label>
                {!!Form::number('i_p_d',null,['class'=>'text-center form-control', 'step'=>'0.01'])!!}
                </div>

                <div class="col">
                <label>AX</label>
                {!!Form::number('r_ax',null,['class'=>'form-control', 'step'=>'0.01'])!!}
                </div>

                <div class="col">
                <label>CYL</label>
                {!!Form::number('r_cyl',null,['class'=>'form-control', 'step'=>'0.01'])!!}
                </div>

                <div class="col mb-3">
                <label>SPIL</label>
                {!!Form::number('r_spil',null,['class'=>'form-control', 'step'=>'0.01'])!!}
                </div>










            </div>


                    <div class="form-group row">
                        <label class="col-form-label col-lg-3">المبلغ<span class="text-danger">*</span></label>
                    <div class="col mb-3">
                    <label>السعر</label>
                    {!!Form::number('price',null,['class'=>'form-control','placeholder'=>'السعر'])!!}
                    </div>

                    <div class="col">
                    <label>مدفوع</label>
                    {!!Form::number('paid_up',null,['class'=>'form-control','placeholder'=>'مدفوع'])!!}
                    </div>

                    <div class="col">
                    <label>متبقي</label>
                    {!!Form::number('remainder',null,['class'=>'form-control','placeholder'=>'متبقي'])!!}
                    </div>


                    </div>








</fieldset>

