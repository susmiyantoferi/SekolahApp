@extends('admin.admin_master')


@section('admin')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Data Santri</h2>
        </div>
        <div class="card-body">

            <form method="POST" action="{{ url('santri/update/'.$data->id) }}" >
                @csrf
                 <div class="row mt-5 justify-content-center" data-aos="fade-up">
                   <div class="col-lg-10">	
                 
                    <div class="row"> {{--first 1st row --}}
                      <div class="col-md-4">
 
                        <div class="form-group">
                          <h5>NIK <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="nik" class="form-control" required="" value="{{ $data->nik }}">

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
                              <input type="text" name="nisn" class="form-control" required="" value="{{ $data->nisn }}">

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
                              <input type="text" name="nama" class="form-control" required="" value="{{ $data->nama }}">
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
                                   <option value="" selected="" disabled="" >jenis kelamin</option>
                                   {{-- <option value="laki-laki">Laki-laki</option>
                                   <option value="Perempuan">Perempuan</option> --}}
                                   <option value="laki-laki" {{ ($data->kelamin == 'laki-laki')? 'selected': '' }}>laki-laki</option>
                                   <option value="Perempuan" {{ ($data->kelamin == 'Perempuan')? 'selected': '' }}>Perempuan</option>
                               </select>
  
                           </div>
                         </div>
  
                        </div> {{--end col md 4 --}}
 
                      <div class="col-md-4">
 
                        <div class="form-group">
                          <h5>Tempat lahir<span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="tempat_lahir" class="form-control" required="" value="{{ $data->tempat_lahir }}">
                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}
 
                       <div class="col-md-4">
 
                         <div class="form-group">
                           <h5>Tanggal Lahir <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="date" name="tgl_lahir" class="form-control" required="" value="{{ $data->tgl_lahir }}">
                           </div>
                         </div>
  
                        </div> {{--end col md 4 --}}
 
                     </div> {{--end 2nd row --}}
 
                     <div class="row"> {{--first 3rd row --}}
 
                       <div class="col-md-4">
 
                         <div class="form-group">
                           <h5>Alamat <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="text" name="alamat" class="form-control" required="" value="{{ $data->alamat }}">
                           </div>
                         </div>
  
                        </div> {{--end col md 4 --}}
 
                      <div class="col-md-4">
 
                        <div class="form-group">
                          <h5>Tinggal bersama <span class="text-danger">*</span></h5>
                          <div class="controls">
                  
                              <select name="tinggal" id="tinggal" required="" class="form-control">
                                  <option value="" selected="" disabled="" >Select</option>
                                  {{-- <option value="Orangtua">Orangtua</option>
                                  <option value="Wali">Wali</option> --}}
                                  <option value="Orangtua" {{ ($data->tinggal == 'Orangtua')? 'selected': '' }}>Orangtua</option>
                                  <option value="Wali" {{ ($data->tinggal == 'Wali')? 'selected': '' }}>Wali</option>
                              </select>
 
                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}
 
                       <div class="col-md-4">
 
                        <div class="form-group">
                          <h5>Bahasa sehari hari <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="bahasa" class="form-control" required="" value="{{ $data->bahasa }}">
                          </div>
                        </div>
 
                       </div> {{--end col md 4 --}}
 
                     </div> {{--end 3rd row --}}
                            
 
                   <div class="text-xs-right">
                       <input type="submit" class="btn btn-rounded btn-info mb-5" value="Simpan" >
                       <a href="{{route('admin.daftar')}}" class="btn btn-rounded btn-primary mb-5">Back</a>
                   </div>
               </form>
 

        </div>
    </div>

    

@endsection