<div id="modal-mantenimiento" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="post" id="producto_form">
                <div class="modal-header pd-y-20 pd-x-25">
                    <h4 class="modal-title" id="mdl-titulo"></h4>
                </div>
                <div class="modal-body pd-25">
                    <input type="hidden" id="prod_id" name="prod_id">

                    <div class="form-group">
                        <label class="form-label" for="cat_id">Categoría</label>
                        <select class="form-control select2" id="cat_id" name="cat_id">
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="prod_name">Nombre</label>
                        <input type="text" class="form-control" id="prod_name" name="prod_name" placeholder="Ingrese Nombre" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="prod_desc">Descripción</label>
                        <textarea type="text" rows="3" class="form-control" id="prod_desc" name="prod_desc" placeholder="Ingrese Descripción" required></textarea>
                    </div>
                    
                    <!-- <div class="form-group">
                        <label class="form-label" for="prod_cant">Cantidad</label>
                        <input type="number" class="form-control" id="prod_cant" name="prod_cant" placeholder="Ingrese Cantidad" required>
                    </div> -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>