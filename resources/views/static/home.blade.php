@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="row">
    <div class="col-12 text-center mb-5">
        <h1 class="display-4">Smart Daily Planner</h1>
        <p class="lead">Organize your life, one task at a time</p>
        <a href="{{ route('tasks.index') }}" class="btn btn-primary btn-lg">Get Started</a>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <h5 class="card-title">Task Management</h5>
                <p class="card-text">Create, organize, and track your daily tasks with ease.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <h5 class="card-title">Categories</h5>
                <p class="card-text">Organize tasks by categories with custom colors.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <h5 class="card-title">Priority Levels</h5>
                <p class="card-text">Set priorities to focus on what matters most.</p>
            </div>
        </div>
    </div>
</div>
@endsection