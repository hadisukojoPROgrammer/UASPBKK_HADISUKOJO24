@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Add New Warehouse</h1>
  </div>

  <div class="section-body">
    <form action="{{ route('warehouses.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</section>
@endsection
