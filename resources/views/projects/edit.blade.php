@extends('layouts.app')
@section('title', 'Update Projects')
@section('content')
<div class="bg-light p-5 rounded">
    <div class="container">
        <h3 class="text-center">Update Project</h3>
        <div class="card mt-3">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger mt-2 mb-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ url('/projects') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="project_name" class="form-label">PROJECT</label>
                        <input type="text" class="form-control" id="project_name" name="project_name"
                            value="{{ $project->project_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="client" class="form-label" name="client">CLIENT</label>
                        <select id="client_id" class="form-select" name="client_id">
                            @foreach ($clients as $c)
                            <option value="{{ $c->id }}">{{ $c->client_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="leader" class="form-label" name="leader">PROJECT LEADER</label>
                        <select id="leader_id" class="form-select" name="leader_id">
                            @foreach ($leaders as $l)
                            <option value="{{ $l->id }}">{{ $l->leader_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="description" class="form-control" id="description" name="description"
                            value="{{ $project->description }}">
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">START DATE</label>
                        <input type="date" class="form-control" id="start_date" name="start_date"
                            value="{{ $project->start_date }}">
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">END DATE</label>
                        <input type="date" class="form-control" id="end_date" name="end_date"
                            value="{{ $project->end_date }}">
                    </div>
                    <div class="mb-3">
                        <label for="progress" class="form-label">Progress</label>
                        <input type="number" class="form-control" id="progress" name="progress"
                            value="{{ $project->progress }}">
                    </div>

                    <button type="submit" class="btn btn-success text-white">Update</button>
                    <a href="{{ URL::to('projects') }}" class="btn btn-primary m-1 text-white">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection