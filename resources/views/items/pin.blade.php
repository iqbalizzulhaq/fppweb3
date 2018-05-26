@extends('layouts.pembelian')

@section('content')

<div class="section-title text-center center">
      <h2>Pin</h2>
      <hr>

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
<center>
<h3> FORM PENJUALAN </h3>
<br>
<form action="#" method="post">
<input type="text" placeholder="type kertas" class="col-md-12"> <br> <br>
<input type="radio" name="gender" value="female"> Single Side<br>
<input type="radio" name="gender" value="other"> Double Side<br><br>
</form>

</center>
@endsection