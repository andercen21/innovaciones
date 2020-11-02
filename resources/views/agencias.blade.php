<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>AGENCIAS</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            <h2>CREAR AGENCIA</h2>
            <br>            
            <br>
            <br>
            <form action="/create" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                <input type="text" name="id_agencia"  class="form-control" placeholder="codigo de agencia">
                </div>
                <div class="form-group">
                <input type="text" name="nombre"  class="form-control" placeholder="nombre de agencia">
                </div>
                <div class="form-group">
                <input type="text" name="direccion"  class="form-control" placeholder="direccion">
                </div>
                <div class="form-group">
                <input type="text" name="telefono"  class="form-control" placeholder="telefono">
                </div>
                <div class="form-group">
                <input type="text" name="id_departamento"  class="form-control" placeholder="departamento">
                </div>
                <div class="form-group">
                <input type="text" name="id_municipio"  class="form-control" placeholder="municipio">
                </div>
                <div class="form-group">
                <input type="text" name="id_region"  class="form-control" placeholder="region">
                </div>
                <div class="form-group">
                <input type="text" name="id_tipo_agencia"  class="form-control" placeholder="tipo de agencia">
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