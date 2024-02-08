<!-- views/user_messages.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Messages</title>
    <<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class=".container-sm">

    <h1>User Messages</h1>
    
    <?php if (empty($messages)): ?>
        <p>No messages found for this user.</p>
    <?php else: ?>
        <ul class="list-group">
            <?php foreach ($messages as $message): ?>
                <li class="list-group-item">
                    <strong><?= $message['sender_id'] == $user_id ? 'You' : 'Sender'; ?>:</strong>
                    <?= $message['content']; ?>
                    <small><?= date('Y-m-d H:i:s', strtotime($message['created_at'])); ?></small>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    
    <?php echo form_open('message/add/'.$friend_id); ?>
            <div class="input-group input-group-sm m-2 ">
                
                <input class="form-control " type="text" placeholder="Escriba mensaje..." name="message" required>
                
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
    <?php echo form_close(); ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
