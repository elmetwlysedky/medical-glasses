<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>

    <!-- Basic text input -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">الاسم <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('name', null,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">النوع <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('type', null,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">اللون <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('color', null,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">العدد  <span class="text-danger">*</span></label>
        <div class="col-lg-9">
        {!!Form::number('count',null,['class'=>'form-control'])!!}
        </div>
    </div>
    <!-- /basic text input -->
</fieldset>
