<!-- Large modal -->
<div class="modal fade bd-example-modal-lg generico" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
        <img src="{{ asset('img/kuriacoop.png') }}" alt="logo" class="logoModal">
          <h4 class="text-center mb-4" id="tituloGenerico"></h4>
          <form action="" class="row justify-content-between align-items-center" id="form-generico">
              @csrf
              <div class="form-group col-sm-12 col-md-4">
                  <label for="start">Inicio:</label>
                  <input type="date" id="start" name="inicio" class="form-control">            
              </div>
              <div class="form-group col-sm-12 col-md-4">
                  <label for="start">Final:</label>
                  <input type="date" id="start" name="final" class="form-control">            
              </div>
              <div class="form-group col-sm-12 col-md-4 mt-4">
                  <button type="submit" class="btn btn-primary d-block w-100">Consultar</button>
              </div>
          </form>
          <div id="resultado"></div>
      </div>
    </div>
  </div>