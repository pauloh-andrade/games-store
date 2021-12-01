<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link rel="stylesheet" type="text/css" href="../style/dashboard.css">
        <title>CMS</title>
    </head>
    <body id="login">
        <section class="container-login">
            <div class="form-login">
                <form action="autenticar.php" name="formLogin" method="POST">
                    <h1>Autenticação C M S</h1>
                    <div class="hr-title"></div>
                    <div class="itens">
                        <input class="campo-txt" placeholder="Login" type="text" name="txtLogin">
                        <input class="campo-txt" placeholder="Senha" type="password" name="txtSenha">
                        <input class="btn-form"type="submit" value="Logar">
                        <p>- Games Store - </p>
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>