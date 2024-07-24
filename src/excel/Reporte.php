<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Reporte de Ventas</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Generar Reporte de Ventas</h2>
        <!-- Botón para abrir el modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reporteModal">
            Abrir Formulario
        </button>
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
                    <form action="generar_excel.php" method="post">
                        <div class="form-group">
                            <label for="fecha">Año</label>
                            <select class="form-control" id="fecha" name="fecha">
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_usuario">Cliente</label>
                            <select class="form-control" id="id_usuario" name="id_usuario">
                                <option value="1">1</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Generar reporte
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>