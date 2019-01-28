<div class="row">
    <strong>
        <h4>Education background</h4>
    </strong>
</div> 
<div class="row">
    <table id="myTable" class="table order-list" style="width:100%">
        <thead>
            <tr>
                <th>Years</th>
                <th>Institution</th>
                <th>Level</th>
                <th>GPA</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <div class="text-danger">{!! $errors->first('years.*') !!}</div>
            <div class="text-danger">{!! $errors->first('institution.*') !!}</div>
            <div class="text-danger">{!! $errors->first('gpa.*') !!}</div>
            <td class="col-sm-3">
                {!! Form::text('years[]', null, array('class' => 'form-control', 'class' => 'form-control', 'autofocus' => 'true')) !!}
            </td>
            <td class="col-sm-3">
            {!! Form::text('institution[]', null, array('class' => 'form-control', 'class' => 'form-control', 'autofocus' => 'true')) !!}
                
            </td>
            <td class="col-sm-3">
            {!! Form::text('level[]', null, array('class' => 'form-control', 'class' => 'form-control', 'autofocus' => 'true')) !!}
                
            </td>
            <td class="col-sm-2">
            {!! Form::text('gpa[]', null, array('class' => 'form-control', 'class' => 'form-control', 'autofocus' => 'true')) !!}
                
            </td>
            </tr>
                 <td class="col-sm-2"><a class="deleteRow"></a>
            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
    <table>
</div>
<br/> 
<div class="row">
    <strong>
        <h4>Work Experience</h4>
    </strong>
</div> 
<div class="row">
    <table id="myTable" class="table order-list2" style="width:100%">
        <thead>
            <tr>
                <th>Years</th>
                <th>Company</th>
                <th>Position</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td class="col-sm-4">
                
                {!! Form::text('yearswork[]', null, array('class' => 'form-control', 'class' => 'form-control', 'autofocus' => 'true')) !!}
            </td>
            <td class="col-sm-4">
            {!! Form::text('company[]', null, array('class' => 'form-control', 'class' => 'form-control', 'autofocus' => 'true')) !!}
                
            </td>
            <td class="col-sm-3">
            {!! Form::text('position[]', null, array('class' => 'form-control', 'class' => 'form-control', 'autofocus' => 'true')) !!}
                
            </td>
            </tr>
                 <td class="col-sm-2"><a class="deleteRow"></a>
            </td>
        </tr>
        <tfoot>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-lg btn-block " id="addrow2" value="Add" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
    <table>
</div>