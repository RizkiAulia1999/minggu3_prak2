@extends('layouts.app')

@section('title', 'Home')

@section('navbar-brand')
    <h1>Article</h1>
@endsection

@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
    <h2 class="tm-gold-text tm-title">Keindahan Gunung Bromo dan Wisata Indah Di Sekitarnya</h2>
    <p>Berdiri kokoh setinggi 2.329 meter di atas permukaan laut, 
        Gunung Bromo menyimpan keindahan alam yang sayang untuk dilewatkan.
        Gunung berapi yang masih aktif ini secara administratif berada di </p>
    <img src="{{asset('/img/bromo-01.png')}}" width="700px">
    
    <p>Gunung ini terkenal dengan pemandangan matahari terbitnya yang indah.
        Untuk bisa menyaksikan fenomena ini, para wisatawan harus naik ke 
        Puncak Penanjakan yang merupakan lokasi terbaik untuk dapat melihat matahari terbit. 
        Jika menginap di sebuah penginapan anda dapat berpesan kepada pemilik penginapan untuk dibangunkan di pagi,
        karena keesokan harinya sekitar jam 2 dini hari, anda akan dibangunkan untuk persiapan mendaki.</p>
    <img src="{{asset('/img/bromo-02.jpg')}}" width="600px" >
    <p>Gunung Bromo memiliki kawah dengan panjang diameter sekitar 800 meter dari utara ke selatan dan 600 meter
        dari barat ke timur. Dengan kandungan belerang yang ada di kawah, tak mengherankan jika bau belerang cukup 
        tajam tercium saat anda berada berdiri di tepiannya. Untuk dapat menikmati keindahan kawah ini, anda harus 
        menaiki 250 anak tangga terlebih dahulu. Jika ini terdengar melelahkan, tersedia kuda-kuda milik warga 
        sekitar yang bisa anda sewa.

        Suhu udara di Gunung Bromo berkisar antara 3-20 derajat Celcius, bahkan bisa mencapai suhu minus 0 derajat Celcius.
        Untuk itu, siapkan pakaian hangat, sarung tangan, syal dan penutup kepala. Jika anda lupa membawa perlengakapan tersebut, 
        tak usah khawatir karena anda bisa menemukan pedagang di sekitar kawasan wisata Gunung Bromo.
    </p>
   
</div>
@endsection
