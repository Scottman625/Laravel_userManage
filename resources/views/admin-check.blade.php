@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Check</div>

                <div class="card-body">
                    @if (auth()->user()->isAdmin)
                    <p>You are an admin!</p>
                    <a href="{{ route('users.index') }}">Go to Users Management</a>
                    @else
                    <p>You are not an admin.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection