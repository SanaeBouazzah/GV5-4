@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')
<div class="bg-gray-100 min-h-screen pt-5">
<form action="{{route('customers.store')}}" class="bg-light p-5 shadow-lg" method="POST" style="width:35%; margin:auto;">
  @csrf
  <div class="mb-3">
    <label>Name:</label>
     <input type="text" name="name" class="form-control">
   </div>
   <div class="mb-3">
    <label>details:</label>
     <input type="text" name="details" class="form-control">
   </div>
   <div>
    <input type="submit" value="Save Changes" class="form-control btn btn-dark">
   </div>
 </form>

</div>
@endsection