@extends('layouts.app', ['page' => __('KachomalDeliver'), 'pageSlug' => 'kachomaldeliver'])

@section('content')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Edit Order') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ URL::to('me-admin/kachomaldeliver') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="the-box no-border">
                        <!-- errors -->
                        <div class="has-error">
                              {!! $errors->first('name', '<span class="help-block">:message</span>') !!}  
                               
                        </div>
                         {!! Form::model($kachomaldeliver, array('url' => URL::to('me-admin/kachomaldeliver/' . $kachomaldeliver->id.'/edit'), 'method' => 'post', 'class' => 'bf', 'files'=> true)) !!}
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
                            </div>
                            <div class="col-md-6"> 
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
                                    <a href="{!! URL::to('me-admin/$kachomaldeliver') !!}" class="btn btn-danger"><span class="glyphicon glyphicon-fire"></span> Cancel</a>
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
			$(function() {
                             
				$('#date_picker').datepicker({
                                   format: 'dd-mm-yyyy', 
                                   todayHighlight:true
                             });
                             $('#date_picker1').datepicker({
                                   format: 'dd-mm-yyyy', 
                                   todayHighlight:true
                             });

			});
			</script>
@stop

