@extends('layouts.pembelian')

@section('content')

<head>
    <style type="text/css">
        .button {
    background-color:  #008CBA; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
    </style>
</head>
<body>
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

<button class="button">Buat sekarang</button>
</body>
@endsection