@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}

                <h4>Home About</h4>
                <div class="container">
                    <div class="row">

                     <a href="{{ route('add.about') }}"> <button class="btn btn-info">Add About</button> </a>
                        
                    <div class="col-md-12">
                        <div class="card">
                            
                            @if (session('succsess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('succsess') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @endif

                         <div class="card-header">All About Data</div>
                    

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col" width="5%">No</th>
                                <th scope="col" width="15%">Title</th>
                                <th scope="col" width="15%">Short Description</th>
                                <th scope="col" width="25%">Long Description</th>
                                <th scope="col" width="15%">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                            @php($x = 1)
                            @foreach ($homeAbout as $about)
                              <tr>
                                <th scope="row">{{ $x++ }}</th>
                                <td>{{ $about->title }}</td>
                                <td>{{ $about->short_discrp }}</td>
                                <td>{{ $about->long_discrp }}</td>
                                
                                <td>
                                    <a href="{{ url('about/edit/'.$about->id) }}" class="btn btn-info" >Edit</a>
                                    <a href="{{ url('about/delete/'.$about->id) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
                                </td>

                              </tr>
                            @endforeach 
                              
                            </tbody>
                          </table>

                          {{-- pagination --}}
                          {{-- {{ $sliders->links() }} --}}

                        </div>
                    </div>

                   

                    </div>
                </div><br>

            {{-- </div>
        </div> --}}
    </div>
@endsection
