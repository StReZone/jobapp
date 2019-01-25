<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job App Applicants interface </title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    
     <!-- Custom Fonts -->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="sidenav">
    <div class="login-main-text">
        <h2>App Job<br> Register </h2>
        <p>register from here to access app.</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="register-form">
        <form>
            <div class="form-group">
                <label>name </label>
                <input type="text" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
                <label>email </label>
                <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Re-Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Date Picking</label>
                <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
            <button type="submit" class="btn btn-black">Register</button>
            {!! link_to(url('/login'), "Back", ['class' => 'btn ']) !!}
            <!-- <button type="button" class="btn btn-secondary">back</button> -->
        </form>
        </div>
    </div>
</div>
     
   

    <!--  jQuery -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
     <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('jquery/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datetimepicker.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('dist/js/sb-admin-2.js')}}"></script>

    <!-- script for date -->
    <script type="text/javascript">
        $('.form_date').datetimepicker({
            
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    </script>
  
</body>