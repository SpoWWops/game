@extends('layouts.app')
@section('title', $char->name)
@section('content')
  @if(Session::has('status'))
  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('status') }}</p>
  @endif
  <form method="POST" action="/character/{{$char->id}}">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" name="name" value="{{$char->name}}">
    </div>
    <div class="form-group">
      <label for="exampleSelect1">Example select</label>
      <select class="form-control" id="exampleSelect1" name="class">
        @foreach ($classes as $class)
          <option {{ $class->id === $char->class ? "selected" : "" }} value="{{$class->id}}">{{$class->name}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection