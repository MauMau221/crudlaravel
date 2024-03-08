<!-- Listagem de Registros -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
</head>
<body>
    <h1>Clients List</h1>
    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
        </table>
        <tbody>
            <?php foreach($resultData as $data): ?>
                <tr>
                    <td><?php echo $data['id'] ?></td>
                    <td><?php echo $data['name'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['phone'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </div>
</body>
</html>