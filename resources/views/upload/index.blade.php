@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')

  <div class="container-fluid m-5">
    <form action="{{route('upload.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="file" name="photo">
      <input type="submit" value="submit">
    </form>
  </div>
@endsection