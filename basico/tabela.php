<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
        <title>Produtos</title>
        
    </head>

        <body>

        
        <a href="index.php">Home</a>
        <a href="">Contato</a>
        <a href="quem_somos.php">Quem Somos</a>
        <a href="">Tabelas</a>
        <a href="formularios.php">Formulários</a>
        <a href="caracteres_especiais.php">Caracteres Especiais</a>

        <h1> Tabelas </h1>

            <table border="1" width="50%"><!-- pode ser numero absoluto ou %, % é responsivo a mudanças na tela

                <tr> <!--Table Rows, linhas da tabela -->
                    <th>Código</th><!-- Table Data, celulas da tabela -->
                    <th>Produto</th><!-- th é table head, para destacar o cabeçalho --> 
                    <th>Preço</th>

                </tr>

                <tr>
                    <td>00000120</td>
                    <td>Notebook</td>
                    <td>R$ 1200</td>
                </tr>

                  <tr>
                    <td>00000130</td>
                    <td>Tablet</td>
                    <td>R$ 500</td>
                </tr>

                <tr>
                    <td colspan="2">Total</td><!--para formatar as colunas, agrupando-as -->
                    <td>R$ 1700</td>
                </tr>

                <tr>
                    <td rowspan="2">Desconto</td> <!--para formatar linhas, agrupando-as -->
                    <td>Cupom 1 : - R$10,00</td>
                </tr>

                <tr>
                    <td>Cupom 2 : - R$12,00</td>
                </tr>

            </table>
            
        </body>

</html>