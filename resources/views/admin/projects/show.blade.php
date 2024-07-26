@extends('layouts.admin')
@section('title')
{{$singleProject->title}}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card mb-4" style="width: 18rem;">
                <img src="{{ $singleProject->image_url }}" class="card-img-top" alt="{{ $singleProject->title }}">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $singleProject->title }}</strong></h5>
                    <p class="card-text"><em>Language: {{ $singleProject->language }} - started on: {{ $singleProject->started_on }}</em></p>
                    <p class="card-text">{{ $singleProject->content }}</p>
                    @if ($singleProject->finished === 1)
                    <p class="card-text"><strong>Finished</strong></p>
                    @else
                    <p class="card-text"><strong>Not finished</strong></p>
                    @endif
                    <a href="{{ $singleProject->website_url }}" class="btn btn-primary">Website</a>
                </div>
            </div>
            <a href="{{ route('admin.Projects.index') }}" class="btn btn-primary btn-xl">Show all Projects</a>
        </div>
    </div>
</div>
@endsection
