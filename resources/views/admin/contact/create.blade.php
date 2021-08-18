@extends('admin.admin_master')


@section('admin')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Contact Data</h2>
        </div>
        <div class="card-body">

            <form action="{{ route('add.contact') }}" method="POST" >
                @csrf
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Contact Address </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" placeholder="Enter Contact Address"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Contact Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Contact Email">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Contact Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Enter Contact Phone">
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Create Contact</button>
                    <a href="/admin/contact" class="btn btn-success">Back</a>
                </div>
            </form>
        </div>
    </div>

    

@endsection