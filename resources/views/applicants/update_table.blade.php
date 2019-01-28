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
            <div class="text-danger">{!! $errors->first('years.*') !!}</div>
            <div class="text-danger">{!! $errors->first('institution.*') !!}</div>
            <div class="text-danger">{!! $errors->first('gpa.*') !!}</div>
         @foreach ($applicant->eduBackground()->get() as $key => $edu)
         <tr>
            <td><input type="text" value="{{$edu->years}}" class="form-control" name="years[]" multiple/></td>
            <td><input type="text" value="{{$edu->institution}}"class="form-control" name="institution[]" multiple/></td>
            <td><input type="text" value="{{$edu->level}}"class="form-control" name="level[]" multiple/></td>
            <td><input type="text" value="{{$edu->gpa}}"class="form-control" name="gpa[]" multiple/></td>

            <td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>     
          </tr>  
        @endforeach
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
            @foreach ($applicant->workExp()->get() as $key => $work)
            <td class="col-sm-4">
                
                {!! Form::text('yearswork[]', $work->years, array('class' => 'form-control', 'class' => 'form-control', 'autofocus' => 'true')) !!}
            </td>
            <td class="col-sm-4">
            {!! Form::text('company[]', $work->company, array('class' => 'form-control', 'class' => 'form-control', 'autofocus' => 'true')) !!}
                
            </td>
            <td class="col-sm-3">
            {!! Form::text('position[]', $work->position, array('class' => 'form-control', 'class' => 'form-control', 'autofocus' => 'true')) !!}
             
            </td>
            </tr>
                 <td class="col-sm-2"><a class="deleteRow"></a>
            </td>
            @endforeach
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