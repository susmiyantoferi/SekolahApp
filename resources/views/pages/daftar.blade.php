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
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>NIK</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th width="20%">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                  @foreach ($data as $key => $santri)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $santri->nik }}</td>
                        <td>{{ $santri->nisn }}</td>
                        <td>{{ $santri->nama }}</td>
                        <td>{{ $santri->alamat }}</td>
                        <td>
                          {{-- <a href="{{ url('/add/ayah/'.$santri->id) }}" class="btn btn-primary">Data Ayah</a> --}}
                          <a target="_blank" href="{{ url('/daftar/print/'.$santri->id) }}" class="btn btn-danger">Print</a>
                          
                        </td>
                        
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    
                </tfoot>
              </table>

              {{-- pagination --}}
              {{ $data->links() }}

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