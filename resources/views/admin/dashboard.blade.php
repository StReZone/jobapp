@extends("master.admin_template")

@section('content')
 <h1 class="page-header">Dashboard Admin</h1>
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
    
<br/>
<div class="row">
    <table class="table table-striped table-bordered table-hover" id="postTable" style="">
                        <thead>
                            <tr>
                                <th valign="middle">ID</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>CV</th>
                                <th>Action</th>
                            </tr>
                            {{ csrf_field() }}
                        </thead>
@include('admin.list')
@include('admin.modals')
   
   
</div> <!-- ./container -->
@stop