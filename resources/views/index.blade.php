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
<form action="{{route('calculate')}}"  method="POST">
    @csrf
    <input name="firstNumber">
    <input name="secondNumber">
    <input type="submit" name="Addition"  value="Addition(+)">
    <input type="submit" name="Subtraction" value="Subtraction(-)">
    <input type="submit" name="Multiplication" value="Multiplication(X)">
    <input type="submit" name="Division" value="Division(/)">
    @if(isset($result))
    <p>Ket qua:{{$result}}</p>
    @endif
</form>

</body>
</html>