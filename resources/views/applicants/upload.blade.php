@extends("master.app_template")

@section('content')
 <h1 class="page-header">Uplode File</h1>
<div class="container">


  <div class="row">
    <div class="col-sm-offset-2 col-sm-8"><br><br>
    	{!! Form::open(['route' => 'storeUpload', 'class' => 'formhorizontal', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
		@foreach ($applicants as $applicant)
			{!! Form::hidden('id', $applicant->id , array('class' => 'form-control')) !!}   
		@endforeach
			<div class="form-group">
			<div class="input-group">
				<input type="text" class="form-control" readonly>
					<div class="input-group-btn">
					  <span class="fileUpload btn btn-success">
					      <span class="upl" id="upload">Browse</span>
					      <input type="file" class="upload up" id="up" name="userfile[]" multiple />
					      <div class="text-danger">{!! $errors->first('userfile.*') !!}</div>
					    </span><!-- btn-orange -->
					</div><!-- btn -->
			</div><!-- group -->
			</div><!-- form-group -->
			<div class="form-group">
			    <div class="col-lg-3"></div>
			        <div class="col-lg-6">
			            {!! Form::submit('Save', array('class' => 'btn btn-raised btn-primary')) !!}
			            {!! link_to(route('applicants.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}
			     </div>
			    <div class="clear"></div>
			</div>
    	{!! Form::close() !!}


</div> <!-- ./row -->
</div> <!-- ./col -->
 
</div> <!-- ./container -->
@stop