<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/root.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}"> <!-- Inclui o CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
    </head>
    <body>
    <!-- Inclui a navbar -->
    @include('templates.navbar') <!-- Inclui a navbar -->
    <div class="center">
        <div class="wrapper">
            <form action="re" method="post" >
                <h1>Cadastro</h1>
                <div class="input-box">
                    <input type="text" name="nome" placeholder="Nome" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" name="sobrenome" placeholder="Sobrenome" required>
                    <i class='bx bx-collapse-alt'></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxl-gmail'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="senha" placeholder="Senha" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn-send">Cadastrar</button>
                <div class="login-link">
                    <p>
                        Já tem uma conta?
                        <a href="#">Entrar</a>
                    </p>

                </div>

            </form>
        </div>
    </div>    



    <!-- Inclui o footer -->
    @include('templates.footer') <!-- Inclui o footer -->
    </body>
</html>
