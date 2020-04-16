@extends('layouts.app')

@section('content')
<form action="{{ route('users.search') }}" method="POST" style="padding-left: 11%;">
    @csrf
    @if (session('error'))
    <div class="alert alert-danger" style="width:21%">{{ session('error') }}</div>
    @endif
    <div class="form-group">
        <input id="user_id" class="form-control" name="user_id" type="text" value="{{ old('user_id') }}" style="width:21%" placeholder="User ID" required>
    </div>
    <input class="btn btn-info" type="submit" value="Search">
</form>
@endsection
