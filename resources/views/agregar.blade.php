<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>agregar agencia</title> 
</head>
<body>
    <center>
    <form action="/create" method="POST">
        {{ csrf_field() }}
        <label>Codigo de Agencia </label>
        <input type="text" name="id_agencia" placeholder="codigo de agencia">
        <br>
        <label>Nombre de Agencia</label>
        <input type="text" name="nombre" placeholder="nombre de agencia">
        <br>
        <label>Direccion</label>
        <input type="text" name="direccion" placeholder="direccion">
        <br>
        <label>Telefono</label>
        <input type="text" name="telefono" placeholder="telefono">
        <br>
        <label>Departamento</label>
        <input type="text" name="id_departamento" placeholder="departamento">
        <br>
        <label>Municipio</label>
        <input type="text" name="id_municipio" placeholder="municipio">
        <br>
        <label>Region</label>
        <input type="text" name="id_region" placeholder="region">
        <br>
        <label>Tipo de Agencia</label>
        <input type="text" name="id_tipo_agencia" placeholder="tipo de agencia">
        <br>
        <br>
        <button type="submit">Agregar Agencia</button>
    </form>
    </center>
</body>
</html>  