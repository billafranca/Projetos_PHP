<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login - REDA+</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar">

        <div class="nav-logo">
            <img src="images/redapng.png" alt="Logo REDA+">
        </div>

        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Cadastro</a></li>
        </ul>

    </nav>
    <div class="page">


        <div class="left">

            <div class="left-content">
                <h1>REDA+</h1>
                <h2>Domine a escrita.<br>Domine o ENEM.</h2>

                <p>
                    Compartilhe redações, receba correções detalhadas e evolua
                    de forma estratégica com nossa comunidade.
                </p>
            </div>

        </div>


        <!-- LADO DIREITO -->
        <div class="right">

            <div class="container">

                <h2>Login</h2>

                <form action="principal.php" method="POST">

                    <label>Usuário</label>
                    <input type="text" name="nome" required>

                    <label>Email</label>
                    <input type="email" name="email" required>

                    <label>Senha</label>
                    <input type="password" name="senha" required>

                    <button type="submit">Entrar</button>

                </form>

            </div>

        </div>

    </div>

</body>

</html>