<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>USUARIO</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            <br>
            <br>
            <br>
            <h2>USUARIO</h2>
            <br>
            <form action="/create" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                <input type="text" name="id_usuario"  class="form-control" placeholder="codigo de usuario">
                </div>
                <div class="form-group">
                <input type="text" name="usuario"  class="form-control" placeholder="usuario">
                </div>
                <div class="form-group">
                <input type="text" name="usuarioscol"  class="form-control" placeholder="usuarios col">
                </div>
                <div class="form-group">
                <input type="text" name="nombre"  class="form-control" placeholder="nombre de usuario">
                </div>
                <div class="form-group">
                <input type="text" name="id_puesto"  class="form-control" placeholder="puesto">
                </div>
                <div class="form-group">
                <input type="text" name="telefono"  class="form-control" placeholder="telefono">
                </div>
                <div class="form-group">
                <input type="text" name="correo"  class="form-control" placeholder="correo">
                </div>
                <div class="form-group">
                <input type="text" name="id_agencia"  class="form-control" placeholder="codigo de agencia">
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