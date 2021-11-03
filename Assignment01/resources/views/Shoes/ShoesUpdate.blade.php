@extends('layouts.app')
@section('content')
<div class="container">
  <div align="right">
    <a href="{{ route('Shoes.index') }}" class="btn btn-default back-btn">Back</a>
  </div>
  <h1 class="title">Update Shoes Data</h1>
  <form method="post" action="{{ route('Shoes.update', $data->id) }}" class="form-group" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
      <label for="file">Choose New Image</label>
      <input type="file" name="image">
      <img src="{{ URL::to('/') }}/images/{{ $data->image }}" width="20%" height="20%">
      <input type="hidden" name="hidden_image" value="{{ $data->image }}">
    </div>
    <div class="form-group">
      <input type="text" name="name" class="txtbox" value="{{ $data->name }}">
    </div>
    <div class="form-group">
      <input type="text" name="brand_name" class="txtbox" value="{{ $data->brand_name }}">
    </div>
    <div class="form-group">
      <input type="text" name="code" class="txtbox" value="{{ $data->code }}">
    </div>
    <div class="form-group">
      <input type="text" name="color" class="txtbox" value="{{ $data->color }}">
    </div>
    <div class="form-group">
      <input type="text" name="size" class="txtbox" value="{{ $data->size }}">
    </div>
    <div class="form-group">
      <input type="text" name="price" class="txtbox" value="{{ $data->price }}">
    </div>
    <div class="form-group">
      <input type="submit" name="update" class="btn btn-primary" value="Update">
    </div>
  </form>
</div>
@endsection