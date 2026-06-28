<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar Gol</h1>
<form action="{{route('goal.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br><br>
<label>
    Descripción:
    <br>
    <input type="text" name="description">
</label>
<br><br>
 <label for="player_id">Jugador</label>
<select name="player_id" id="player_id">
    <option value="">Seleccione un jugador</option>

    @foreach($players as $player)
        <option value="{{ $player->id }}">
            {{ $player->name }}
        </option>
    @endforeach
</select>
<br><br>
 <label for="game_id">Juego</label>
<select name="game_id" id="game_id">
    <option value="">Seleccione un juego</option>
    @foreach($games as $game)
        <option value="{{ $game->id }}">
            {{ $game->date}}
        </option>
    @endforeach
</select>
<br><br>
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>