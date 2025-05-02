@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('resume.update')}}" enctype="multipart/form-data" id="resumeform">
<input type="hidden" value="{{$data->id}}" name="id">
  @csrf
   <div class="form-group">
    {{ $data->resume_path }}
    <label for="resumeifle">Current file</label>
    <input type="text" class="form-control" value="{{$data->resume_path}}" readonly>
  </div>
   <div class="form-group">
    <label for="file">Select New image</label>
    <input type="file" class="form-control-file" id="file" name="file">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/resume.js')}}"></script>
@endsection