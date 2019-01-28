@extends("master.app_template")

@section('content')

<div class="container">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    {!! Form::open (['route' => 'applicants.store', 'class' => 'form-horizontal', 'role' => 'form','enctype' => 'multipart/form-data'])!!}
        <h2>Personal Information</h2>
        <br/>
        {!! Form::hidden('id_user', $id , array('class' => 'form-control')) !!}   
        <div class="form-group">
            {!! Form::label('fullname', 'Full Name', array('class' => 'col-sm-3 control-label')) !!}
            <div class="col-sm-9">
            <div class="text-danger">{!! $errors->first('full_name') !!}</div>
                {!! Form::text('full_name', null, array('class' => 'form-control', 'placeholder' => 'First Name', 'autofocus' => 'true')) !!}   
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('Gender', 'Gender', array('class' => 'col-sm-3 control-label')) !!}
            <div class="col-sm-6">
                <div class="row">
                    <div class="text-danger">{!! $errors->first('gender') !!}</div>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                        {!! Form::radio('gender','Female') !!}<a>Female</a>  
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                        {!! Form::radio('gender','Male')  !!}<a>Male</a>
                        </label>
                    </div>
                </div>
            </div>
        </div> <!-- /.form-group -->
        <br/>
        <div class="form-group">
            {!! Form::label('POB', 'Place of Birth', array('class' => 'col-sm-3 control-label')) !!}
            <div class="col-sm-9">
                <div class="text-danger">{!! $errors->first('pob') !!}</div>
                {!! Form::text('pob', null, array('class' => 'form-control', 'placeholder' => 'Place of Birth', 'autofocus' => 'true')) !!}  
                
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('phoneNumb', 'Phone Number', array('class' => 'col-sm-3 control-label')) !!}  
            <div class="col-sm-9">
                <div class="text-danger">{!! $errors->first('phone_numb') !!}</div>
                {!! Form::text('phone_numb', null, array('class' => 'form-control', 'placeholder' => 'Phone Number', 'autofocus' => 'true')) !!}  
                <span class="help-block">Your phone number won't be disclosed anywhere </span>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('address', 'Address', array('class' => 'col-sm-3 control-label')) !!}  
            <div class="col-sm-9">
                <div class="text-danger">{!! $errors->first('address') !!}</div>
                {!! Form::textarea('address', null, array('class' => 'form-control', 'row' => 4, 'autofocus' => 'true')) !!}  
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <span class="help-block">*Required fields</span>
            </div>
        </div>
        <div class="form-group">
                @include('applicants.table')
        </div>
        <div class="col-sm-3 col-sm-offset-9">
            {!! Form::submit('Simpan', array('class' => 'btn btn-primary btn-block')) !!}
        </div>
        {!!Form::close()!!}<!-- /form -->
    </div> <!-- ./container -->
    <div class="col-md-2"></div>
</div>
@stop