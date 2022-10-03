@extends('layouts.app', ['page' => __('Productions'), 'pageSlug' => 'production'])


@section('content')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Add Production') }}</h3>
                        </div>

                    </div>
                </div>
                <div class="card-body"> 
                    <div class="the-box no-border">
                        <!-- errors -->
                        <div class="has-error">
                            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}  

                        </div>
                        {!! Form::open(array('url' => URL::to('me-admin/production/create'), 'method' => 'post', 'class' => 'bf', 'files'=> true)) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="row"> 

                            <div class="col-md-6"> 
                                 
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Date') }}</label> 
                                     {!! Form::date('date', null, array('class' => 'form-control form-control-alternative','placeholder'=>'date','required' => 'required' )) !!}
 
                                </div> 
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Time') }}</label> 
                                     {!! Form::time('time', null, array('class' => 'form-control form-control-alternative','placeholder'=>'time','required' => 'required' )) !!}
                                    
                                </div> 
                                <div class="form-group{{ $errors->has('kajukatri_250') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="kajukatri_250">{{ __('kajukatri_250') }}</label> 
                                    {!! Form::number('kajukatri_250', null, array('class' => 'form-control form-control-alternative','placeholder'=>'kajukatri_250','required' => 'required' )) !!}
                                </div> 
                               
                                <div class="form-group{{ $errors->has('kajukatri_500') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="kajukatri_500">{{ __('kajukatri_500') }}</label> 
                                    {!! Form::number('kajukatri_500', null, array('class' => 'form-control form-control-alternative','placeholder'=>'kajukatri_250','required' => 'required' )) !!}
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
                                    {!! Form::text('total_kg', null, array('class' => 'form-control form-control-alternative yellowcolor','placeholder'=>'total_kg','readonly'=>'readonly' )) !!}
                                </div> 
                                <div class="form-group{{ $errors->has('total_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="area">{{ __('total_price') }}</label> 
                                    {!! Form::number('total_price', null, array('class' => 'form-control form-control-alternative greencolor','placeholder'=>'total_price','readonly'=>'readonly')) !!}
                                </div> 
                            </div> 
                            <div class="col-sm-12">  
                                <div class="form-group">
                                    <button type="submit" id="submita" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                                    <a href="{!! URL::to('me-admin/production') !!}" class="btn btn-danger"><span class="glyphicon glyphicon-fire"></span> Cancel</a>
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

 

@stop

