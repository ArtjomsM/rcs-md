<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8md</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col">
                <h1>Login</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="./getforma.php" method="POST">
                    <div class="form-group">
                        <label for="username">Lietotājs</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Parole</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Ievadīt</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>