<?php
session_start();
require_once "../conexion.php";
$id_user = $_SESSION['idUser'];
$permiso = "ventas";
$sql = mysqli_query($conexion, "SELECT p.*, d.* FROM permisos p INNER JOIN detalle_permisos d ON p.id = d.id_permiso WHERE d.id_usuario = $id_user AND p.nombre = '$permiso'");
$existe = mysqli_fetch_all($sql);
if (empty($existe) && $id_user != 1) {
    header('Location: permisos.php');
}
$query = mysqli_query($conexion, "SELECT v.*, c.idcliente, c.nombre FROM ventas v INNER JOIN cliente c ON v.id_cliente = c.idcliente");
include_once "includes/header.php";
$ano = date('Y');
?>
<div class="card">
    <div class="card-header">
        Historial ventas
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-light" id="tbl">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Total</th>
                        <th>Fecha</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['total']; ?></td>
                            <td><?php echo $row['fecha']; ?></td>
                            <td>
                                <a href="pdf/generar.php?cl=<?php echo $row['id_cliente'] ?>&v=<?php echo $row['id'] ?>" target="_blank" class="btn btn-danger"><i class="fas fa-file-pdf"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <button type="button" class="btn btn-success" class="fas fa-save" data-toggle="modal" data-target="#reporteModal">Generar Reportes</button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="reporteModal" tabindex="-1" role="dialog" aria-labelledby="reporteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reporteModalLabel">Formulario de Reporte</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="excel/generar_excel.php" method="post">
                    <div class="form-group">
                        <label for="fecha">Año</label>
                        <select class="form-control" id="fecha" name="fecha">
                            <option value="<?= $ano - 3 ?>"><?= $ano - 3 ?></option>
                            <option value="<?= $ano - 2 ?>"><?= $ano - 2 ?></option>
                            <option value="<?= $ano - 1 ?>"><?= $ano - 1 ?></option>
                            <option value="<?= $ano ?>"><?= $ano ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fecha">mes</label>
                        <select class="form-control" id="fechames" name="fechames">
                            <option value="%">Todos</option>
                            <option value="01">Enero</option>
                            <option value="02">Febrero</option>
                            <option value="03">Marzo</option>
                            <option value="04">Abril</option>
                            <option value="05">Mayo</option>
                            <option value="06">Junio</option>
                            <option value="07">Julio</option>
                            <option value="08">Agosto</option>
                            <option value="09">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Generar reporte
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>