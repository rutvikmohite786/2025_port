@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('experience.store')}}" id="experienceform">
  @csrf
  <div class="form-group">
    <label for="title">Compony name</label>
    <input name="cname" type="text" class="form-control" id="cname" placeholder="Enter compony name">
  </div>
  <div class="form-group">
    <label for="image">Title</label>
    <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="image">Location</label>
    <input name="location" type="text" class="form-control" id="location" placeholder="Enter location">
  </div>
  <div class="form-group">
    <label for="image">Year</label>
    <input name="year" type="text" class="form-control" id="year" placeholder="Enter year">
  </div>
  <div class="form-group">
    <label for="title">Description</label>
    <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="for_use">Please select</label>
    <select class="form-control" name="for_use">
      @foreach(config('key.foruse') as $data)
      <option value="{{$data}}">{{$data}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/experience.js')}}"></script>
@endsection
