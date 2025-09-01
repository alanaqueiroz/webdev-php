<html>

<head>
    <title>Envia Formulario</title>
</head>

<body>
    <form action="./pegaform.php" method="GET">
        <input type="hidden" name="cadastro" value="">
        <table>
            <th colspan="2">
                Formulario de Cadastro
            </th>
            <tr>
                <td>
                    Nome:
                </td>
                <td>
                    <input type="text" name="nome" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Sexo:
                </td>
                <td>
                    <input type="radio" name="sexo" value="masculino">
                    Masculino
                    <input type="radio" name="sexo" value="feminino">
                    Feminino
                </td>
            </tr>
            <tr>
                <td>
                    Formacao:
                </td>
                <td>
                    <select name="formacao">
                        <option value="">Selecione uma formacao</option>
                        <option value="graduacao">Graduacao</option>
                        <option value="mestrado">Mestrado</option>
                        <option value="doutorado">Doutorado</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Possui Carro:
                </td>
                <td>
                    <input type="checkbox" name="carro" value="sim">
                    Sim
                </td>
            </tr>
            <tr>
                <td>
                    Comentario:
                </td>
                <td>
                    <textarea name="comentario" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>