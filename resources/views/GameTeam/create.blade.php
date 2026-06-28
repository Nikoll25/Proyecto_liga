<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Asignar equipo para un juego</h1>
<form action="{{route('gameteam.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<br><br>
<label for="team_id">Equipo</label>
<select name="team_id" id="team_id">
    <option value="">Seleccione un equipo</option>

    @foreach($teams as $team)
        <option value="{{ $team->id }}">
            {{ $team->name }}
        </option>
    @endforeach
</select>
<br><br>
 <label for="game_id">Juego</label>
<select name="game_id" id="game_id">
    <option value="">Seleccione un juego</option>

    @foreach($games as $game)
        <option value="{{ $game->id }}">
            {{ $game->date }}
        </option>
    @endforeach
</select>
<br><br>
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>