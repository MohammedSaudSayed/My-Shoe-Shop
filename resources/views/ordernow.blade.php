@extends('master')
@section('content')

<div class="custom-product">
        <div class="col-sm-6">
        <table class="table table-striped">
    <tbody>
      <tr>
        <td>Price</td>
        <td>{{$total}} Rupees</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>0 Rupees</td>
      </tr>
      <tr>
        <td>Delivery Charges</td>
        <td>45 Rupees</td>
      </tr>
      <tr>
        <td>Total Amount in Rupees</td>
        <td>{{$total+45}}</td>
      </tr>
    </tbody>
  </table>
  <form method="POST" action="orderplace">
      @csrf
  <div class="form-group">
    <textarea placeholder="enter your address" name="address" class="form-control"> </textarea>
  </div>
  <div class="form-group">
      <label for="">Payment Method</label>
      <p><input type="radio" value="cash" name="payment"> <span>Online Payment</span></p>
      <p><input type="radio" value="cash" name="payment"> <span>EMI</span></p>
      <p><input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span></p>
  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
  <br><br>
</form>
        </div>
</div>
@endsection