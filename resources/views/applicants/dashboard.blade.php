@extends("master.app_template")

@section('content')
 <h1 class="page-header">Dashboard</h1>
<div class="container">
    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{Session::get('error')}}
        </div>
    @endif
    @if (Session::has('notice'))
        <div class="alert alert-info">
            {{Session::get('notice')}}
        </div>
    @endif
    
   
</div> <!-- ./container -->
@stop