@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }

  .right-box {
  float: right;
}

</style>
<div class="card uper">

  <div class="card-header">
    <div class="row">

    <div class="col"><h1>List - test crud</h1></div>
    <div class="col">  <a href="{{ route('test_crud.create')}}" class="right-box btn btn-secondary">CREATE</a> </div>

    </div>
     
  </div>

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>No</td>
          <td>Title</td>
          <td>Description</td>
          <td colspan="3">Function</td>
        </tr>
    </thead>
    <tbody>
    @foreach($test as $column)
        <tr>
            <td>{{$column->id}}</td>
            <td>{{$column->title}}</td>
            <td>{{$column->description}}</td>
            <td><a href="{{ route('test_crud.show', $column->id)}}" class="btn btn-primary">VIEW</a></td>
            <td><a href="{{ route('test_crud.edit', $column->id)}}" class="btn btn-success">MODIFY</a></td>
            <td>
                <form action="{{ route('test_crud.destroy', $column->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection