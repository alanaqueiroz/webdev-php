<html>

<head>
    <title>Index</title>
</head>

<body>
    <a href="./favoritos.php">Favoritos</a><br><br>
    <?php
    $link = mysqli_connect("localhost", "root", "", "webdev");
    $sql = "SELECT * FROM Item ORDER BY name";
    $result = mysqli_query($link, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["name"]
                . " <a href=\"./favoritos.php?a=" . $row["id"] . "\">
    ADICIONE
    </a><br>";
        }
    }
    ?>
    <br><a href="./favoritos.php">Favoritos</a>
</body>

</html>