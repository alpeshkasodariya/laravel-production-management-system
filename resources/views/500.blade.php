@extends('layouts.front')
   
@section('content')
    <div class="container-fluid">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10 middle">
            <div class="error-container">
                <div class="error-main">
                    <h1> <i class="livicon" data-name="warning" data-s="100" data-c="#ffbc60" data-hc="#ffbc60" data-eventtype="click" data-iteration="15" data-duration="2000"></i>
                        500
                    </h1>
                    <h3>
                        Thats an error.
                        <br>There was an error. Please Try again later. Thats all we know
                    </h3>
                        <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection