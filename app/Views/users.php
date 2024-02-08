
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<h1 class="text-center">Users</h1>

<?php if (empty($users)): ?>
    <p>No users.</p>
<?php else: ?>
    <div class="container-sm">
        <table class="table">
            <thead class="table-light">
                <th scope="col">
                    Usuario
                </th>
                <th scope="col">
                    Accion
                </th>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($users as $user): ?>
                    <tr scope="row">
                        <td><?php echo $user['username']; ?></td>
                        <td>
                            <a href=<?php echo base_url('user/get_friends/' . $user['id']);?>>Ver Amigos</a>
                        </td>
                    </tr>
                <?php endforeach; ?>    
            </tbody>
        </table>
    </div>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
