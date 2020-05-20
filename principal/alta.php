<?php include '../includes/header.php'; ?>
<?php include '../includes/sesion.php'; ?>

<div class="container center">
    <div class="row" style="margin:0,auto; width:75%;">
        <h4 class="header">Postea tu código</h4>
        <div class="card horizontal">
          
            <div class="col s5 card-stacked">
                <div class="card-content">
                    <!-- Formulario del login -->
                    <form id="altaPost" autocomplete="off" @submit.prevent="alta">
                        <input class="form-control" type="text" name="titulo" placeholder="Título">
                        <textarea name="codigo" class="materialize-textarea" cols="30" rows="10" placeholder="Agregar el código"></textarea>
                        <textarea name="descripcion" class="materialize-textarea" cols="30" rows="10" placeholder="Descripción"></textarea>
                        <select name="categoria" class="browser-default" requiered>
                            <option value="" disabled selected>Seleccionar la categoría</option>
                            <option value="php">PHP</option>
                            <option value="vue">Vue</option>
                            <option value="java">Java</option>
                            <option value="python">Python</option>
                        </select>
                        <br>
                        <button class="btn waves-effect waves-light" value="Guardar" type="submit">Guardar
                        <i class="material-icons right">save</i>
                        </button> 

                        <br />

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
