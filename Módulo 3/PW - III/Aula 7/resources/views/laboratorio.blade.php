<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab</title>
</head>
<body>
    @foreach($lab AS $dadosLab)
        {{$dadosLab -> idLab}}
        {{$dadosLab -> Lab}}
    @endforeach
</body>
</html>