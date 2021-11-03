@extends('layouts.app')

@section('content')
@if ($message = Session::get('success'))
<div class="alert">
  <p>{{ $message }}</p>
</div>
@endif
<div class="container">
  <h1 class="title">Sales Table</h1>
  <div align="right">
    <a href="{{ route('Sales.create')}}" class="btn btn-primary">Create</a>
  </div>
  <table class="tbl table table-bordered table-striped">
    <tr>
      <th>Order Number</th>
      <th>Order Date</th>
      <th>Code Number</th>
      <th>Price(MMK)</th>
      <th>Quantity</th>
      <th>Total Price</th>
      <th class="action">Action</th>
    </tr>
    @foreach($data as $row)
    <tr>
      <td>{{ $row->order_number }}</td>
      <td>{{ $row->order_date }}</td>
      <td>{{ $row->shoes_code }}</td>
      <td>{{ $row->price }}</td>
      <td>{{ $row->quantity }}</td>
      <td>{{ $row->total }}</td>
      <td>
        <a href="{{ route('Sales.SalesEdit', $row->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('Shoes.delete', $row->id) }}" method="post">
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
    <a href="{{ route('Shoes.index') }}" class="btn link-btn">Goes to Shoes Table =></a>
  </div>
</div>
@endsection