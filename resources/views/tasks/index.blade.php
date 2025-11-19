@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>My Tasks</h2>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>
</div>

<div class="row">
    @foreach($tasks as $task)
    <div class="col-md-6 mb-3">
        <div class="card priority-{{ $task->priority }} {{ $task->status == 'completed' ? 'task-completed' : '' }}">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <h5 class="card-title">{{ $task->title }}</h5>
                    <span class="badge" style="background-color: {{ $task->category->color }}">
                        {{ $task->category->name }}
                    </span>
                </div>
                <p class="card-text">{{ $task->description }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">
                        Due: {{ $task->due_date->format('M d, Y') }} 
                        @if($task->due_time)
                            at {{ $task->due_time }}
                        @endif
                    </small>
                    <div>
                        <span class="badge bg-{{ $task->priority == 'high' ? 'danger' : ($task->priority == 'medium' ? 'warning' : 'success') }}">
                            {{ ucfirst($task->priority) }}
                        </span>
                        <span class="badge bg-secondary">{{ ucfirst(str_replace('_', ' ', $task->status)) }}</span>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" 
                                onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@if($tasks->isEmpty())
<div class="text-center py-5">
    <h4>No tasks found</h4>
    <p>Start by creating your first task!</p>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>
</div>
@endif
@endsection