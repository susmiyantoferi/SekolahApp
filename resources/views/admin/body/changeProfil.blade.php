@extends('admin.admin_master')


@section('admin')

<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>User Profil</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('password.update') }}" method="POST" class="form-pill">
            @csrf

            <div class="form-group">
                <label for="exampleFormControlInput3">User Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" >
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">User Email</label>
                <input type="text" name="email" class="form-control" value="{{ $user->email }}" >
            </div>

            <button type="submit" class="btn btn-primary btn-default" >Update Profil</button>

        </form>
    </div>
</div>

@endsection