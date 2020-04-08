<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1>Index Page</h1>

    <form method="POST" action="names">
        <input type="text" name="name">
        <input type="text" name="age">
        <button type="submit">Send</button>
    </form>

    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?= $user->name ?>, age <?= $user->age ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>