<!-- /.navbar-top-links -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
           
            <li>
                <a href="{!! route('applicants.index')!!}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{!! route('upload')!!}"><i class="fa fa-upload fa-fw"></i> Uplode CV</a>
            </li>
            @if (!empty($applicants))
                @foreach($applicants as $applicant)
                <li>
                    <a href="{!! route('applicants.show',$applicant->id)!!}"><i class="fa fa-user fa-fw"></i>Profile </a>
                </li>
               @endforeach

            @endif
            
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->