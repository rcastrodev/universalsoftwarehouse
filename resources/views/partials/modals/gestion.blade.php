<!-- Large modal -->
<div class="modal fade bd-example-modal-lg gestion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-5">
        <h4 class="text-center mb-4">Gestión</h4>
        <form action="" class="row justify-content-between align-items-center">
            <div class="form-group col-sm-12 col-md-4">
                <label for="responsables">Responsables</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option hidden selected>Selecciona un responsable</option>
                    <option>Usuario 1</option>
                    <option>Usuario 2</option>
                    <option>Usuario 3</option>
                    <option>Usuario 4</option>
                    <option>Usuario 5</option>
                </select>                
            </div>
            <div class="form-group col-sm-12 col-md-3">
                <label for="start">Inicio:</label>
                <input type="date" id="start" name="inicio" class="form-control">            
            </div>
            <div class="form-group col-sm-12 col-md-3">
                <label for="start">Final:</label>
                <input type="date" id="start" name="final" class="form-control">            
            </div>
            <div class="form-group col-sm-12 col-md-2 mt-4">
                <button type="submit" class="btn btn-primary d-block w-100">Consultar</button>
            </div>
        </form>
    </div>
  </div>
</div>