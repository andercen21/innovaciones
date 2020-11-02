<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>FECHAS FESTIVAS</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            <h2>FECHA FESTIVA</h2>
            <br>
            <br>
            <br>
            <form action="/create" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                <input type="text" name="id_fecha_festiva"  class="form-control" placeholder="fecha festiva">
                </div>
                <div class="form-group">
                <input type="date" name="fecha"  class="form-control" placeholder="fecha">
                </div>
                <div class="form-group">
                <input type="text" name="id_festividad"  class="form-control" placeholder="fecha festiva">
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