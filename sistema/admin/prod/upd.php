<?php
    include("../config.inc.php");
    include("../session.php");
    validaSessao();

    //abaixo
    $id = "";
    if(($_GET["id"]).$id = $_GET["id"]);
    elseif($_POST["id"]) $id = $_POST["id"];

     IF(!$id)
    {
        header("Location: /sistema/admin/prod");
        exit;
    }
    
    $link = mysqli_connect("localhost", "root", "", "sistema");
    $sql = "";
    $sql .= "SELECT * FROM prod WHERE id = '".$id."';";
    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result) == 0)
    {
        header("Location: /sistema/admin/prod");
        exit;
    }
    $row = mysqli_fetch_assoc($result);
    extract($row);

    //acima

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        extract($_POST);
        $error = "";
        if(!$nome){
            $error = "Nome obrigatorio";
        }
        if(!$preco){
            $error = "Preco obrigatorio";
        }
        if(!$error){
            $link = mysqli_connect("localhost", "root", "", "sistema");
            $sql = "UPDATE prod SET nome = '".$nome."', preco = '".$preco."' WHERE id = '".$id."';";
            $result = mysqli_query($link, $sql);
            header("Location: /sistema/admin/prod");
            exit;
        }
    }
?>

<h3>EDITAR PRODUTO</h3>

<form method = "POST">
    <table>
        <tr>
            <td style="text-align: right;">Nome:</td>
            <td> 
                <input type="text" name="nome" value="<?=isset($nome) ?$nome:""?>">
            </td>
            </td>
        <tr>
        <tr>
            <td style="text-align: right;">Nome:</td>
            <td> 
                <input type="text" name="preco" value="<?=isset($preco) ?$preco:""?>">
            </td>
            </td>
        <tr>
            <td colspan="2" style="text-align: center;">
                <input type="submit" name="submit" value="Editar">
            </td>
        </tr>
    </table>
</form>

<?php
    include("../../footer.php");
?>

