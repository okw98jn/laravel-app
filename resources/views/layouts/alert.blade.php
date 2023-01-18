@if(session('flash_success'))
    <div class="col-xs-12">
        <div class="alert alert-success mb-0">
            <strong>{{ session('flash_success') }}</strong>
        </div>
    </div>
@endif

@if(session('flash_danger'))
    <div class="col-xs-12">
        <div class="alert alert-danger mb-0">
            <strong>{{ session('flash_danger') }}</strong>
        </div>
    </div>
@endif
