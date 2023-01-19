@extends('layouts.app')
@section('title', 'Project')
@section('content')
<div class="bg-light p-5 rounded">
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center my-4">Project's Detail</h3>
                <div class="d-md-flex mb-3">
                    <a href="{{ URL::to('/projects') }}" class="btn btn-primary text-white">Back</a>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>PROJECT NAME</td>
                            <td>CLIENT</td>
                            <td>CLIENT's EMAIL</td>
                            <td>CLIENT's ADDRESS</td>
                            <td>PROJECT LEADER</td>
                            <td>PROJECT EMAIL</td>
                            <td>START DATE</td>
                            <td>END DATE</td>
                            <td>PROGRESS</td>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $project->project_name }}</td>
                            <td>{{ $project->client->client_name }}</td>
                            <td>{{ $project->client->email }}</td>
                            <td>{{ $project->client->address }}</td>
                            <td>{{ $project->leader->leader_name }}</td>
                            <td>{{ $project->leader->email }}</td>
                            <td>{{ $project->start_date }}</td>
                            <td>{{ $project->end_date }}</td>
                            <td>{{ $project->progress }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection