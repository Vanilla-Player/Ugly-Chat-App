
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>

<h1>User</h1>

<?php if (empty($friends)): ?>
    <p>No users.</p>
<?php else: ?>
    <table>
        <thead>
            <th>
                Usuario
            </th>
            <th>
                Accion
            </th>
        </thead>
        <tbody>
            <?php foreach ($friends as $friend): ?>
                <tr>
                    <td><?php echo $friend['username']; ?></td>
                    <td>
                        <a href=<?php echo base_url('/message/getmessages/' . $friend['id']);?>>Ver Chat</a>
                    </td>
                </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>
<?php endif; ?>

</body>
</html>