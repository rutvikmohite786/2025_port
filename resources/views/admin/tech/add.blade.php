@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('tech.store')}}">
  @csrf
  <div class="form-group">
    <label for="name">name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="title">Percentage</label>
    <input name="per" type="number" class="form-control" id="per" placeholder="Enter percentage">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
@endsection