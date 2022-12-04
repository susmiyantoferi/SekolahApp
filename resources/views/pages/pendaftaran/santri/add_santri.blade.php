@extends('layouts.master_home')

@section('home_content')


 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Daftar Santri</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Daftar Santri Baru</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Pendaftaran Section ======= -->
  <section id="daftar" class="daftar">

    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
          <div class="col">
              <form method="POST" action="{{ route('store.santri.daftar') }}" >
               @csrf
                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                  <div class="col-lg-10">	
                
                   <div class="row"> {{--first 1st row --}}
                     <div class="col-md-4">

                       <div class="form-group">
                         <h5>NIK <span class="text-danger">*</span></h5>
                         <div class="controls">
                             <input type="text" name="nik" class="form-control" required="" value="{{ old('nik') }}">

                          @error('nik')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror

                         </div>
                       </div>

                      </div> {{--end col md 4 --}}

                      <div class="col-md-4">

                       <div class="form-group">
                         <h5>NISN<span class="text-danger">*</span></h5>
                         <div class="controls">
                             <input type="text" name="nisn" class="form-control" required="" value="{{ old('nisn') }}">

                          @error('nisn')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror

                         </div>
                       </div>

                      </div> {{--end col md 4 --}}

                      <div class="col-md-4">

                       <div class="form-group">
                         <h5>Nama Lengkap <span class="text-danger">*</span></h5>
                         <div class="controls">
                             <input type="text" name="nama" class="form-control" required="">
                         </div>
                       </div>

                      </div> {{--end col md 4 --}}

                    </div> {{--end 1st row --}}


                    <div class="row"> {{--first 2nd row --}}

                      <div class="col-md-4">

                        <div class="form-group">
                          <h5>Jenis Kelamin <span class="text-danger">*</span></h5>
                          <div class="controls">
                  
                              <select name="kelamin" id="kelamin" required="" class="form-control">
                                  <option value="" selected="" disabled="" >Pilih</option>
                                  <option value="laki-laki">Laki-laki</option>
                                  <option value="Perempuan">Perempuan</option>
                              </select>
 
                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}

                     <div class="col-md-4">

                       <div class="form-group">
                         <h5>Tempat lahir<span class="text-danger">*</span></h5>
                         <div class="controls">
                             <input type="text" name="tempat_lahir" class="form-control" required="">
                         </div>
                       </div>

                      </div> {{--end col md 4 --}}

                      <div class="col-md-4">

                        <div class="form-group">
                          <h5>Tanggal Lahir <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="date" name="tgl_lahir" class="form-control" required="">
                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}

                    </div> {{--end 2nd row --}}

                    <div class="row"> {{--first 3rd row --}}

                      <div class="col-md-4">

                        <div class="form-group">
                          <h5>Alamat <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="alamat" class="form-control" required="">
                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}

                     <div class="col-md-4">

                       <div class="form-group">
                         <h5>Tinggal bersama <span class="text-danger">*</span></h5>
                         <div class="controls">
                 
                             <select name="tinggal" id="religion" required="" class="form-control">
                                 <option value="" selected="" disabled="" >Pilih</option>
                                 <option value="Orangtua">Orangtua</option>
                                 <option value="Wali">Wali</option>
                             </select>

                         </div>
                       </div>

                      </div> {{--end col md 4 --}}

                      <div class="col-md-4">

                       <div class="form-group">
                         <h5>Bahasa sehari hari <span class="text-danger">*</span></h5>
                         <div class="controls">
                             <input type="text" name="bahasa" class="form-control" required="">
                         </div>
                       </div>

                      </div> {{--end col md 4 --}}

                    </div> {{--end 3rd row --}}
                           

                  <div class="text-xs-right">
                      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Simpan" >
                      {{-- <a href="/add/ayah" class="btn btn-rounded btn-primary mb-5">Isi Data Ayah</a> --}}
                  </div>
              </form>

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    
  </section><!-- End Pendaftaran Section -->



@endsection        