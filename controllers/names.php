<?php

$db->insert('users', [
    'name' => $_POST['name'],
    'age' => $_POST['age'],
]);

header('Location: /');
