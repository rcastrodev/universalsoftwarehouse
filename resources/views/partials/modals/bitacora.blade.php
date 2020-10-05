<!-- Large modal -->
<div class="modal fade bd-example-modal-lg bitacora" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-5">
            <img src="{{ asset('img/kuriacoop.png') }}" alt="logo" class="logoModal">
            <h4 class="text-center mb-4">Bitácora</h4>
            <form action="" class="row justify-content-between align-items-center">
                <div class="form-group col-sm-12 col-md-2">
                    <label for="referencia">Referencia</label>
                    <select class="form-control" id="referencia">
                        <option hidden="" selected="">Selecciona Referencia</option>
                        <option>Implementación</option>
                        <option>Garantía</option>
                        <option value="3">Mantenimiento</option>
                        <option>Requerimiento</option>
                        <option>Licitación</option>
                    </select>                
                </div>
                <div class="form-group col-sm-12 col-md-2 d-none" id="contentServicios">
                    <label for="servicios">Servicios</label>
                    <select class="form-control" id="servicios">
                        <option hidden="" selected="">Selecciona un servicio</option>
                        <option>Salvado SV1</option>
                        <option>Salvado SV2</option>
                        <option>Recuperación</option>
                        <option>Cierre Diario</option>
                        <option>Cirre Mensual - FM</option>
                        <option>Cierre Contable</option>
                    </select>                
                </div>
                <div class="form-group col-sm-12 col-md-2">
                    <label for="ambientes">Ambientes</label>
                    <select class="form-control" id="ambientes">
                        <option hidden="" selected="">Selecciona Ambiente</option>
                        <option>Producción</option>
                        <option>Testing</option>
                        <option>Desarrollo</option>
                    </select>                
                </div>
                <div class="form-group col-sm-12 col-md-2">
                    <label for="start">Inicio:</label>
                    <input type="date" id="start" name="inicio" class="form-control">            
                </div>
                <div class="form-group col-sm-12 col-md-2">
                    <label for="start">Final:</label>
                    <input type="date" id="start" name="final" class="form-control">            
                </div>
                <div class="form-group col-sm-12 col-md-2 mt-4">
                    <button type="submit" class="btn btn-primary d-block w-100">Consultar</button>
                </div>
            </form>
            <div id="resultado-bitacora">
                <table class="table table-striped table-hover table-bordered" id="tabla_bitacora">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Empresa</th>
                            <th>Usuario</th>
                            <th>Ambiente</th>
                            <th>Detalle del Caso</th>
                            <th>Observaciones</th>
                            <th>Modulo</th>
                            <th>Sub Modulo</th>
                            <th>Referencia</th>
                            <th>Responsable</th>
                            <th>Afectación de Servicio</th>
                            <th>Tiempo de Asistencia</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>