@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('resume.store')}}" enctype="multipart/form-data" id="resumeform">
  @csrf
   <div class="form-group">
    <label for="file">Example file input</label>
    <input type="file" class="form-control-file" id="file" name="file">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/resume.js')}}"></script>
<script src="{{asset('js/page.js')}}"></script>
@endsection