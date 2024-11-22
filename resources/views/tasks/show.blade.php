@extends('layouts.app')

@section('content')
    <h1>Task Details</h1>
    <div class="mb-3">
        <strong>Title:</strong>
        <p>{{ $task->title }}</p>
    </div>
    <div class="mb-3">
        <strong>Description:</strong>
        <p>{{ $task->description ?? 'No description provided.' }}</p>
    </div>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
