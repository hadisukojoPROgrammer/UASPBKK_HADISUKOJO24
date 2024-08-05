@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Suppliers</h1>
    <div class="section-header-button">
      <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Add New</a>
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
            <th>Name</th>
            <th>Contact Person</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($suppliers as $supplier)
          <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $supplier->name }}</td>
            <td>{{ $supplier->contact_person }}</td>
            <td>{{ $supplier->phone }}</td>
            <td>{{ $supplier->email }}</td>
            <td>{{ $supplier->address }}</td>
            <td>
              <form action="{{ route('suppliers.destroy',$supplier->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('suppliers.show',$supplier->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('suppliers.edit',$supplier->id) }}">Edit</a>

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
