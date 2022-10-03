<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Travelers</title>
</head>

<body>
    <form class="form-login" action="#" method="post">
        <div class="card">
            <div class="card-header">
                <h1 class="display-5 text-color">Login</h1>
            </div>
            <div class="card-body">
                <?php include(TEMPLATES_PATH . '/messages.php') ?>
                <div class="form-floating mb-3">
                    <input type="text" id="username" name="username" value="<?= isset($username) ? $username : '' ?>" class="form-control custom-input" placeholder="Informe o usuário." autofocus>
                    <label for="username" class="label-color">Usuário</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" id="password" name="password" class="form-control custom-input" placeholder="Informe a senha.">
                    <label for="password" class="label-color">Senha</label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary login-button">Entrar</button>
            </div>
            <div role="alert" class="m-3 alert alert-warning">
                <b>Login: </b>jose<br>
                <b>Senha: </b>12345
            </div>
        </div>
    </form>

</body>

</html>