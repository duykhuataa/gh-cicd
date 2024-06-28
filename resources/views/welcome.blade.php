<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Super sum calculator hehe <br>

<form action="{{ route('calc') }}" method="POST">
    @csrf
    <input type="number" name="num1" id="num1" value="{{ $num1 ?? '' }}"><br>
    + <br>
    <input type="number" name="num2" id="num2" value="{{ $num2 ?? ''  }}"><br>
    = <br>
    <input type="number" name="sum" id="sum" value="{{ $sum ?? '' }}">

    <button type="submit">Calc now!</button>
</form>
</body>
</html>
