@extends($master)
@section('page', trans('panichd::admin.status-create-title'))

@include('panichd::shared.common')
@include('panichd::shared.colorpicker', ['include_colorpickerplus_script' => true])

@section('content')
    <div class="well bs-component">
        {!! CollectiveForm::open(['route'=> $setting->grab('admin_route').'.status.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>{{ trans('panichd::admin.status-create-title') }}</legend>
            @include('panichd::admin.status.form')
        {!! CollectiveForm::close() !!}
    </div>
@stop