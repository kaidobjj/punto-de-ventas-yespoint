<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta</title>
</head>
<body>
    <form action="generar_excel.php" method="post">
        <label>Ano</label>
        <select id="fecha" name="fecha">
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<br/>
        </select>
        <label>cliente</label>
        <select id="id_usuario" name="id_usuario">
<option value="1">1</option>
<option value="9">9</option>
<br/>


        </select>
        <button type="submit">generar reporte</button>
    </form>
</body>
</html>