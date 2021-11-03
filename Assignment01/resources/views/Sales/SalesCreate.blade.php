@extends('layouts.app')

@section('content')
@if ($errors->any())
<div class="alert">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="container">
  <h1 class="title">Add New Sales Data</h1>
  <div align="right">
    <a href="{{ route('Sales.index') }}" class="btn btn-primary back-btn">Back</a>
  </div>
  <form method="post" action="{{ route('Sales.store') }}" class="form-group" enctype="multipart/form-data">
    @csrf
    <div class="txtbox-control">
      <input type="text" class="txtbox" name="order_number" placeholder="Enter Order Number">
    </div>
    <div class="txtbox-control">
      <input type="date" class="txtbox" name="order_date" placeholder="Enter Order Date">
    </div>
    <div class="txtbox-control">
      <input type="text" class="txtbox" name="shoes_code" placeholder="Enter Code Number">
    </div>
    <div class="txtbox-control">
      <input type="number" class="txtbox" name="price" placeholder="Enter Price ">
    </div>
    <div class="txtbox-control">
      <input type="number" class="txtbox" name="quantity" placeholder="Enter Quantity">
    </div>
    <div class="txtbox-control">
      <input type="number" class="txtbox" name="total" placeholder="Enter Total">
    </div>
    <div class="txtbox-control">
      <input type="submit" name="create" class="btn btn-primary" value="Add New">
    </div>
  </form>
</div>
@endsection