@extends('layouts.admin')
@section('title')
    Projects
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Language</th>
                        <th scope="col">Started on</th>
                        <th scope="col">Finished</th>
                        <th scope="col">Website</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <th>{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->language }}</td>
                        <td>{{ $project->started_on }}</td>
                        @if ($project->finished === 1)
                        <td>Finished</td>
                        @else
                        <td>Not finished</td>
                        @endif
                        <td>{{ $project->website_url }}</td>
                        <td>
                            <a href="{{ route('admin.Projects.show', $project) }}" class="btn btn-primary btn-sm">Show</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
