@extends('admin.admin_master')


@section('admin')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Data MTs Shifa' Kalipare</h2>
        </div>
        <div class="card-body">

            <form action="{{ url('mtsshifa/update/'.$mts->id) }}" method="POST" >
                @csrf
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" >{{ $mts->alamat }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1"> Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{ $mts->email }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1"> Hp</label>
                    <input type="text" name="hp" class="form-control" id="exampleFormControlInput1" value="{{ $mts->hp }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Visi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="visi" >{{ $mts->visi }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Misi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="misi" >{{ $mts->misi }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tujuan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tujuan" >{{ $mts->tujuan }}</textarea>
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update Data</button>
                    <a href="/mtsshifa/admin" class="btn btn-success">Back</a>
                </div>
            </form>
        </div>
    </div>

    

@endsection