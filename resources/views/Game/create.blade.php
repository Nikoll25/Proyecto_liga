<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar Juego</h1>
    <form action="{{route('game.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <label class="form-label fw-medium">
                 Fecha:
                 <br>
                 <input class="form-control" type="date" name="date" required>
            </label>
            <br><br>
            <label class="form-label fw-medium">
                 Goles de local:
                 <br>
                 <input class="form-control" type="number" name="local_goals" required>
            </label>
            <br><br>
            <label class="form-label fw-medium">
                 Goles de visitante:
                 <br>
                 <input class="form-control" type="number" name="away_goals" required>
            </label>
            <br><br>
        <button type="submit" class="btn btn-success">Enviar Formulario</button>
    </form>
</body>
</html>