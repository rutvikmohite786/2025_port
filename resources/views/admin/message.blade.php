@if (session('message'))
    <div class="alert alert-success" id="message">
        {{ session('message') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" id="error">
        {{ session('error') }}
    </div>
@endif