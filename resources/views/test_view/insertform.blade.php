@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <h1>Insert form test crud</h1>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('test_crud.store') }}">
          <div class="form-group">
              @csrf
              <label for="title">Title :</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">INSERT</button>
      </form>
  </div>
</div>
@endsection