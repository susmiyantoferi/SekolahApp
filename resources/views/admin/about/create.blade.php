@extends('admin.admin_master')


@section('admin')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create About Data</h2>
        </div>
        <div class="card-body">

            <form action="{{ route('store.about') }}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">About Title</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter About Title">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Short Description </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_discrp" placeholder="Enter Short Description"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">long Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="long_discrp" placeholder="Enter Long Description"></textarea>
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Create About</button>
                    <a href="/home/about" class="btn btn-success">Back</a>
                </div>
            </form>
        </div>
    </div>

    

@endsection