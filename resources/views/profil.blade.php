@extends('layouts.app')

@section('title', 'Profil')

@section('navbar-brand')
    <h1>MyProfile</h1>
@endsection

@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
    <img src="{{asset('/img/aulia.jpg')}}" width="200px"> 
    <p>Nama                     : Muslimatul Rizki Aulia<br>
       Tempat,Tanggal Lahir     : Malang ,19 September 1999<br>
       Hobby                    : Makan , Nonton Drakor <br>
       Hewan Favorit            : KUCING<br>
       Pendidikan               : Mahasiswa Politenik Negeri Malang<br>
       Jurusan                  : Teknologi Informasi<br>
       Prodi                    : Manajemen Informatika<br>
    </p>
</div>
@endsection
