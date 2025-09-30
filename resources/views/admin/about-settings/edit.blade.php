@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit About Setting</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('index.about-settings') }}">About Settings</a></li>
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
                        <h3 class="card-title">Edit About Setting</h3>
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

                        <form action="{{ route('about-settings.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $aboutSetting->id }}">
                            
                            <div class="form-group">
                                <label for="setting_key">Setting Key</label>
                                <input type="text" class="form-control" id="setting_key" value="{{ $aboutSetting->setting_key }}" readonly>
                                <small class="form-text text-muted">This field cannot be changed.</small>
                            </div>

                            <div class="form-group">
                                <label for="setting_value">Setting Value</label>
                                @if($aboutSetting->setting_type == 'textarea')
                                    <textarea class="form-control" id="setting_value" name="setting_value" rows="4" required>{{ $aboutSetting->setting_value }}</textarea>
                                @else
                                    <input type="text" class="form-control" id="setting_value" name="setting_value" value="{{ $aboutSetting->setting_value }}" required>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="setting_type">Setting Type</label>
                                <input type="text" class="form-control" id="setting_type" value="{{ ucfirst($aboutSetting->setting_type) }}" readonly>
                                <small class="form-text text-muted">This field cannot be changed.</small>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" value="{{ $aboutSetting->description }}" readonly>
                                <small class="form-text text-muted">This field cannot be changed.</small>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ $aboutSetting->is_active ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">Active</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Setting</button>
                                <a href="{{ route('index.about-settings') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
