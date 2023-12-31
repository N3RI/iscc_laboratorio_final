<?php
include("config/config.php");

$id = "";
$id_eliminar = "";
$nuevo_apellido = "";
$nuevo_nombre = "";
$nuevo_email = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["create"])) {
	$apellido = $_POST["apellido"];
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];

	if (!empty($nombre) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

		$stmt = $conexion->prepare("INSERT INTO usuarios (apellido, nombre, email) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $apellido, $nombre, $email);

		if ($stmt->execute()) {
			echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
					Registro creado con éxito.
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					</div>";
		} else {
			echo "Error: " . $stmt->error;
		}

		$stmt->close();
	} else {
		echo "Datos de entrada inválidos.";
	}
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["actualizar"])) {
	$id = $_POST["id"];

	$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE id=?");
	$stmt->bind_param("i", $id);

	if ($stmt->execute()) {
		$stmt->bind_result($id, $nuevo_apellido, $nuevo_nombre, $nuevo_email);
		while ($stmt->fetch()) {
		}
	} else {
		echo "Error: " . $stmt->error;
	}
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {

	$id = $_POST["id"];
	$nuevo_apellido = $_POST["nuevo_apellido"];
	$nuevo_nombre = $_POST["nuevo_nombre"];
	$nuevo_email = $_POST["nuevo_email"];

	if (!empty($id) && !empty($nuevo_apellido) && !empty($nuevo_nombre) && !empty($nuevo_email)) {

		$stmt = $conexion->prepare("UPDATE usuarios SET apellido=?, nombre=?, email=? WHERE id=?");
		$stmt->bind_param("sssi", $nuevo_apellido, $nuevo_nombre, $nuevo_email, $id);

		if ($stmt->execute()) {
			echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
					Registro actualizado con éxito.
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					</div>";
		} else {
			echo "Error: " . $stmt->error;
		}

		$stmt->close();
	} else {
		echo "Datos de entrada inválidos.";
	}
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["eliminar"])) {
	$id_eliminar = trim($_POST["id"]);
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete"])) {

	$id = $_POST["id"];

	if (!empty($id)) {

		$stmt = $conexion->prepare("DELETE FROM usuarios WHERE id=?");
		$stmt->bind_param("i", $id);

		if ($stmt->execute()) {
			echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
					Registro eliminado con éxito.
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					</div>";
		} else {
			echo "Error: " . $stmt->error;
		}

		$stmt->close();
	} else {
		echo "Datos de entrada inválidos.";
	}
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
	<title>CRUD PHP EXPLICADO</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css">
	<script src="https://kit.fontawesome.com/284989c7a4.js" crossorigin="anonymous"></script>
</head>

<body>
	<header>
	</header>
	<main>
		<div class="container">
			<div class="row justify-content-center align-items-center g-2">
				<div class="col">
					<h1>CRUD PHP EXPLICADO</h1>
				</div>
			</div>
		</div>

		<div class="container my-2 shadow">
			<div class="row justify-content-center align-items-center g-2">
				<div class="col">

					<h2>Crear Usuario</h2>
					<form action="crud.php" method="post" class="row g-3 mb-3">

						<div class="col">
							<label for="apellido" class="form-label">Apellido:</label>
							<input type="text" name="apellido" id="apellido" class="form-control" required>
						</div>
						<div class="col">
							<label for="nombre" class="form-label">Nombre:</label>
							<input type="text" name="nombre" id="nombre" class="form-control" required>
						</div>
						<div class="col">
							<label for="email" class="form-label">Correo Electrónico:</label>
							<input type="email" name="email" id="email" class="form-control" required>
						</div>
						<input type="submit" name="create" value="Create" class="btn btn-success">
					</form>
				</div>
			</div>
		</div>

		<div class="container my-2 shadow">
			<div class="row justify-content-center align-items-center g-2">
				<div class="col">
					<h2>Leer Usuarios</h2>

					<div class="table-responsive">
						<table class="table table-light">
							<thead>
								<tr>
									<th scope="col">id</th>
									<th scope="col">Apellido</th>
									<th scope="col">Nombre</th>
									<th scope="col">Email</th>
									<th scope="col">Acción</th>
								</tr>
							</thead>
							<tbody>
								<?php

								$consulta = "SELECT * FROM usuarios";
								$resultado = $conexion->query($consulta);

								if ($resultado->num_rows > 0) {

									while ($fila = $resultado->fetch_assoc()) {
										echo "<tr class=''>";
										echo "<td>" . $fila["id"] . "</td>";
										echo "<td>" . $fila["apellido"] . "</td>";
										echo "<td>" . $fila["nombre"] . "</td>";
										echo "<td>" . $fila["email"] . "</td>";
										echo "<td>";
										echo "<form action='crud.php' method='post'>";
										echo "<input type='submit' name='actualizar' value='Actualizar' class='btn btn-primary'>";
										echo "<input type='submit' name='eliminar' value='Eliminar' class='btn btn-danger mx-3'>";
										echo "<input type='hidden' name='id' value='" . $fila["id"] . "'>";
										echo "</form>";
										echo "</td>";
										echo "</tr>";
									}
								} else {
									echo "No se encontraron registros.";
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="container mb-2 shadow">
			<div class="row justify-content-center align-items-center g-2">
				<div class="col">
					<h2>Actualizar Usuario</h2>
					<form action="crud.php" method="post" class="row g-3 mb-3">
						<div class="col">
							<label for="id_update" class="form-label">ID de Usuario:</label>
							<input type="text" name="id" id="id_update" class="form-control" value="<?php echo $id; ?>" required readonly>
						</div>
						<div class="col">
							<label for="nuevo_apellido" class="form-label">Nuevo Apellido:</label>
							<input type="text" name="nuevo_apellido" id="nuevo_apellido" class="form-control" value="<?php echo $nuevo_apellido; ?>" required>
						</div>
						<div class="col">
							<label for="nuevo_nombre" class="form-label">Nuevo Nombre:</label>
							<input type="text" name="nuevo_nombre" id="nuevo_nombre" class="form-control" value="<?php echo $nuevo_nombre; ?>" required>
						</div>
						<div class="col">
							<label for="nuevo_email" class="form-label">Nuevo Email:</label>
							<input type="text" name="nuevo_email" id="nuevo_email" class="form-control" value="<?php echo $nuevo_email; ?>" required>
						</div>
						<input type="submit" name="update" value="Update" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>

		<div class="container my-2 shadow">
			<div class="row justify-content-center align-items-center g-2">
				<div class="col">
					<h2>Eliminar Usuario</h2>
					<form action="crud.php" method="post" class="row g-3 mb-3">
						<div class="col">
							<label for="id_delete" class="form-label">ID de Usuario:</label>
							<input type="number" name="id" id="id_delete" class="form-control" value="<?php echo $id_eliminar; ?>" required readonly>
						</div>
						<input type="submit" name="delete" value="Delete" class="btn btn-danger">
					</form>
				</div>
			</div>
		</div>

	</main>
	<footer>
		<!-- place footer here -->
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>

<?php
$conexion->close();
?>