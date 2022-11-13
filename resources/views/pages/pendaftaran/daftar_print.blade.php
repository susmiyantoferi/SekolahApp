<!DOCTYPE html>
<html>
  <title>Data Pendaftaran</title>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<table id="customers" >
    <tr>
      <td>
        <h2>

          <?php $image_path = '/upload/logo.jpg'; ?>
          <img src="{{ public_path().$image_path }}" width="175" height="160">

        </h2>
      </td>
      
      <td><h2>Pondok Pesantren Shirotul Fuqoha' II</h2>
        <p>Alamat Pondok : INDONESIA</p>
        <p>Contact Pondok : 9493666</p>
        <p><b> Data Pendaftaran Santri Baru</b></p>
     </td>
    </tr>
</table>

  <table id="customers">
    <tr>
      <th width="10%">No</th>
      <th width="45%">Details Santri </th>
      <th width="45%">Data Santri</th>
    </tr>
    <tr>
      <td>1</td>
      <td><b>NIK</b></td>
      <td>{{ $details['santri']['nik']}}</td>
    </tr>
    <tr>
      <td>2</td>
      <td><b>NISN</b></td>
      <td>{{ $details['santri']['nisn']}}</td>
    </tr>
    <tr>
      <td>3</td>
      <td><b>Nama Santri</b></td>
      <td>{{ $details['santri']['nama']}}</td>
    </tr>
    <tr>
      <td>4</td>
      <td><b>Jenis Kelamin</b></td>
      <td>{{ $details['santri']['kelamin']}}</td>
    </tr>
    <tr>
      <td>5</td>
      <td><b>Tempat Lahir</b></td>
      <td>{{ $details['santri']['tempat_lahir']}}</td>
    </tr>
    <tr>
      <td>6</td>
      <td><b>Tanggal Lahir</b></td>
      <td>{{ $details['santri']['tgl_lahir']}}</td>
    </tr>
    <tr>
      <td>7</td>
      <td><b>Tiggal Bersama</b></td>
      <td>{{ $details['santri']['tinggal']}}</td>
    </tr>
    <tr>
      <td>8</td>
      <td><b>Bahasa Sehari-hari</b></td>
      <td>{{ $details['santri']['bahasa']}}</td>
    </tr>
    <tr>
      <td>9</td>
      <td><b>Alamat</b></td>
      <td>{{ $details['santri']['alamat']}}</td>
    </tr>
    
  </table>

<br>

<table id="customers">
    <tr>
      <th width="5%">No</th>
      <th width="15%">Data</th>
      <th width="40%">Ayah </th>
      <th width="40%">Ibu</th>
    </tr>
    <tr>
      <td>1</td>
      <td><b>No KK</b></td>
      <td>{{$details->no_kk}}</td>
      <td>{{$details->no_kk}}</td>
    </tr>
    <tr>
      <td>2</td>
      <td><b>NIK</b></td>
      <td>{{$details->nik_ayh}}</td>
      <td>{{$details->nik_ibu}}</td>
    </tr>
    <tr>
      <td>3</td>
      <td><b>Nama</b></td>
      <td>{{$details->nama_ayh}}</td>
      <td>{{$details->nama_ibu}}</td>
    </tr>
    <tr>
      <td>4</td>
      <td><b>Agama</b></td>
      <td>{{$details->agama_ayh}}</td>
      <td>{{$details->agama_ibu}}</td>
    </tr>
    <tr>
      <td>5</td>
      <td><b>Pendidikan Terakhir</b></td>
      <td>{{$details->pend_ayh}}</td>
      <td>{{$details->pend_ibu}}</td>
    </tr>
    <tr>
      <td>6</td>
      <td><b>Penghasilan</b></td>
      <td>Rp {{$details->gaji_ayh}}</td>
      <td>Rp {{$details->gaji_ibu}}</td>
    </tr>
    <tr>
      <td>7</td>
      <td><b>Status</b></td>
      <td>{{$details->status_ayh}}</td>
      <td>{{$details->status_ibu}}</td>
    </tr>
    <tr>
      <td>8</td>
      <td><b>Hp</b></td>
      <td>{{$details->hp}}</td>
      <td>{{$details->hp}}</td>
    </tr>
    
  </table>
<br>

<i style="font-size: 10px; float: right;"> Print Date :  {{ date("d M Y") }}</i>

</body>
</html>


