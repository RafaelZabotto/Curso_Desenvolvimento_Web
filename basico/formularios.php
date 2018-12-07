<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />       
        <title>Formulários</title>
        
    </head>

        <body>

            <a href="index.php">Home</a>
            <a href="contato.php">Contato</a>
            <a href="quem_somos.php">Quem Somos</a>
            <a href="tabela.php">Tabelas</a>
            <a href="">Formulários</a>
            <a href="caracteres_especiais.php">Caracteres Especiais</a>

            <h1>Formulários</h1>

            <form>

                Login:<br />
                <input type="text" name="login"/><br />
                Senha:<br />
                <input type="password" name="senha" /><br /><br />

                <input type="submit" value="Login"/>

            </form>

            <h1>Cadastrar</h1>
            <form>
                Login:<br />
                <input type="text" /><br />
                <br />

                Sexo:<br />
                <input type="radio" name="sexo"/>Masculino<br />
                <input type="radio" name="sexo"/>Feminino<br />
                <br />

                Interesses:<br />
                <input type="checkbox"> Futebol<br />
                <input type="checkbox"> Cursos<br />
                <input type="checkbox"> Eletrônicos<br />
                <br />

                Estado:<br />
                <select>
                    <option>SP</option>
                    <option>RJ</option>
                    <option>MG</option>
                    <option>RS</option>
                </select>
                <br /><br />

                Observações:<br />
                <textarea></textarea>
                <br /><br />

                <input type="submit" value="Cadastratar" />

        </body>

</html>