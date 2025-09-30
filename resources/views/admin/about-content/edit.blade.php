@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit About Content</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('index.about-content') }}">About Content</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit About Content</h3>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form action="{{ route('about-content.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $aboutContent->id }}">
                            
                            <div class="form-group">
                                <label for="section_type">Section Type</label>
                                <select class="form-control" id="section_type" name="section_type" required>
                                    <option value="why_work_with_me" {{ $aboutContent->section_type == 'why_work_with_me' ? 'selected' : '' }}>Why Work With Me</option>
                                    <option value="about_myself" {{ $aboutContent->section_type == 'about_myself' ? 'selected' : '' }}>About Myself</option>
                                    <option value="cta" {{ $aboutContent->section_type == 'cta' ? 'selected' : '' }}>CTA Section</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $aboutContent->title }}" required>
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $aboutContent->content }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="button_text">Button Text (for CTA section)</label>
                                <input type="text" class="form-control" id="button_text" name="button_text" value="{{ $aboutContent->button_text }}">
                            </div>

                            <div class="form-group">
                                <label for="button_link">Button Link (for CTA section)</label>
                                <input type="text" class="form-control" id="button_link" name="button_link" value="{{ $aboutContent->button_link }}">
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ $aboutContent->is_active ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">Active</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Content</button>
                                <a href="{{ route('index.about-content') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
