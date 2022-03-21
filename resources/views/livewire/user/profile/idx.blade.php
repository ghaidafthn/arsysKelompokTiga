<div>
    @section('plugins.Select2', true)
    @section('content')
        <div class="row">
            <div class="col-sm-12 offset-sm-0">
                <div class="card">
                    <div class="card-header">
                        <b>User</b> | User profile
                    </div>
                    <div class="card-body">
                        @livewire('user.profile.home')                        
                    </div>
                    <div class="card-footer text-muted">
                        <i>sympozia(c)2021</i>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
