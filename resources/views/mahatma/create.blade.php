@extends('layouts.app', ['page' => __('All Centers'), 'pageSlug' => 'mahatma'])


@section('content')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Add Center') }}</h3>
                        </div>

                    </div>
                </div>
                <div class="card-body"> 
                    <div class="the-box no-border">
                        <!-- errors -->
                        <div class="has-error">
                            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}  
                            
                        </div>
                        {!! Form::open(array('url' => URL::to('me-admin/mahatma/create'), 'method' => 'post', 'class' => 'bf', 'files'=> true)) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="row"> 

                            <div class="col-md-6"> 
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="name">{{ __('Name') }}</label> 
                                    {!! Form::text('name', null, array('class' => 'form-control form-control-alternative','placeholder'=>'Name','required' => 'required' )) !!}
                                </div>  
                                

                            </div>
                            <div class="col-md-6">

                            </div> 
                            <div class="col-sm-12">  
                                <div class="form-group">
                                    <button type="submit" id="submita" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                                    <a href="{!! URL::to('me-admin/mahatma') !!}" class="btn btn-danger"><span class="glyphicon glyphicon-fire"></span> Cancel</a>
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

