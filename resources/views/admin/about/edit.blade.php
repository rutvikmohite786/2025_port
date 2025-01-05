@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('about.update')}}" id="aboutform">
 <input  value="{{$data->id}}" type="hidden" name="id">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input name="title" type="text" value="{{$data->title}}" class="form-control" id="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="for_use">Please select</label>
    <select class="form-control" name="for_use">
      @foreach(config('key.foruse') as $for_use)
      <option value="{{$for_use}}"  {{ $for_use == $data->for_use ? 'selected' : '' }} >{{$for_use}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="title">Description</label>
    <textarea name="desc" class="form-control" value="" id="exampleFormControlTextarea1" rows="3">{{$data->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/about.js')}}"></script>

@endsection
