<!DOCTYPE html>
<html>

<head>
    <title>Ana sayfa</title>
</head>

<body>
    <h1>Hoşgeldin</h1>

    <a href="{{ route('home', ['lang' => 'en']) }}">English</a>
    <a href="{{ route('home', ['lang' => 'tr']) }}">Türkçe</a>

</body>

</html>
