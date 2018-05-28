@extends('layouts.pembelian')

@section('content')

<style type="text/css">
.box{
  width: 40%;
  background: rgba(0, 0, 0, 0.4);
  padding: 40px;
  text-align: center;
  margin: 20px;
  margin-top: 5%;
  color: white;
  float: left;
  font-family: 'Century Gothic',sans-serif;
}
.box-img{
  border-radius: 100%;
  width: 200px;
  height: 200px;
  float: center;
}
.box h1{
  font-size: 40px;
  letter-spacing: 4px;
  font-weight: 100;
}
.box h5{
  font-size: 20px;
  letter-spacing: 3px;
  font-weight: 100;
}
.box p{
  text-align: justify;
}
</style>

<div class="section-title text-center center">
      <h2>Poster</h2>
      <hr>
      Menghadirkan kualitas cetak sempurna dengan bahan kertas terbaik untuk poster promosi Anda <br>
      <a href="#portfolio" class="btn btn-default btn-lg page-scroll">Buat sekarang</a> 
</div>

<div class="section-title text-center center">
      <h2>Kategori Bahan</h2>
      <hr>

      Tersedia 2 pilihan bahan- bahan kertas sesuai preferensi Anda
      
</div>


<div class="box">
  <img src="image/portfolio/calender1.jpeg" alt="" class="box-img">
  <h1>Art paper</h1>
  
</div>

<div class="box">
  <img src="image/portfolio/calender1.jpeg" alt="" class="box-img">
  <h1>Art Carton</h1>
  
</div>

@endsection