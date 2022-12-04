@extends('layouts.master_home')

@section('home_content')


 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Masukan Data Orangtua</h2>
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
              <form method="POST" action="{{ route('store.orangtua.daftar') }}" >
               @csrf
                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                  <div class="col-lg-10">	
                
                   <div class="row"> {{--first 1st row --}}
                     <div class="col-md-4">

                       <div class="form-group">
                         <h5>No Kartu Keluarga <span class="text-danger">*</span></h5>
                         <div class="controls">
                             <input type="text" name="no_kk" class="form-control" required="" value="{{ old('no_kk') }}">

                          @error('no_kk')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror

                         </div>
                       </div>

                      </div> {{--end col md 4 --}}

                      <div class="col-md-4">

                       <div class="form-group">
                         <h5>NIK Ayah<span class="text-danger">*</span></h5>
                         <div class="controls">
                             <input type="text" name="nik_ayh" class="form-control" required="" value="{{ old('nik_ayh') }}">

                          @error('nik_ayh')
                             <span class="text-danger">{{ $message }}</span>
                          @enderror

                         </div>
                       </div>

                      </div> {{--end col md 4 --}}

                      <div class="col-md-4">

                       <div class="form-group">
                         <h5>Nama Ayah <span class="text-danger">*</span></h5>
                         <div class="controls">
                             <input type="text" name="nama_ayh" class="form-control" required="">
                         </div>
                       </div>

                      </div> {{--end col md 4 --}}

                    </div> {{--end 1st row --}}


                    <div class="row"> {{--first 2nd row --}}

                     <div class="col-md-4">

                       <div class="form-group">
                         <h5>Agama<span class="text-danger">*</span></h5>
                         <div class="controls">
                             <input type="text" name="agama_ayh" class="form-control" required="">
                         </div>
                       </div>

                      </div> {{--end col md 4 --}}

                      <div class="col-md-4">

                        <div class="form-group">
                          <h5>Pendidikan Terakhir <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="pend_ayh" class="form-control" required="">
                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}

                       <div class="col-md-4">

                        <div class="form-group">
                          <h5>Pekerjaan Ayah<span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="kerja_ayh" class="form-control" required="">
                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}

                    </div> {{--end 2nd row --}}

                    <div class="row"> {{--first 3rd row --}}

                      <div class="col-md-4">

                        <div class="form-group">
                          <h5>Gaji <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="gaji_ayh" class="form-control" required="" value="{{ old('gaji_ayh') }}">

                          @error('gaji_ayh')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror

                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}

                     <div class="col-md-4">

                       <div class="form-group">
                         <h5>Status Ayah<span class="text-danger">*</span></h5>
                         <div class="controls">
                 
                             <select name="status_ayh" id="status" required="" class="form-control">
                                 <option value="" selected="" disabled="" >Pilih</option>
                                 <option value="Hidup">Hidup</option>
                                 <option value="Meninggal">Meninggal</option>
                             </select>

                         </div>
                       </div>

                      </div> {{--end col md 4 --}}


                    </div> {{--end 3rd row --}}

                    <div class="row"> {{--first 4st row --}}

                      <div class="col-md-4">

                       <div class="form-group">
                         <h5>NIK Ibu<span class="text-danger">*</span></h5>
                         <div class="controls">
                             <input type="text" name="nik_ibu" class="form-control" required="" value="{{ old('nik_ibu') }}">

                          @error('nik_ibu')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror

                         </div>
                       </div>

                      </div> {{--end col md 4 --}}

                      <div class="col-md-4">

                       <div class="form-group">
                         <h5>Nama Ibu <span class="text-danger">*</span></h5>
                         <div class="controls">
                             <input type="text" name="nama_ibu" class="form-control" required="">
                         </div>
                       </div>

                      </div> {{--end col md 4 --}}

                      <div class="col-md-4">

                        <div class="form-group">
                          <h5>Agama<span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="agama_ibu" class="form-control" required="">
                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}

                    </div> {{--end 4st row --}}

                    <div class="row"> {{--first 5nd row --}}

                      <div class="col-md-4">

                        <div class="form-group">
                          <h5>Pendidikan Terakhir <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="pend_ibu" class="form-control" required="">
                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}

                       <div class="col-md-4">

                        <div class="form-group">
                          <h5>Pekerjaan Ibu<span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="kerja_ibu" class="form-control" required="">
                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}

                       <div class="col-md-4">

                        <div class="form-group">
                          <h5>Gaji <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="gaji_ibu" class="form-control" required="" value="{{ old('gaji_ibu') }}">

                          @error('gaji_ibu')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror

                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}

                    </div> {{--end 5nd row --}}

                    <div class="row"> {{--first 6rd row --}}

                      <div class="col-md-4">
 
                        <div class="form-group">
                          <h5>Status Ibu<span class="text-danger">*</span></h5>
                          <div class="controls">
                  
                              <select name="status_ibu" id="status" required="" class="form-control">
                                  <option value="" selected="" disabled="" >Pilih</option>
                                  <option value="Hidup">Hidup</option>
                                  <option value="Meninggal">Meninggal</option>
                              </select>
 
                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}

                       <div class="col-md-4">

                        <div class="form-group">
                          <h5>No Telephon<span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="hp" class="form-control" required="" value="{{ old('hp') }}">

                          @error('hp')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror

                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}
 
 
                     </div> {{--end 6rd row --}}

                           

                  <div class="text-xs-right">
                      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Simpan" >
                      {{-- <a href="/add/ibu" class="btn btn-rounded btn-primary mb-5">Isi Data ayah</a> --}}
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