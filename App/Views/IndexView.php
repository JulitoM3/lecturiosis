<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Gestión de Usuarios</h1>

        <div class="d-flex justify-content-between mb-3">
            <div class="input-group w-50">
                <input type="text" class="form-control" id="searchInput"
                    placeholder="Buscar usuario por nombre o correo">
                <button class="btn btn-outline-secondary" onclick="buscarUsuario()">Buscar</button>
            </div>
            <a href="crear_usuario.php" class="btn btn-primary">Crear Usuario</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="tablaUsuarios">
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['id']) ?></td>
                            <td><?= htmlspecialchars($user['name']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td>
                                <a href="eliminar_usuario.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro que deseas eliminar este usuario?')">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>