@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Add New Stock Movement</h1>
  </div>

  <div class="section-body">
    <form action="{{ route('stock_movements.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="item_id">Item</label>
        <select name="item_id" class="form-control" required>
          @foreach ($items as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="type">Type</label>
        <select name="type" class="form-control" required>
          <option value="in">In</option>
          <option value="out">Out</option>
        </select>
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
</section>
@endsection
