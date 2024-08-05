@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Warehouse</h1>
  </div>

  <div class="section-body">
    <form action="{{ route('warehouses.update', $warehouse->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $warehouse->name }}" required>
      </div>
      <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" class="form-control" value="{{ $warehouse->location }}" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</section>
@endsection
