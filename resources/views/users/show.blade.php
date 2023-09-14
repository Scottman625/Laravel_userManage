@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>User Profile</h2>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            @can('update', $user)
            <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Edit Profile</a>
            @endcan
        </div>
    </div>
</div>
@endsection