@extends('layouts.app')

@section('content')
<h1>用戶列表</h1>

<table class="table">
    <thead>
        <tr>
            <th>姓名</th>
            <th>電子郵件</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.show', $user) }}" class="btn btn-primary">查看</a>
            </td>
        </tr>
        @endforeach