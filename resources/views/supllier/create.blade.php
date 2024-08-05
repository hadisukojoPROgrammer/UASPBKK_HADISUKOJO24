@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Add New Supplier</h1>
  </div>

  <div class="section-body">
    <form action="{{ route('suppliers.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="contact_person">Contact Person</label>
        <input type="text" name="contact_person" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" name="phone" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <textarea name="address" class="form-control" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</section>
@endsection
