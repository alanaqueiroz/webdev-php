<?php
include("../config.inc.php");
include("../session.php");
validaSessao();
include("../../header.php");
include("../menu.php");
?>

<h3>PRODUTOS</h3>

<a href="/sistema/admin/prod/add.php" style="color: black;">+ Adicionar</a>

<br><br>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>EDITAR</th>
        <th>APAGAR</th>
    </tr>
    <?php
    $link = mysqli_connect("localhost","root","","sistema");
    $sql = "SELECT * FROM prod ORDER BY nome;";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?=$row["nome"];?></td>
            <td><a href="/sistema/admin/prod/upd.php?=<?=$row["id"];?>"style="color: black;">editar</a></td>
            <td><a href="/sistema/admin/prod/del.php?=<?=$row["id"];?>"style="color: black;">apagar</a></td>
        </tr>
        <?php
    }
    ?>
</table>
<br><br>

<a href="/sistema/admin/prod/add.php" style="color: black;">+ Adicionar</a>

<?php
include("../../footer.php");
?>