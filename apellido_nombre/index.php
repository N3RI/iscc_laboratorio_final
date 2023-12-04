<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>ISCC Laboratorio Final</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
	<main class="container mt-3">
		<p>1. ¿Cuál de las siguientes son declaraciones preparadas en PHP?</p>
		<!-- Borra las opciones incorrectas: -->
		<ul>
			<li> a) SELECT * FROM users WHERE email = ?</li>
			<li> b) SELECT * FROM users WHERE email = $email</li>
			<li> c) INSERT INTO usuarios (nombre, apellido) VALUES ('Juan', 'Pérez')</li>
			<li> d) INSERT INTO clientes (nombre, correo) VALUES (?, ?)</li>
			<li> e) SELECT * FROM productos WHERE categoria = 'Electrónica'</li>
			<li> f) UPDATE empleados SET salario = salario * 1.1 WHERE antiguedad > 5</li>
		</ul>

		<p>2. ¿Por qué es preferible utilizar 'Declaraciones Preparadas' en operaciones de base de datos en lugar de
			concatenar directamente los valores en las consultas SQL?</p>
		<!-- Borra las opciones incorrectas: -->
		<ul>
			<li> a) Porque es más lindo. </li>
			<li> b) Porque evita errores de sintaxis SQL. </li>
			<li> c) Porque es una práctica recomendada por PHP. </li>
			<li> d) Porque mejora la seguridad y evita hackeos. </li>
			<li> e) Porque permite consultas SQL más complejas. </li>
		</ul>

		<p>3. En el formulario de creación (Create), ¿por qué se utiliza la función <code>filter_var($email, FILTER_VALIDATE_EMAIL)?</code></p>
		<!-- Borra las opciones incorrectas: -->
		<ul>
			<li> a) Para garantizar que el correo electrónico no esté vacío. </li>
			<li> b) Para validar que el correo electrónico tenga una @. </li>
			<li> c) Para evitar inyecciones de código SQL. </li>
			<li> d) Para encriptar la dirección de correo electrónico. </li>
		</ul>

		<p>4. ¿Cuál es la función del siguiente bloque de código?</p>
		<code>
			<pre>
	if (!empty($id) && !empty($nuevo_apellido) && !empty($nuevo_nombre) && !empty($nuevo_email)) {
		// ...
	}
			</pre>
		</code>
		<!-- Borra las opciones incorrectas: -->
		<ul>
			<li> a) Validar la entrada de datos antes de una operación de actualización.</li>
			<li> b) Verificar si la base de datos está vacía. </li>
			<li> c) Comprobar si el ID del usuario existe. </li>
			<li> d) Verificar si el usuario completó el formulario. </li>
			<li> e) Comprobar que las variables son de tipo string. </li>
		</ul>

		<p>5. ¿Por qué se utiliza el atributo readonly en el campo de entrada del ID en el formulario de actualización?</p>
		<!-- Borra las opciones incorrectas: -->
		<ul>
			<li> a) Para ocultar el campo. </li>
			<li> b) Para evitar que el usuario modifique el ID. </li>
			<li> c) Para permitir la edición del ID. </li>
			<li> d) Para que no se mande ese atributo por POST. </li>
		</ul>

		<p>6. Crea un archivo css (no bootstrap) que cambie el color de fondo y el color de borde de estos cuadros a rojo, amarillo y azul y borde negro:</p>
		<div class="container text-center border mb-3">
			<div class="row">
				<div class="col border">
					1 de 3
				</div>
				<div class="col border">
					2 de 3
				</div>
				<div class="col border">
					3 de 3
				</div>
			</div>
		</div>

		<p>7. Este código está roto. Completa este código: </p>
		<code>
			<pre>
	<div class="container my-2 shadow">
		<div class="row justify-content-center align-items-center g-2">
			<div class="col-6">
				<h2>Eliminar Usuario</h2>
				<form ="index.php" ="" class="row g-3 mb-3">
					<div class="col border">
						<label for="" class="form-label">ID de Usuario:</label>
						<input type="number" ="id" id="" class="form-control" value="" required readonly>
					</div>
					<input type="submit" ="delete" value="" class="btn btn-danger">
				</form>
			</div>
		</div>
	</div>
</pre>
		</code>

		<p>8. Este código está incompleto. Completa este código que actualiza la tabla clientes:</p>
		<code>
			<pre>
		$stmt = $conexion->prepare("UPDATE SET apellido= , nombre= , email=  WHERE id= ");
		$stmt->bind_param("    ", $nuevo_apellido,    $nuevo_email, $id);
	</pre>
		</code>

		<p>9. Sólo uno de estos códigos está correcto:</p>
		<!-- Borra las opciones incorrectas: -->
		<ul>
			<li>a) <code>$nuevo_apellido = $_POST["apellido_nuevo"];</code></li>
			<li>b) <code>$nuevo_apellido = $_POST["nuevo_apellido'];</code></li>
			<li>c) <code>$nuevo_apellido = _POST["nuevo_apellido"];</code></li>
			<li>d) <code>$nuevo_apellido = $_POST["nuevo_apellido"];</code></li>
			<li>e) <code>$nuevo_apellido = $_POST['nuevo_apellido'];</code></li>
			<li>f) <code>$nuevo_apellido = $_POST[nuevo_apellido];</code></li>
		</ul>

		<p>10. ¿Cómo hago para hacer todos estos echo en una sóla línea?</p>
		<!-- Modifica el código -->
		<code>
			<pre>
	echo "<tr>";
	echo "<td>";
	echo $fila["Nombre"];
	echo " ";
	echo $fila["Apellido"];
	echo "</td>";
	echo "<tr>";
	</pre>
		</code>
	</main>
	<footer>

	</footer>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
	</script>
</body>

</html>