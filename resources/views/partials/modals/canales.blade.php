<!-- Large modal -->
<div class="modal fade canales" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
        <img src="{{ asset('img/kuriacoop.png') }}" alt="logo" class="logoModal">
        <div class="card">
            <div class="card-header mb-3">
                <h3 class="card-title text-center">Canales</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row justify-content-around">
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-6 pointer" id="contentATM" data-dismiss="modal">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-sitemap"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">ATM</span>
                                <span class="info-box-number">0<small>%</small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>
                    <div class="col-12 col-sm-6 col-md-6 pointer deshabilitado" id="contentPOS">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="far fa-credit-card"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">POS</span>
                                <span class="info-box-number">0<small>%</small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.card-body -->
          </div>
      </div>
    </div>
  </div>