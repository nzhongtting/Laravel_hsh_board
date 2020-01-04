@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    View - Test C.R.U.D 
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

          <div class="form-group">

              <label for="name">Title:</label>
                {{ $test->title }}
          </div>

          <div class="form-group">
              <label for="iurl">Description :</label>
              {{ $test->description }}
          </div>

          <a href="{{ route('test_crud.index')}}" class="btn btn-primary">목록</a>


  </div>
</div>