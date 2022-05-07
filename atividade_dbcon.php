<!DOCTYPE html>
<html>
<meta charset="utf-8">
    <head><title>ATIVIDADE IPM</title></head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

        td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                }

        tr:nth-child(even) {
                background-color: #dddddd;
                }
    </style>
    <body>
        <h1>Cidade</h1>
        <table>
        <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Indaial</td>
            <td><a href="atividade05.php">DELETE</a></td>
        </tr>
        </table>
            <?php
            $dbcon = pg_connect(
                "host=localhost
                port=5432
                dbname=postgres
                user=postgres
                password=root
                "
            );
            
            function select_on_db($schema, $tabela, $coluna, $value) {
                $query = "SELECT * FROM {$schema}.{$tabela}";
                $dbresponse = pg_query($dbcon, $query);
                pg_fetch_assoc($dbresponse);
            }
            function insert_on_db($schema, $tabela, $coluna, $value) {
                $query = "INSERT INTO {$schema}.{$tabela} ($coluna) VALUES ($value)";
                $dbresponse = pg_query($dbcon, $query);
            }
            function delete_on_db($schema, $tabela, $coluna, $value) {
                $query = "DELETE FROM {$schema}.{$tabela} WHERE ($coluna) = VALUES ($value)";
                $dbresponse = pg_query($dbcon, $query);
            }
            // echo $_POST['insert_city'];
            ?>
    </body>
</html>