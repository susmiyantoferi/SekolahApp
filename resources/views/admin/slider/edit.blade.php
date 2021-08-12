@extends('admin.admin_master')


@section('admin')


    @if (session('succsess'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>{{ session('succsess') }}</strong>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
    @endif

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}

                <div class="container">
                    <div class="row">

                    

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Edit Slider</div>
                            <div class="card-body">

                                <form action="{{ url('slider/update/'.$sliders->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="old_image" value="{{ $sliders->image }}">
                                    <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Update Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $sliders->title }}">
                                    
                                    <label for="exampleInputEmail1" class="form-label">Update Description</label>
                                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $sliders->description }}">

                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Update Slider Image</label>
                                        <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $sliders->image }}">
                                        
                                        @error('brand_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
    
                                    </div>

                                    <div class="form-group">
                                        <img src="{{ asset($sliders->image) }}" style="width: 400px; height: 200px;">
                                    </div><br>
                                    
                                    <button type="submit" class="btn btn-primary">Update Slider</button>
                                    <a href="/home/slider" class="btn btn-success">Back</a>
                                    
                                </form>
                            
                            </div>
                        
                        </div>
                    </div>

                    </div>
                </div>
                
            {{-- </div>
        </div> --}}
    </div>
@endsection
