@extends('admin.admin_master')


@section('admin')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit About Data</h2>
        </div>
        <div class="card-body">

            <form action="{{ url('about/update/'.$homeAbout->id) }}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Update About Title</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{ $homeAbout->title }}">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Update Short Description </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_discrp" >{{ $homeAbout->short_discrp }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Update long Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="long_discrp" >{{ $homeAbout->long_discrp }}</textarea>
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update About</button>
                    <a href="/home/about" class="btn btn-success">Back</a>
                </div>
            </form>
        </div>
    </div>

    

@endsection