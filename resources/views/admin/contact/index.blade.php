@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}

                <h4>Contact Page</h4>
                <div class="container">
                    <div class="row">

                     <a href="{{ route('create.contact') }}"> <button class="btn btn-info">Add Contact</button> </a>
                        
                    <div class="col-md-12">
                        <div class="card">
                            
                            @if (session('succsess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('succsess') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @endif

                         <div class="card-header">All Contact Data</div>
                    

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col" width="5%">No</th>
                                <th scope="col" width="25%">Contact Address</th>
                                <th scope="col" width="15%">Contact Email</th>
                                <th scope="col" width="15%">Contact Phone</th>
                                <th scope="col" width="15%">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                            @php($x = 1)
                            @foreach ($contacts as $con)
                            
                              <tr>
                                <th scope="row">{{ $x++ }}</th>
                                <td>{{ $con->address }} </td>
                                <td>{{ $con->email }} </td>
                                <td>{{ $con->phone }} </td>
                                
                                <td>
                                    <a href="{{ url('contact/edit/'.$con->id) }}" class="btn btn-info" >Edit</a>
                                    <a href="{{ url('contact/delete/'.$con->id) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
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
