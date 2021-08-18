<!DOCTYPE HTML>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<form method="post" action="{{ route('calculate') }}">
    {{ csrf_field() }}
    <h1>Caculator</h1>
    <input type="number" name="number1" style="margin-bottom: 10px; margin-right: 20px">
    <input type="number" name="number2"><br>
    <input type="submit" value="Addition(+)" style="margin-right: 5px" name="addition">
    <input type="submit" value="Subtration(-)" style="margin-right: 20px" name="subtration">
    <input type="submit" value="Multiplication(*)" style="margin-right: 5px" name="multiplication">
    <input type="submit" value="Division(/)" name="division"><br>

    @if(!empty(request('number1') && !empty(request('number2'))))
        <h1>Kết quả : {{ $calculate }}</h1>
    @endif
</form>
</body>
</html>