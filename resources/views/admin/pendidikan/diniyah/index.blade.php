@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}

                <h4>Madrasah Diniyah Admin Page</h4>
                <div class="container">
                    <div class="row">

                     <a href="{{ route('create.diniyah') }}"> <button class="btn btn-info">Add Data</button> </a>
                        
                    <div class="col-md-12">
                        <div class="card">
                            
                            @if (session('succsess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('succsess') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @endif

                         <div class="card-header">All Data</div>
                    

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col" width="5%">No</th>
                                <th scope="col" >Alamat</th>
                                <th scope="col" >Email</th>
                                <th scope="col" >Hp</th>
                                <th scope="col" >Visi</th>
                                <th scope="col" >Misi</th>
                                <th scope="col" >Tujuan</th>
                                <th scope="col" >Action</th>
                              </tr>
                            </thead>
                            <tbody>

                            @php($x = 1)
                            @foreach ($diniyah as $data)
                            
                              <tr>
                                <th scope="row">{{ $x++ }}</th>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->hp }}</td>
                                <td>{{ $data->visi }}</td>
                                <td>{{ $data->misi }}</td>
                                <td>{{ $data->tujuan }}</td>
                                
                                <td>
                                    <a href="{{ url('diniyah/edit/'.$data->id) }}" class="btn btn-info" >Edit</a>
                                    <a href="{{ url('diniyah/delete/'.$data->id) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
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
