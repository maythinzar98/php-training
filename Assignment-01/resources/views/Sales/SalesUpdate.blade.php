@extends('layouts.app')

@section('content')
<div class="container">
  <div align="right">
    <a href="{{ route('Sales.index') }}" class="btn btn-default back-btn">Back</a>
  </div>
  <h1 class="title">Update Sales Data</h1>
  <form method="post" action="{{ route('Sales.update', $data->id) }}" class="form-group" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <input type="text" class="txtbox" name="order_number" value="{{ $data->order_number }}">
    </div>
    <div class="form-group">
      <input type="date" class="txtbox" name="order_date" value="{{ $data->order_date }}">
    </div>
    <div class="form-group">
      <input type="text" class="txtbox" name="shoes_code" value="{{ $data->shoes_code }}">
    </div>
    <div class="form-group">
      <input type="text" class="txtbox" name="price" value="{{ $data->price }}">
    </div>
    <div class="form-group">
      <input type="text" class="txtbox" name="quantity" value="{{ $data->quantity }}">
    </div>
    <div class="form-group">
      <input type="text" class="txtbox" name="total" value="{{ $data->total }}">
    </div>
    <div class="form-group">
      <input type="submit" name="create" class="btn btn-primary" value="Update">
    </div>
  </form>
</div>
@endsection