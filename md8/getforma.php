<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>md8</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <?php
    $adminUsername = 'admin';
    $adminPassword = '1234';

    if ($_POST['username'] == $adminUsername && $_POST['password'] == $adminPassword) {
        echo '<h1 class="text-center mt-5">Jūs esat administrātors</h1>';
    } else {
        echo '<h1 class="text-center mt-5">Piekļuve liegta</h1>';
    }
    ?>
</body>

</html>