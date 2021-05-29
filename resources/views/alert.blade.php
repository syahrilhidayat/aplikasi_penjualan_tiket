@if (session()->has('success'))
    <div class="container">
        <div class="col-md-8">
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        </div>
    </div>
@endif