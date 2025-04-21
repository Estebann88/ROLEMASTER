<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

include ('../../app/controllers/niveles/listado_de_niveles.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Registro de nuevo grado</h1>
            </div>
            <br>
            <div class="row">

                <div class="col-md-6">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Llene los datos</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?=APP_URL;?>/app/controllers/grados/create.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Nivel</label>
                                            <select name="nivel_id" id="" class="form-control">
                                                <?php
                                                foreach ($niveles as $nivele){
                                                  ?>
                                                    <option value="<?=$nivele['id_nivel'];?>"><?=$nivele['nivel']."-".$nivele['turno'];?></option>
                                                    <?php

                                                   }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Curso</label>
                                            <select name="curso" id="" class="form-control">
                                                <option value="TECNICO Eléctrica y electrónica">TECNICO Eléctrica y electrónica</option>
                                                <option value="TECNICO(TIC).">TECNICO(TIC)</option>
                                                <option value="TECNICO en auxiliar de veterinaria">TECNICO en auxiliar de veterinaria</option>
                                                <option value="TECNICO Personal de mercadeo y publicidad">TECNICO Personal de mercadeo y publicidad</option>
                                                <option value="TECNOLOGO en Ciencia de Datos">TECNOLOGO en Ciencia de Datos</option>
                                                <option value="TECNOLOGO en Ingeniería de Software">TECNOLOGO en Ingeniería de Software</option>
                                                <option value="TECNOLOGO en Ciberseguridad">TECNOLOGO en Ciberseguridad</option>
                                                <option value="TECNOLOGO en Desarrollo Web">TECNOLOGO en Desarrollo Web</option>
                                                <option value="PROFESIONAL Abogacía">PROFESIONAL Abogacía</option>
                                                <option value="PROFESIONAL Ciencias Ambientales">PROFESIONAL Ciencias Ambientales</option>
                                                <option value="PROFESIONAL Redes y Comunicaciones">PROFESIONAL Redes y Comunicaciones</option>
                                                <option value="PROFESIONAL Negocios Internacionales">PROFESIONAL Negocios Internacionales</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Grupo</label>
                                            <select name="grupo" id="" class="form-control">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                            <a href="<?=APP_URL;?>/admin/grados " class="btn btn-secondary">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

include ('../../admin/layout/parte2.php');
include ('../../layout/mensajes.php');

?>
