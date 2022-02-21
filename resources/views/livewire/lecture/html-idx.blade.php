<div>
    @section('content')
        <div class="row">
            <div class="col-sm-4 offset-sm-0">
                <div class="card">
                    <div class="card-header">
                        <b>Lecture</b> | Belajar HTML
                    </div>
                    <div class="card-body">
                        <x-adminlte-button class="btn-xl" label="Primary" theme="primary" icon="fas fa-key"/>
                    </div>
                    <div class="card-footer text-muted">
                        <i>sympozia(c)2021</i>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header offset-sm-0">
                        <b>Card</b> | contoh menambahkan card
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-xs">
                        <i  class="fas fa-key" style="color: brown">
                        </i>    
                            Primary
                        </button>
                    </div>
                    <div class="card-footer text-muted">
                        <i>sympozia(c)2021</i>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header offset-sm-0">
                        <b>Card</b> | contoh menambahkan card
                    </div>
                    <div class="card-body">
                        <a href="http://ee.upi.edu/arsys" target="_blank" rel="noopener noreferrer">ArSys EE UPI</a>
                    </div>
                    <div class="card-footer text-muted">
                        <i>sympozia(c)2021</i>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
