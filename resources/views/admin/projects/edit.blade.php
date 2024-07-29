@extends('layouts.create-or-edit
')
@section('title')
    Edit {{ $project->title }}
@endsection

@section('form-action')
    {{ route('admin.projects.show', $project) }}
@endsection

@section('form-method')
    @method('Put')
@endsection

