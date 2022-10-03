@extends('layouts.app', ['page' => __('Delivery'), 'pageSlug' => 'delivery'])

@section('content')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Edit Mahatma') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ URL::to('me-admin/mahatma') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="the-box no-border">
                        <!-- errors -->
                        <div class="has-error">
                            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}  

                        </div>
                        {!! Form::model($delivery, array('url' => URL::to('me-admin/delivery/' . $delivery->id.'/edit'), 'method' => 'post', 'class' => 'bf', 'files'=> true)) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="row"> 

                            <div class="col-md-6"> 
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="name">{{ __('Name') }}</label> 
                                    {!! Form::select('name',$mahatma ,null, array('class' => 'form-control select2', 'placeholder'=>'Select Mahatma','required' => 'required')) !!}
                                </div>  
                                <div class="form-group{{ $errors->has('kajukatri_250') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="kajukatri_250">{{ __('kajukatri_250') }}</label> 
                                    {!! Form::number('kajukatri_250', null, array('class' => 'form-control form-control-alternative','placeholder'=>'kajukatri_250','required' => 'required' )) !!}
                                </div> 
                                <div class="form-group{{ $errors->has('kajukatri_500') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="kajukatri_500">{{ __('kajukatri_500') }}</label> 
                                    {!! Form::number('kajukatri_500', null, array('class' => 'form-control form-control-alternative','placeholder'=>'kajukatri_500','required' => 'required' )) !!}
                                </div> 
                                <div class="form-group{{ $errors->has('chiki_250') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="chiki_250">{{ __('chiki_250') }}</label> 
                                    {!! Form::number('chiki_250', null, array('class' => 'form-control form-control-alternative','placeholder'=>'chiki_250','required' => 'required' )) !!}
                                </div> 
                                <div class="form-group{{ $errors->has('chiki_500') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="chiki_500">{{ __('chiki_500') }}</label> 
                                    {!! Form::number('chiki_500', null, array('class' => 'form-control form-control-alternative','placeholder'=>'chiki_500','required' => 'required' )) !!}
                                </div> 
                                <div class="form-group{{ $errors->has('ghari_250') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="ghari_250">{{ __('ghari_250') }}</label> 
                                    {!! Form::number('ghari_250', null, array('class' => 'form-control form-control-alternative','placeholder'=>'ghari_250','required' => 'required' )) !!}
                                </div> 
                                <div class="form-group{{ $errors->has('ghari_500') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="ghari_500">{{ __('ghari_500') }}</label> 
                                    {!! Form::number('ghari_500', null, array('class' => 'form-control form-control-alternative','placeholder'=>'ghari_500','required' => 'required' )) !!}
                                </div> 
                                <div class="form-group{{ $errors->has('angir_250') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="angir_250">{{ __('angir_250') }}</label> 
                                    {!! Form::number('angir_250', null, array('class' => 'form-control form-control-alternative','placeholder'=>'angir_250','required' => 'required' )) !!}
                                </div> 
                                <div class="form-group{{ $errors->has('angir_500') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="ghari_500">{{ __('angir_500') }}</label> 
                                    {!! Form::number('angir_500', null, array('class' => 'form-control form-control-alternative','placeholder'=>'angir_500','required' => 'required' )) !!}
                                </div>
                                <div class="form-group{{ $errors->has('kaju500') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="kaju500">{{ __('kaju500') }}</label> 
                                    {!! Form::number('kaju500', null, array('class' => 'form-control form-control-alternative','placeholder'=>'kaju500','required' => 'required' )) !!}
                                </div> 
                                <div class="form-group{{ $errors->has('badam500') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="badam500">{{ __('badam500') }}</label> 
                                    {!! Form::number('badam500', null, array('class' => 'form-control form-control-alternative','placeholder'=>'badam500','required' => 'required' )) !!}
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('total_kg') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="total_kg">{{ __('total_kg') }}</label> 
                                    {!! Form::text('total_kg', null, array('class' => 'form-control form-control-alternative','placeholder'=>'total_kg' ,'readonly'=>'readonly')) !!}
                                </div> 
                                <div class="form-group{{ $errors->has('total_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="area">{{ __('total_price') }}</label> 
                                    {!! Form::number('total_price_pending', null, array('class' => 'form-control form-control-alternative','placeholder'=>'total_price','readonly'=>'readonly')) !!}
                                </div> 
                            </div> 
                            <div class="col-sm-12">  
                                <div class="form-group">
                                    <button type="submit" id="submita" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                                    <a href="{!! URL::to('me-admin/delivery') !!}" class="btn btn-danger"><span class="glyphicon glyphicon-fire"></span> Cancel</a>
                                </div>
                            </div> 
                        </div>  

                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('footer_scripts')
<style>
    .card h1, .card h2, .card h4, .card h5, .card h6, .card p{
        color: black!important;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" rel="stylesheet"/>
<script>
$(function () {

    $('#date_picker').datepicker({
        format: 'dd-mm-yyyy',
        todayHighlight: true
    });
    $('#date_picker1').datepicker({
        format: 'dd-mm-yyyy',
        todayHighlight: true
    });

});
</script>
@stop

