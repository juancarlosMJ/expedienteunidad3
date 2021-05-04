<?php 
	$conexion=mysqli_connect('localhost','root','','expedientemedico');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatable prueba 1</title>
    <link rel="stylesheet" href="librerias/bootstrap.css">
    <link rel="stylesheet" href="librerias/dataTables.bootstrap4.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h2>Ejemplo con datatable</h2>
            <table id="Objetivo" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                        <th>nombre</th>
                        <th>apellido_paterno</th>
                        <th>apellido_materno</th>
                        <th>telefono</th>
                        <th>email</th>
                        <th>fecha_de_nacimineto</th>
                        <th>sexo</th>
                        <th>nacionalidad </th>                       
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
            <?php 
		$sql="SELECT * from t_personas";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		?>
<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido_paterno'] ?></td>
            <td><?php echo $mostrar['apellido_materno'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['email'] ?></td>
            <td><?php echo $mostrar['fecha de nacimiento'] ?></td>
            <td><?php echo $mostrar['sexo'] ?></td>
            <td><?php echo $mostrar['nacionalidad'] ?></td>
            
			</tr>
	<?php 
	}
	?>              </tbody>
                    <tfoot>
                        <tr>
                        <th>nombre</th>
                        <th>apellido_paterno</th>
                        <th>apellido_materno</th>
                        <th>telefono</th>
                        <th>email</th>
                        <th>fecha_de_nacimineto</th>
                        <th>sexo</th>
                        <th>nacionalidad</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script src="librerias/jquery-3.5.1.js"></script>
    <script src="librerias/jquery.dataTables.min.js"></script>
    <script src="librerias/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#Objetivo').DataTable();
        });
    </script>
</body>
</html>