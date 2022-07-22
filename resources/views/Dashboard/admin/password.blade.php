@extends('Dashboard.layouts.master')

@section('title')
{{auth()->user()->name}}
@endsection

@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title"> Edite {{auth()->user()->name}}</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <p class="mb-4"><strong></strong> <code></code></p>

<form class="form-validate-jquery" method="post" action="{{ route('changePasswordPost') }}">
@csrf

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

    <div class="form-group row">
        <label class="col-form-label col-lg-3">كلمة المرور القديمة <span class="text-danger">*</span></label>
        <div class="col-lg-9">
        <input id="current-password" type="password" class="form-control" name="current-password" required>

            @if ($errors->has('current-password'))
                <span class="help-block">
                            <strong>{{ $errors->first('current-password') }}</strong>
                        </span>
            @endif

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3"> كلمة المرور الجديدة<span class="text-danger">*</span></label>
        <div class="col-lg-9">
        <input id="new-password" type="password" class="form-control" name="new-password" required>

            @if ($errors->has('new-password'))
                <span class="help-block">
                            <strong>{{ $errors->first('new-password') }}</strong>
                        </span>
            @endif

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">إعادة كتابة كلمة المرور الجديدة<span class="text-danger">*</span></label>
        <div class="col-lg-9">
        <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>


        </div>
    </div>

    </fieldset>

        <button type="submit" class="btn bg-teal-300 btn-labeled btn-labeled-right"> حفظ</button>
</form>
</div>
</div>
@endsection
