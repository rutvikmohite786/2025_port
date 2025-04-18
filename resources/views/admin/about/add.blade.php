@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('about.store')}}" id="aboutform">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="for_use">Please select</label>
    <select class="form-control" name="for_use">
      @foreach(config('key.foruse') as $data)
      <option value="{{$data}}">{{$data}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="title">Description</label>
    <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  <a type="button" href="javascript:void(0);" onclick="window.history.back();" class="btn btn-success">Back</a>

</form>
</div> 
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/about.js')}}"></script>
@endsection
