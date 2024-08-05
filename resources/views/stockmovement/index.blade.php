@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Stock Movements</h1>
    <div class="section-header-button">
      <a href="{{ route('stock_movements.create') }}" class="btn btn-primary">Add New</a>
    </div>
  </div>

  <div class="section-body">
    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    @endif
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Item</th>
            <th>Quantity</th>
            <th>Type</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($stock_movements as $movement)
          <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $movement->item->name }}</td>
            <td>{{ $movement->quantity }}</td>
            <td>{{ $movement->type }}</td>
            <td>{{ $movement->date }}</td>
            <td>
              <form action="{{ route('stock_movements.destroy', $movement->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('stock_movements.show', $movement->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('stock_movements.edit', $movement->id) }}">Edit</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection
