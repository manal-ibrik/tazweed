@extends('layout.master')
@section('content')
<div class="page_wrapper">
    <div class="side_bar">
        <div class="logo">
            <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt="logo" /></a>
        </div>
    </div>
    <div class="right_bar">
        <div class="products-details">
            <div class="container-fluid">
                @forelse($projects as $project)
                <div class="row">
                    <div class="col-md-6 col-sm-6 p-0">
                        <div class="project_img">
                            <img src="{{asset($project->projects_image)}}">
                        </div>	
                    </div>
                    <div class="col-md-6 col-sm-6 p-0">
                        <div class="project_content">
                            <h2>{{$project->projects_title}}</h2>
                            <ul>
                                <li>
                                    <p><strong>Project:</strong></p>
                                    <p>{{$project->projects_title}}</p>
                                </li>
                                <li>
                                    <p><strong>Location:</strong></p>
                                    <p>{{$project->projects_location}}</p>
                                </li>
                                <li>
                                    <p><strong>Date:</strong></p>
                                    <p>{{$project->projects_date}}</p>
                                </li>
                                <li>
                                    <p><strong>Size:</strong></p>
                                    <p>{{$project->projects_size}}</p>
                                </li>
                                <li>
                                    <p><strong>Client:</strong></p>
                                    <p>{{$project->projects_client}}</p>
                                </li>
                                <li>
                                    <p><strong>Consultant:</strong></p>
                                    <p>{{$project->projects_consultant}}</p>
                                </li>
                                <li>
                                    <p><strong>Application:</strong></p>
                                    <p>{{$project->projects_application}}</p>
                                </li>

                            </ul>	

                        </div>
                    </div>
                </div>
                @empty
                <h2>no projects yet</h2>
                @endforelse
            </div>
        </div>
    </div>
</div>
@stop