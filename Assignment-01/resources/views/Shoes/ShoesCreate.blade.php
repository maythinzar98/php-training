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
  <h1 class="title">Add New Shoes Data</h1>
  <div align="right">
    <a href="{{ route('Shoes.index') }}" class="btn btn-primary back-btn">Back</a>
  </div>
  <form method="post" action="{{ route('Shoes.store') }}" class="form-group" enctype="multipart/form-data">
    @csrf
    <div class="txtbox-control">
      <label for="file">Choose Shoes Image</label>
      <input type="file" name="image">
    </div>
    <div class="txtbox-control">
      <input type="text" name="name" class="txtbox" placeholder="Enter Shoes Name">
    </div>
    <div class="txtbox-control">
      <input type="text" name="brand_name" class="txtbox" placeholder="Enter Brand Name">
    </div>
    <div class="txtbox-control">
      <input type="text" name="code" class="txtbox" placeholder="Enter Code Number">
    </div>
    <div class="txtbox-control">
      <input type="text" name="color" class="txtbox" placeholder="Enter Color">
    </div>
    <div class="txtbox-control">
      <input type="text" name="size" class="txtbox" placeholder="Enter Shoes's Size">
    </div>
    <div class="txtbox-control">
      <input type="text" name="price" class="txtbox" placeholder="Enter Shoes's Price">
    </div>
    <div class="txtbox-control">
      <input type="submit" name="create" class="btn btn-primary" value="Add New">
    </div>
  </form>
</div>
@endsection