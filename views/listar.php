<!-- views/libros/listar.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de Libros (MVC)</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Listado de Libros</h2>
            <a href="index.php?action=create" class="btn btn-success">Añadir Nuevo Libro</a>
        </div>

        <!-- Mensajes -->
        <?php if (isset($_GET['message'])): ?>
            <div class="alert alert-success">
                <?php
                if ($_GET['message'] == 'created') echo 'Libro creado correctamente.';
                if ($_GET['message'] == 'updated') echo 'Libro actualizado correctamente.';
                if ($_GET['message'] == 'deleted') echo 'Libro eliminado correctamente.';
                ?>
            </div>
        <?php endif; ?>

        <!-- Tabla -->
        <div class="card shadow">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Autor</th>
                                <th>Fecha Publicación</th>
                                <th>Precio (€)</th>
                                <th>Disponible</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($libros as $libro): ?>
                                <tr>
                                    <td><?php echo $libro['id']; ?></td>
                                    <td><?php echo htmlspecialchars($libro['titulo']); ?></td>
                                    <td><?php echo htmlspecialchars($libro['autor']); ?></td>
                                    <td><?php echo htmlspecialchars($libro['fecha_publicacion']); ?></td>
                                    <td><?php echo number_format($libro['precio'], 2); ?></td>
                                    <td>
                                        <?php echo $libro['disponible']
                                            ? '<span class="badge bg-success">Sí</span>'
                                            : '<span class="badge bg-secondary">No</span>'; ?>
                                    </td>
                                    <td>
                                        <a href="index.php?action=edit&id=<?php echo $libro['id']; ?>" class="btn btn-sm btn-primary">
                                            Editar
                                        </a>
                                        <a href="index.php?action=delete&id=<?php echo $libro['id']; ?>"
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('¿Estás seguro?');">
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>