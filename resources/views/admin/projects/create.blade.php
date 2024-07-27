@extends('layouts.admin')
@section('title')
    Add new project
@endsection

@section('content')
x
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('admin.Projects.store') }}" method="post">
                @csrf
                <label for="title">Title: </label>
                <input class="form-control" type="text" placeholder="Title" aria-label="Title" name="title" id="title" value="{{ old('title') }}">

                <label for="language">Language: </label>
                <input class="form-control" type="text" placeholder="Language" aria-label="Language" name="language" id="language" value="{{ old('language') }}">

                <label for="content">Content: </label>
                <input class="form-control" type="text" placeholder="Content" aria-label="Content" name="content" id="content" value="{{ old('content') }}">

                <label for="started_on">Started on: </label>
                <input class="form-control" type="date" placeholder="Started on" aria-label="Started on" name="started_on" id="started_on" value="{{ old('started_on') }}">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="finished" id="finished1" value="1">
                    <label class="form-check-label" for="finished1">
                        Finished
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="finished" id="finished2" value="0" checked>
                    <label class="form-check-label" for="finished2">
                        Not finished
                    </label>
                </div>

                <label for="image_url">Image: </label>
                <input class="form-control" type="text" placeholder="Image_url" aria-label="Image_url" name="image_url" id="image_url" value="{{ old('image_url') }}">

                <label for="website_url">Website: </label>
                <input class="form-control mb-4" type="text" placeholder="Website_url" aria-label="Website_url" name="website_url" id="website_url" value="{{ old('website_url') }}">

                <input type="submit" class="btn btn-primary mb-3" value="Add new project">
            </form>
        </div>
    </div>
</div>
@endsection
