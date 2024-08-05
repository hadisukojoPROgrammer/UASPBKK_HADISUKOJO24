@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Stock Movement</h1>
  </div>

  <div class="section-body">
    <form action="{{ route('stock_movements.update', $stock_movement->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="item_id">Item</label>
        <select name="item_id" class="form-control" required>
          @foreach ($items as $item)
            <option value="{{ $item->id }}" {{ $item->id == $stock_movement->item_id ? 'selected' : '' }}>{{ $item->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" class="form-control" value="{{ $stock_movement->quantity }}" required>
      </div>
      <div class="form-group">
        <label for="type">Type</label>
        <select name="type" class="form-control" required>
          <option value="in" {{ $stock_movement->type == 'in' ? 'selected' : '' }}>In</option>
          <option value="out" {{ $stock_movement->type == 'out' ? 'selected' : '' }}>Out</option>
        </select>
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" class="form-control" value="{{ $stock_movement->date }}" required>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</section>
@endsection
