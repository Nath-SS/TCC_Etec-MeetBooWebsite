<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://kit.fontawesome.com/eada4c1f48.js" crossorigin="anonymous"></script>
    <title>MeetBoo</title>
</head>
<body>
    <div class="container"><!-- Inicio Container -->
        <div class="content first-content"><!-- Inicio Cadastro -->
            <div class="first-column"><!-- Inicio Coluna1 -->
                <h2 class="titulo titulo-branco">Welcome Back!</h2> 
                <p class="description">Faça login agora e continue suas atividades</p>
                <button id="signIn" class="btn btn-branco">Sign in</button>
            </div><!-- Fim Coluna1 -->
            <div class="second-column"><!-- Inicio Coluna2 -->
                <h2 class="titulo titulo-colorido">Create Account</h2>
                <div class="redes-sociais">
                    <ul class="lista-icones-sociais">
                        <a class="link-social" href="#">
                            <li class="icones-sociais">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social" href="#">
                            <li class="icones-sociais">
                                <i class="fab fa-google"></i>
                            </li>
                        </a>
                    </ul>
                </div>
                <p class="description description-colorido">Ou use o seu email para se registrar.</p>
                <form nome="cadastroForm" action="cadastrar-usuario.php" class="formulario" method="post">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="txtCName" placeholder="Nome">
                    </label>
                    <label class="label-input" for="">
                        <i class="fas fa-envelope icon-modify"></i>
                        <input type="email" name="txtCEmail" placeholder="Email">
                    </label>
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="txtCSenha" placeholder="Senha">
                    </label>
                    <button class="btn btn-colorido">Sign Up</button>
                </form>
            </div><!-- Fim Coluna2 -->
        </div><!-- Fim cadastro -->
        <div class="content second-content"><!-- Inicio Login -->
            <div class="first-column"><!-- Inicio Coluna1 -->
                <h2 class="titulo titulo-branco">Hello, Bookrazy!</h2> 
                <p class="description">Cadastre-se agora e encontre outros amantes de livros</p>
                <button id="signUp" class="btn btn-branco">Sign Up</button>
            </div><!-- Fim Coluna1 -->
            <div class="second-column"><!-- Inicio Coluna2 -->
                <h2 class="titulo titulo-colorido">Mostre-nos sua estante</h2>
                <div class="redes-sociais">
                    <ul class="lista-icones-sociais">
                        <a class="link-social" href="#">
                            <li class="icones-sociais">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social" href="#">
                            <li class="icones-sociais">
                                <i class="fab fa-google"></i>
                            </li>
                        </a>
                    </ul>
                </div>
                <p class="description description-colorido">Ou use o seu email.</p>
                <form action="login.php" class="formulario" method="post">
                    <label class="label-input" for="">
                        <i class="fas fa-envelope icon-modify"></i>
                        <input type="email" name="txtLEmail" id="loginEmail" placeholder="Email">
                    </label>
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="txtLSenha" id="loginSenha" placeholder="Senha">
                    </label>
                    <a class="password" href="#">Esqueceu sua senha?</a>
                    <button class="btn btn-colorido">Sign In</button>
                </form>
            </div><!-- Fim Coluna2 -->
        </div><!-- Fim Login -->
    </div><!-- Fim container -->

    <script src="js/loginCadastro.js"></script>
</body>
</html>