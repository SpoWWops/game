@extends('layouts.blade_create_char')
@section('title', 'New character')
@section('content')
  @if(Session::has('status'))
  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('status') }}</p>
  @endif
  <form method="POST" action="/character">
    @csrf
    {{ method_field('POST') }}
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label for="exampleSelect1">Example select</label>
      <select class="form-control" id="exampleSelect1" name="class">
        @foreach ($classes as $class)
          <option value="{{$class->id}}">{{$class->name}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection