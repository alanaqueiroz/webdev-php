<html>

<head>
    <title>Pega Formulario</title>
</head>

<body>
    <hr>
    GET
    <hr>
    <?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    ?>
    <hr>
    <?php
    if ($_GET["nome"]) {
        echo "entrou if get nome<br>";
    } else {
        echo "nao entrou if get nome<br>";
    }
    if (isset($_GET["nome"])) {
        echo "entrou if isset get nome<br>";
    } else {
        echo "nao entrou if isset get nome<br>";
    }
    if ($_GET["nome"] == false) {
        echo "entrou if get nome == false<br>";
    } else {
        echo "nao entrou if get nome == false<br>";
    }
    if ($_GET["nome"] === false) {
        echo "entrou if get nome === false<br>";
    } else {
        echo "nao entrou if get nome === false<br>";
    }
    ?>
    <hr>
</body>

</html>