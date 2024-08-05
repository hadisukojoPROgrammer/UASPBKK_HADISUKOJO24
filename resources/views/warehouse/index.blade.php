@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Warehouses</h1>
    <div class="section-header-button">
      <a href="{{ route('warehouses.create') }}" class="btn btn-primary">Add New</a>
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
            <th>Location</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($warehouses as $warehouse)
          <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $warehouse->name }}</td>
            <td>{{ $warehouse->location }}</td>
            <td>
              <form action="{{ route('warehouses.destroy',$warehouse->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('warehouses.show',$warehouse->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('warehouses.edit',$warehouse->id) }}">Edit</a>

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