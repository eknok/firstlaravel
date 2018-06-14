<!-- app/resources/view/contact.blade.php -->
<!DOCTYPE HTML>
<html>
<head>
    <title>Pages About</title>
</head>
<body>
    <h1>About me!</h1>
    <!-- <h2>Hello <?= $first_name ?> <?= $last_name ?> ! (PHPタグを使って変数表示)</h2> -->
    <h2>Hello {{ $first_name }} {{ $last_name }} ! (blade書式を使って変数表示)</h2>

</body>
</html>
