<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form  method="POST">
    @csrf
    <label for="">
    $a = 
    </label>
    <input type="number" name="a">
    <label for="">
    $b = 
    </label>
    <input type="number" name="b">
    <label for="">
        $c = 
        </label>
        <input type="number" name="c">
    <button type='submit'>hitung</button>
    </form>
    @if (isset($hasil))
    <h1>HITUNG OR</h1>
     {{$hasil}}
    @endif
</body>
</html>