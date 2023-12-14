<?php
$titulo = "1. ISCC Laboratorio Final - 2do Llamado";
// Completa tus datos
$nombre = "COMPLETAR";
$apellido = "COMPLETAR";

?>
<!DOCTYPE html>
	<!-- 2. Corregí y completá acá -->
	<html lang="COMPLETAR">
<head>
	<!-- Completá y corregí acá -->
	<meta charset="COMPLETAR">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- poné un archivo CSS que cambie el color de fondo a celestito o amarillito -->
	<COMPLETAR><!-- Poné acá el title usando eco de PHP --></title>
</COMPLETAR>

<body>
	<main class="container mt-3">
		<h1><!-- COMPLETAR acá el título usando eco de PHP --></h1>

		<p>3. ¿Cómo hago para hacer todos estos echo en una sóla línea (concatenar)?</p>
		<!-- Modifica el código -->
		<code>
			<?php
				echo "<tr>";
					echo "<td>";
						echo $apellido;
						echo " ";
						echo $nombre;
					echo "</td>";
				echo "<tr>";
			?>
			</code>

		<p>4. ¿Cuál de las siguientes son declaraciones preparadas en PHP?</p>
		<!-- Borra las opciones incorrectas: -->
		<ul>
			<li> a) INSERT INTO clientes (nombre, correo) VALUES (?, ?)</li>
			<li> b) SELECT * FROM productos WHERE categoria = 'Electrónica'</li>
			<li> c) SELECT * FROM users WHERE email = ?</li>
			<li> d) UPDATE empleados SET salario = salario * 1.1 WHERE antiguedad > 5</li>
			<li> e) INSERT INTO usuarios (nombre, apellido) VALUES ('Juan', 'Pérez')</li>
			<li> f) SELECT * FROM users WHERE email = $email</li>
		</ul>

		<p>5. ¿Cuál es la función del siguiente bloque de código?</p>
		<code>
			<pre>
	if (!empty($id) && !empty($nuevo_apellido) && !empty($nuevo_nombre) && !empty($nuevo_email)) {
		// ...
	}
			</pre>
		</code>
		<!-- Borra las opciones incorrectas: -->
		<ul>
			<li> a) Comprobar que las variables son de tipo string. </li>
			<li> b) Verificar si la base de datos está vacía. </li>
			<li> c) Comprobar si el ID del usuario existe. </li>
			<li> d) Verificar si el usuario completó todo el formulario. </li>
		</ul>

		<p>6. Este código está roto. Completa este código: </p>
		<code>
			<pre>
	<div class="container my-2 shadow">
		<div class="row justify-content-center align-items-center g-2">
			<div class="col-COMPLETAR">
				<h2>Eliminar Usuario</h2>
				<form COMPLETAR="COMPLETAR.php" COMPLETAR="COMPLETAR" class="row g-3 mb-3">
					<div class="col border">
						<label for="COMPLETAR" class="form-label">ID de Usuario:</label>
						<input type="number" COMPLETAR="id" id="COMPLETAR" class="form-control" value="COMPLETAR" required readonly>
					</div>
					<input type="submit" COMPLETAR="delete" value="COMPLETAR" class="btn btn-danger">
				</form>
			</div>
		</div>
	</div>
</pre>
		</code>

		<p>7. Este código está incompleto. Completa este código que actualiza la tabla clientes:</p>
		<code>
			<pre>
		$stmt = $conexion->prepare("UPDATE COMPLETAR SET apellido=COMPLETAR, nombre=COMPLETAR, COMPLETAR=COMPLETAR  WHERE COMPLETAR=COMPLETAR");
		$stmt->bind_param("COMPLETAR", $nuevo_apellido, COMPLETAR, $nuevo_email, $id);
	</pre>
		</code>

		<p>8. Sólo uno de estos códigos está correcto:</p>
		<!-- Borra las opciones incorrectas: -->
		<ul>
			<li>a) <code>$nuevo_apellido = $_POST["apellido_nuevo"];</code></li>
			<li>b) <code>$nuevo_apellido = $_POST["nuevo_apellido'];</code></li>
			<li>c) <code>$nuevo_apellido = _POST["nuevo_apellido"];</code></li>
			<li>d) <code>$nuevo_apellido = $_POST["nuevo_apellido"];</code></li>
			<li>e) <code>$nuevo_apellido = $_POST['nuevo_apellido'];</code></li>
			<li>f) <code>$nuevo_apellido = $_POST[nuevo_apellido];</code></li>
		</ul>

		
	</main>
	<footer>
		<!-- 10. Poné links a facebook e instagram aquí. Mejor si son imágenes o fontawesome.com -->
		10. FACEBOOK, INSTAGRAM 
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
	</script>
</body>

</html>