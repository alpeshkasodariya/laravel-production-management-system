@extends('layouts.app', ['page' => __('KachomalDeliver'), 'pageSlug' => 'kachomaldeliver'])


@section('content')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Add Kachomal') }}</h3>
                        </div>

                    </div>
                </div>
                <div class="card-body"> 
                    <div class="the-box no-border">
                        <!-- errors -->
                        <div class="has-error">
                            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}   
                        </div>
                        {!! Form::open(array('url' => URL::to('me-admin/kachomaldeliver/create'), 'method' => 'post', 'class' => 'bf', 'files'=> true)) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                         <div class="row"> 

                            <div class="col-md-6"> 
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="name">{{ __('Name') }}</label> 
                                    {!! Form::select('name',$mahatma ,null, array('class' => 'form-control js-example-basic-single', 'placeholder'=>'Select Mahatma','required' => 'required')) !!}
                                </div>  
                                <div class="form-group{{ $errors->has('kajukatri_250') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="kajukatri_250">{{ __('kajukatri_250') }}</label> 
                                    {!! Form::number('kajukatri_250', null, array('class' => 'form-control form-control-alternative','placeholder'=>'kajukatri_250','required' => 'required' )) !!}
                                </div> 
                                 

                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('total_kg') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="total_kg">{{ __('total_kg') }}</label> 
                                    {!! Form::text('total_kg', null, array('class' => 'form-control form-control-alternative yellowcolor','placeholder'=>'total_kg','readonly'=>'readonly' )) !!}
                                </div> 
                                <div class="form-group{{ $errors->has('total_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="area">{{ __('total_price') }}</label> 
                                    {!! Form::number('total_price', null, array('class' => 'form-control form-control-alternative bluecolor','placeholder'=>'total_price','readonly'=>'readonly')) !!}
                                </div> 
                                <div class="form-group{{ $errors->has('paid_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="area">{{ __('paid_price') }}</label> 
                                    {!! Form::number('paid_price', null, array('class' => 'form-control form-control-alternative greencolor','placeholder'=>'paid_price')) !!}
                                </div> 
                                <div class="form-group{{ $errors->has('pending_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="area">{{ __('pending_price') }}</label> 
                                    {!! Form::number('pending_price', null, array('class' => 'form-control form-control-alternative redcolor','placeholder'=>'pending_price','readonly'=>'readonly')) !!}
                                </div> 
                            </div> 
                            <div class="col-sm-12">  
                                <div class="form-group">
                                    <button type="submit" id="submita" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                                    <a href="{!! URL::to('me-admin/kachomaldeliver') !!}" class="btn btn-danger"><span class="glyphicon glyphicon-fire"></span> Cancel</a>
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

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
                                         $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

@stop

