<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>VACACIONES</title>
</head>
<body background="fondo.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            <br>
            <br>
            <br>
            <h2>VACACIONES</h2>
            <br>
            <form action="/create" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                <input type="text" name="id_vaciones"  class="form-control" placeholder="vacaciones">
                </div>
                <div class="form-group">
                <input type="text" name="id_empleado"  class="form-control" placeholder="codigo de empleado">
                </div>
                <div class="form-group">
                <input type="date" name="fecha_salida"  class="form-control" placeholder="fecha de salida">
                </div>
                <div class="form-group">
                <input type="date" name="fecha_entrada"  class="form-control" placeholder="fecha de regreso">
                </div>
                <div class="form-group">
                <input type="text" name="estado"  class="form-control" placeholder="estado">
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