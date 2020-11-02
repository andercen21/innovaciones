<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>ENCUESTA</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            <br>
            <br>
            <br>
            <h2>LLENAR ENCUESTA</h2>
            <br>
            <form action="/create" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                <input type="text" name="id_encuestas"  class="form-control" placeholder="La aplicación simplifica la gestión en selección de personal">
                </div>
                <div class="form-group">
                <input type="text" name="pregunta"  class="form-control" placeholder="respuesta">
                </div>
                <div class="form-group">
                <input type="text" name="respuesta"  class="form-control" placeholder="Te ahorra tiempo utilizar la aplicación">
                </div>
                <div class="form-group">
                <input type="text" name="id_encuestas"  class="form-control" placeholder="respuesta">
                </div>
                <div class="form-group">
                <input type="text" name="pregunta"  class="form-control" placeholder="Es dificil utilizar la aplicación">
                </div>
                <div class="form-group">
                <input type="text" name="respuesta"  class="form-control" placeholder="respuesta">
                </div>
                <div class="form-group">
                <input type="text" name="pregunta"  class="form-control" placeholder="De 1 a 10 Te parece util la aplicación">
                </div>
                <div class="form-group">
                <input type="text" name="respuesta"  class="form-control" placeholder="respuesta">
                </div>
                <div class="form-group">
                <input type="submit" value="Enviar encuesta" class="btn btn-primary">
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>