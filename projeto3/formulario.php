<html>
    <head>
        <title>Formulario</title>
        <script src="./formulario.js" language="javascript" type="text/javascript"></script>
    </head>
    <body>
        <form name="formulario" action="./mensagem.php" method="GET">
            <input type="hidden" name="cadastro" value="sim">
            <table>
                <thead>
                    <tr>
                        <th colspan="2">Formulario de Cadastro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: right;">Nome:</td>
                        <td>
                            <input type="text" name="nome" value="" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">Sexo:</td>
                        <td>
                            <input type="radio" name="sexo" value="masculino" checked> Masculino
                            <input type="radio" name="sexo" value="feminino"> Feminino
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">Maior de Idade:</td>
                        <td>
                            <input type="radio" name="maior" value="sim"> Sim
                            <input type="radio" name="maior" value="nao" checked> Nao
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">Formacao:</td>
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
                        <td style="text-align: right;">Casado(a):</td>
                        <td>
                            <input type="checkbox" name="casado" value="sim" checked> Sim
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">Possui Carro:</td>
                        <td>
                            <input type="checkbox" name="carro" value="sim"> Sim
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">Comentario:</td>
                        <td>
                            <textarea name="comentario" rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">
                            <input type="button" onClick="enviaFormulario(document.formulario);" name="enviar" value="Enviar">
                        </td>
                        <td>
                            <input type="button" onClick="limpaFormulario(document.formulario);" name="limpa" value="Limpa">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>