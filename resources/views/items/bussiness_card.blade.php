@extends('layouts.pembelian')

@section('content')

<div class="section-title text-center center">
      <h2>bussiness card</h2>
      <hr>
      e-print menghadirkan solusi cetak online kartu nama dengan kualitas terbaik dan harga yang ekonomis
    </div>

<table class="table table-bordered table-hover table-light table-striped">
    <tr>
        <td>quantity</td>
        <td>standart</td>
        <td>premium</td>
        <td>lux</td>
    </tr>
    <tr>
        <td>1 box</td>
        <td>3000</td>
        <td>4000</td>
        <td>5000</td>
    </tr>
    <tr>
        <td>5 box</td>
        <td>12000</td>
        <td>17000</td>
        <td>23000</td>
    </tr>
    <tr>
        <td>11 box</td>
        <td>24000</td>
        <td>34000</td>
        <td>46000</td>
        <tr>
        <td>21 box</td>
        <td>48000</td>
        <td>68000</td>
        <td>90000</td>
    </tr>
    </tr>
</table>
<br>

<a href="form_pembelian" class="btn btn-default btn-lg page-scroll">Buat sekarang</a> 
@endsection