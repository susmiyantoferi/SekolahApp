@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}

                <h4>Admin Message</h4>
                <div class="container">
                    <div class="row">
                        
                    <div class="col-md-12">
                        <div class="card">
                            
                            @if (session('succsess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('succsess') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                          @endif

                         <div class="card-header">All Message</div>
                    

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col" width="5%">No</th>
                                <th scope="col" width="15%">Name</th>
                                <th scope="col" width="15%">Email</th>
                                <th scope="col" width="15%">Subject</th>
                                <th scope="col" width="25%">Message</th>
                                <th scope="col" width="15%">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                            @php($x = 1)
                            @foreach ($messages as $message)
                            
                              <tr>
                                <th scope="row">{{ $x++ }}</th>
                                <td>{{ $message->name }} </td>
                                <td>{{ $message->email }} </td>
                                <td>{{ $message->subject }} </td>
                                <td>{{ $message->message }} </td>
                                
                                <td>
                                    <a href="{{ url('message/delete/'.$message->id) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
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
