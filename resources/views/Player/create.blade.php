<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar Jugador</h1>
<form action="{{route('player.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br><br>
<label>
    posición:
    <br>
    <input type="text" name="position">
</label>
<br><br>
 <label for="team_id">Jugador</label>
<select name="team_id" id="team_id">
    <option value="">Seleccione un equipo</option>

    @foreach($teams as $team)
        <option value="{{ $team->id }}">
            {{ $team->name }}
        </option>
    @endforeach
</select>
<br><br>
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>