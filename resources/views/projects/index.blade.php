@extends('layouts.app')
@section('title', 'Projects')
@section('content')
<div class="bg-light p-5 rounded">
    <div class="container">
        <h3 class="text-center">Data Project</h3>
        <div class="card mt-3">
            <div class="card-body">
                <a href="{{ URL::to('projects/create') }}" class="btn btn-primary mb-2 text-white">+ Create</a>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>PROJECT NAME</td>
                            <td>CLIENT</td>
                            <td>PROJECT LEADER</td>
                            <td>START DATE</td>
                            <td>END DATE</td>
                            <td>PROGRESS</td>
                            <td>ACTION</td>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach ($projects as $p)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $p->project_name }}</td>
                            <td>{{ $p->client->client_name }}</td>
                            <td>{{ $p->leader->leader_name }}</td>
                            <td>{{ $p->start_date }}</td>
                            <td>{{ $p->end_date }}</td>
                            <td>{{ $p->progress }}%</td>
                            <td>
                                <a href="{{ route('projects.show', $p->id) }}"
                                    class="btn btn-success m-1 btn-icon-split" style="">
                                    <i class="fa-solid fa-eye"></i></a>
                                <a class="btn btn-warning m-1 text-white" href="{{ route('projects.edit', $p->id) }}"
                                    style=""><i class="fa-solid fa-pen"></i></a>
                                <form onsubmit="return confirm('Data akan dihapus?')" class='d-inline'
                                    action="{{ route('projects.destroy', $p->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-1 text-white" type="submit" style=""><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {!! $projects->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection