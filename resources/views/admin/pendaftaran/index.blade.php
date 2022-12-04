@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}

                <h4>Home Pendaftaran</h4>

                {{-- Kolom Search  --}}
                <div class="row g-2 align-items-center mt-2">
                  <div class="col-auto">
                    <label  class="col-form-label">Search:</label>
                  </div>
                  <div class="col-auto">
                    <form action="{{ route('admin.daftar') }}" method="GET">
                    <input type="search" id="search" name="search" class="form-control" placeholder="Enter Nama Santri">
                    </form>
                  </div>
                </div>
              {{-- Kolom Search  --}}

                <div class="container mt-2">
                    <div class="row">

                     {{-- <a href="{{ route('add.slider') }}"> <button class="btn btn-info">Add Slider</button> </a> --}}
                        
                    <div class="col-md-12">
                        <div class="card">
                            
                            @if (session('succsess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('succsess') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @endif

                         <div class="card-header">All Pendaftaran</div>
                    

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col" >No</th>
                                <th scope="col" >No KK</th>
                                <th scope="col" >Santri</th>
                                <th scope="col" >Ayah</th>
                                <th scope="col" >Ibu</th>
                                <th scope="col" >Alamat</th>
                                <th scope="col" >Action</th>
                              </tr>
                            </thead>
                            <tbody>

                            @php($x = 1)
                            @foreach ($details as $data)
                              <tr>
                                <th scope="row">{{ $x++ }}</th>
                                <td>{{ $data->no_kk }}</td>
                                <td>{{ $data['santri']['nama'] }}</td>
                                <td>{{ $data->nama_ayh }}</td>
                                <td>{{ $data->nama_ibu }}</td>
                                <td>{{ $data['santri']['alamat'] }}</td>
                                
                                <td>
                                    <a href="{{ url('santri/edit/'.$data['santri']['id']) }}" title="Edit Santri" class="btn btn-info" >Santri</a>
                                    <a href="{{ url('orangtua/edit/'.$data->id) }}" title="Edit Orangtua" class="btn btn-warning">Ortu</a>
                                    <a href="{{ url('daftar/delete/'.$data->id) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
                                </td>

                              </tr> 
                            @endforeach 
                              
                            </tbody>
                          </table>

                          {{-- pagination --}}
                          {{ $details->links() }}

                        </div>
                    </div>

                   

                    </div>
                </div><br>

            {{-- </div>
        </div> --}}
    </div>
@endsection
