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
            <h2>AUDITORIA</h2>
            <br>
            <form action="/create" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                <input type="text" name="id_auditoria"  class="form-control" placeholder="codigo de auditoria">
                </div>
                <div class="form-group">
                <input type="text" name="id_usuario"  class="form-control" placeholder="usuario">
                </div>
                <div class="form-group">
                <input type="text" name="operado"  class="form-control" placeholder="operado">
                </div>
                <div class="form-group">
                <input type="text" name="fecha_operado"  class="form-control" placeholder="fecha de operacion">
                </div>
                <div class="form-group">
                <input type="text" name="modificado"  class="form-control" placeholder="modificación">
                </div>
                <div class="form-group">
                <input type="text" name="tabla_afectada"  class="form-control" placeholder="tabla afectada">
                </div>
                <div class="form-group">
                <input type="text" name="auditoriacol"  class="form-control" placeholder="auditoria col">
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>