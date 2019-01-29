<tbody>
        @foreach($applicants as $applicant)
        <tr>
            <td>{{$applicant->id}}</td>
            <td>{{$applicant->full_name}}</td>
            <td>{{$applicant->gender}}</td>
            <td>{{$applicant->address}}</td>
            <td>{{$applicant->phone_numb}}</td>
            <td>{{$applicant->upload_cv}}</td>
            <td>
                <button class="show-modal btn btn-success" data-id="{{$applicant->id}}" data-title="{{$applicant->status}}" data-content="{{$applicant->comment}}" >
                <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                <button class="edit-modal btn btn-info" data-id="{{$applicant->id}}" data-title="{{$applicant->status}}" data-content="{{$applicant->comment}}"data-update="{{$applicant->updated_at}}"">
                <span class="glyphicon glyphicon-edit"></span> Edit</button>
                <button class="delete-modal btn btn-danger" data-id="{{$applicant->id}}" data-title="{{$applicant->status}}" data-content="{{$applicant->comment}}">
                <span class="glyphicon glyphicon-trash"></span> Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="row"> 
    <div class="col-md-6 col-md-offset-4"> 
    </div>  
</div>