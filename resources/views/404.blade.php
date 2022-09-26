@extends('layouts.front')
   
@section('content')
     <div class="hgroup">
        <h1>Page Not Found</h1>
        <h2>It seems that page you are looking for no longer exists.</h2>
        <a href="{{ route('home') }}">
            <button type="button" class="btn btn-primary button-alignment">Home</button>
        </a>
    </div>
@endsection