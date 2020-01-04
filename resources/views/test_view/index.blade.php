@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">

<div class="card-header">
    <h1>List test crud</h1>
  </div>

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td></td>
          <td>Title</td>
          <td>description</td>
          <td colspan="3">기능</td>
        </tr>
    </thead>
    <tbody>
    @foreach($test as $column)
        <tr>
            <td>{{$column->id}}</td>
            <td>{{$column->title}}</td>
            <td>{{$column->description}}</td>
            <td><a href="{{ route('test_crud.show', $column->id)}}" class="btn btn-primary">확인</a></td>
            <td><a href="{{ route('test_crud.edit', $column->id)}}" class="btn btn-success">수정</a></td>
            <td>
                <form action="{{ route('test_crud.destroy', $column->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">삭제</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection