@extends('layouts.master_home')

@section('home_content')


 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs"> 
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Pendaftaran Santri</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li>Daftar Santri</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<section id="daftar" class="daftar">
  <div class="class container">

    <!-- Main content -->
  <div class="row">

    <div class="col-12">

     <div class="box">
        <div class="box-header with-border">
          <a href="{{route('santri.add')}}" style="float: left;" class="btn btn-rounded btn-success mb-5">Daftar</a>

          {{-- Kolom Search  --}}
          <div class="row g-2 align-items-center" style="float: right;">
            <div class="col-auto">
              <label  class="col-form-label">Search: </label>
            </div>
            <div class="col-auto">
              <form action="{{ route('daftar') }}" method="GET">
              <input type="search" id="search" name="search" class="form-control" placeholder="Enter Nama Santri">
              </form>
            </div>
          </div>
          {{-- Kolom Search  --}}

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>NIK Santri</th>
                        <th>NISN</th>
                        <th>Santri</th>
                        <th>Orangtua</th>
                        <th>Alamat</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                  @php
                    $key = 1;
                  @endphp
                  @foreach ($details as $all)
                    <tr>
                        <td>{{$key++}}</td>
                        <td>{{ $all['santri']['nik']}}</td>
                        <td>{{ $all['santri']['nisn']}}</td>
                        <td>{{ $all['santri']['nama']}}</td>
                        <td>{{ $all->nama_ayh }}</td>
                        <td>{{ $all['santri']['alamat'] }}</td>
                        <td>
                          {{-- <a href="{{ url('/add/ayah/'.$santri->id) }}" class="btn btn-primary">Data Ayah</a> --}}
                          <a target="_blank" href="{{ route('daftar.print',$all->id) }}" class="btn btn-danger">Print</a>
                          
                        </td>
                        
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    
                </tfoot>
              </table>

              {{-- pagination --}}
              {{ $details->links() }}

            </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <!-- /.box -->          
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
 <!-- End Main content -->
</div>
    
</section><!-- End Pendaftaran Section -->



@endsection        