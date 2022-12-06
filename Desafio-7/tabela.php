
<table border=2>
    <thead>
        <tr>
            <th>Nome - Email - País</th>
        </tr>
    </thead>

    <tbody>

        <?php

            $nomeArquivo = "fornecedores.txt";
            $arquivo = fopen($nomeArquivo, "r");

            while (!feof($arquivo)) {
                $linha = fgets($arquivo, 100);
                echo "<tr>";
                echo "<td>$linha</td>";
                echo "</tr>";
            };


            fclose($arquivo);
        ?>

    </tbody>

</table>
