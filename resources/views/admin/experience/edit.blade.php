@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('experience.update')}}" id="experienceform">
 <input  value="{{$data->id}}" type="hidden" name="id">
  @csrf
  <div class="form-group">
    <label for="title">Compony name</label>
    <input name="cname" value="{{$data->company_name}}" type="text" class="form-control" id="cname" placeholder="Enter compony name">
  </div>
  <div class="form-group">
    <label for="image">Title</label>
    <input name="title" value="{{$data->title}}" type="text" class="form-control" id="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="image">Location</label>
    <input name="location" value="{{$data->location}}" type="text" class="form-control" id="location" placeholder="Enter location">
  </div>
  <div class="form-group">
    <label for="image">Year</label>
    <input name="year"  value="{{$data->year}}" type="text" class="form-control" id="year" placeholder="Enter year">
  </div>
  <div class="form-group">
    <label for="title">Description</label>
    <textarea name="desc" value="" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data->description}}</textarea>
  </div>
  <div class="form-group">
    <label for="for_use">Please select</label>
    <select class="form-control" name="for_use">
      @foreach(config('key.foruse') as $for_use)
      <option value="{{$for_use}}"  {{ $for_use == $data->for_use ? 'selected' : '' }} >{{$for_use}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/experience.js')}}"></script>
@endsection
