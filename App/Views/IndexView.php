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

        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
            <form action="./../Actions/SearchUser.php" method="POST" class="d-flex w-100 w-md-50 me-md-3 mb-2 mb-md-0">
                <div class="input-group w-100">
                    <input type="text" class="form-control" name="searchInput"
                        placeholder="Buscar usuario por nombre o correo">
                    <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                </div>
            </form>

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
                                <form action="./App/Actions/DeleteUser.php" method="post">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">
                                    <input type="submit" value="Eliminar" class="btn btn-danger">
                                </form>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>