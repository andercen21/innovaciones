<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>USERS</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            <br>
            <br>
            <br>
            <h2>USERS</h2>
            <br>
            <form action="/create" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                <input type="text" name="id"  class="form-control" placeholder="codigo de usuario">
                </div>
                <div class="form-group">
                <input type="text" name="name"  class="form-control" placeholder="nombre de usuario">
                </div>
                <div class="form-group">
                <input type="text" name="email"  class="form-control" placeholder="correo electronico">
                </div>
                <div class="form-group">
                <input type="text" name="password"  class="form-control" placeholder="contraseña">
                </div>
                <div class="form-group">
                <input type="text" name="remember_token"  class="form-control" placeholder="recordar token">
                </div>
                <div class="form-group">
                <input type="text" name="created_at"  class="form-control" placeholder="fecha y hora de login">
                </div>
                <div class="form-group">
                <input type="text" name="updated_at"  class="form-control" placeholder="fecha y hora de logout">
                </div>
                <div class="form-group">
                <input type="submit" value="Guardar" class="btn btn-primary">
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>