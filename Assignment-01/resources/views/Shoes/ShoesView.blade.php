@extends('layouts.app')

@section('content')
<div class="container view-container">
  <div align="right">
    <a href="{{ route('Shoes.index') }}" class="btn btn-default">Back</a>
  </div>
  <div class="view-data">
    <img src="{{ URL::to('/') }}/images/{{ $data->image }}">
    <ul class="shoes-datalist">
      <li>Shoes Name - {{ $data->name }}</li>
      <li>Brand Name - {{ $data->brand_name }}</li>
      <li>Code Number - {{ $data->code }}</li>
      <li>Color - {{ $data->color }}</li>
      <li>Size - {{ $data->size }}</li>
      <li>Price(MMK) - {{ $data->price }}</li>
    </ul>
  </div>
</div>
@endsection