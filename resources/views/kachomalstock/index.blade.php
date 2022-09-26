@extends('layouts.app', ['page' => __('Kachomal'), 'pageSlug' => 'kachomalstock'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title">{{ __('Kachomalstock') }}</h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ URL::to('me-admin/kachomalstock/create') }}" class="btn btn-sm btn-primary">{{ __('Add Kachomalstock') }}</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @include('alerts.success') 
                <div class="table-responsive"> 
                        <table id="table" class="table table-striped cell-border table-hover dt-responsive" cellspacing="0" width="100%"> 
                        <thead class=" text-primary">
                            <tr>
                                <th scope="col">{{ __('Id') }}</th>   
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($kachomalstock))
                            @foreach ($kachomalstock as $st)
                            <tr>
                                <td>{{ $st->id }}</td> 
                                
                                <td class="text-center">
                                    <div class="order-action">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        <a class="" href="{{ URL::to('me-admin/kachomal/' . $st->id . '/edit' ) }}"><i class="tim-icons icon-pencil" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        <form action="{{ route('me-admin.kachomal.destroy', $st->id)}}" method="post">
                                            @csrf
                                            @method('POST') 

                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this kachomal?") }}') ? this.parentElement.submit() : ''"><i class="tim-icons icon-trash-simple"></i></button>
                                        </form> 
                                    </div> 
                                </td> 
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                 
                 
            </div> 
        </div>
    </div>
</div>  
@endsection 

@section('footer_scripts')
<style>
    .order-action {
      
        color:#e8488a;
        display:flex;
    }
    .order-action i {
        font-size:1.5em;
    }
    .order-action a { 
        color:#e8488a!important; 
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
<script
    src="https://code.jquery.com/jquery-1.12.4.js"
    integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
crossorigin="anonymous"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css"/>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/responsive/1.0.2/js/dataTables.responsive.js"></script>

<script>
                                                $(document).ready(function () {
                                                $().ready(function() {
                                                $('#table').DataTable();
                                                $('#table1').dataTable({searching: false, paging: false, info: false,sorting:false});
                                                });
                                                });
</script>
@stop

