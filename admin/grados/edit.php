<?php
$id_grado = $_GET['id'];
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

include ('../../app/controllers/grados/datos_grados.php');
include ('../../app/controllers/niveles/listado_de_niveles.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Modificar el grado <?=$curso;?></h1>
            </div>
            <br>
            <div class="row">

                <div class="col-md-6">
                    <div class="card card-outline card-succes">
                        <div class="card-header">
                            <h3 class="card-title">Llene los datos</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?=APP_URL;?>/app/controllers/grados/create.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Nivel</label>
                                            <select name="nivel_id" id="nivel_id" class="form-control" onchange="actualizarCursos()">
                                                <?php
                                                foreach ($niveles as $nivele){
                                                  ?>
                                                    <option value="<?=$nivele['id_nivel'];?>" data-nivel="<?=$nivele['nivel'];?>" <?php if($nivele['id_nivel'] == $nivel_id) echo 'selected'; ?>><?=$nivele['nivel']."-".$nivele['turno'];?></option>
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
                                            <select name="curso" id="curso" class="form-control">
                                                <!-- Opciones serán cargadas por JS -->
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
                                            <button type="submit" class="btn btn-success">Modificar</button>
                                            <a href="<?=APP_URL;?>/admin/grados" class="btn btn-secondary">Volver</a>
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

<script>
const cursosPorNivel = {
    'TECNICO': [
        'TECNICO Eléctrica y electrónica',
        'TECNICO(TIC).',
        'TECNICO en auxiliar de veterinaria',
        'TECNICO Personal de mercadeo y publicidad'
    ],
    'TECNOLOGO': [
        'TECNOLOGO en Ciencia de Datos',
        'TECNOLOGO en Ingeniería de Software',
        'TECNOLOGO en Ciberseguridad',
        'TECNOLOGO en Desarrollo Web'
    ],
    'PROFESIONAL': [
        'PROFESIONAL Abogacía',
        'PROFESIONAL Ciencias Ambientales',
        'PROFESIONAL Redes y Comunicaciones',
        'PROFESIONAL Negocios Internacionales'
    ]
};

function actualizarCursos() {
    const nivelSelect = document.getElementById('nivel_id');
    const cursoSelect = document.getElementById('curso');
    const selectedOption = nivelSelect.options[nivelSelect.selectedIndex];
    const nivel = selectedOption.getAttribute('data-nivel');
    const cursoActual = "<?=isset($curso) ? $curso : ''?>";
    // Limpiar opciones actuales
    cursoSelect.innerHTML = '';
    if (cursosPorNivel[nivel]) {
        cursosPorNivel[nivel].forEach(curso => {
            const opt = document.createElement('option');
            opt.value = curso;
            opt.textContent = curso;
            if (curso === cursoActual) opt.selected = true;
            cursoSelect.appendChild(opt);
        });
    }
}
// Inicializar al cargar
window.onload = actualizarCursos;
</script>
