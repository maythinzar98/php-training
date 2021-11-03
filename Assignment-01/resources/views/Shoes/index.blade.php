@extends('layouts.app')

@section('content')
@if ($message = Session::get('success'))
<div class="alert">
  <p>{{ $message }}</p>
</div>
@endif
<div class="container">
  <h1 class="title">Shoes Table</h1>
  <div class="button" align="right">
    <a href="{{ route('Shoes.create')}}" class="btn btn-primary">Create</a>
  </div>

  <table class="tbl table table-bordered table-striped">
    <tr class="theader">
      <th>Image</th>
      <th>Name</th>
      <th>Brand Name</th>
      <th>Code</th>
      <th>Color</th>
      <th>Size</th>
      <th>Price(MMK)</th>
      <th class="action">Action</th>
    </tr>
    @foreach($data as $row)
    <tr class="tdata">
      <td class="action"><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail"></td>
      <td>{{ $row->name }}</td>
      <td>{{ $row->brand_name }}</td>
      <td>{{ $row->code }}</td>
      <td>{{ $row->color }}</td>
      <td>{{ $row->size }}</td>
      <td>{{ $row->price }}</td>
      <td class="row action">
        <a href="{{ route('Shoes.showShoesDetail', $row->id) }}" class="btn btn-success">View</a>
        <a href="{{ route('Shoes.ShoesEdit', $row->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('Shoes.delete', $row->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
  {!! $data->links() !!}
  <div align="right">
    <a href="{{ route('Sales.index') }}" class="btn link-btn">Goes to Sales Table =></a>
  </div>
</div>
@endsection