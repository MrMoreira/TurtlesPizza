<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/root.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/mainp.css') }}"> <!-- Inclui o CSS -->
    </head>
    <body>
        <!-- Inclui a navbar -->
        @include('templates.navbar') <!-- Inclui a navbar -->
        
        <main class="main-p">
            <div class="main-inbox">
                <p>Para Os Amantes De Pizza</p>
                <h1>A Melhor Pizza Da Cidade</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic veniam voluptas laborum, perspiciatis,
                    culpa deleniti exercitationem velit natus unde, necessitatibus repellat at architecto enim corporis eos
                    illum. Minima, ipsa officia.
                </p>
                <p>Clique Aqui</p>
            </div>

            <div class="category">
                <!--    
                Tipos de Pizza no menu categoria 
                Salgadas, Doces, Bebidas, Porções, Sobremesas
                -->
                <div class="salgadas">
                    <img src="/img/salgada.png" alt="Salgadas">
                    <p>Salgadas</p>
                </div>
                <div class="doces">
                    <img src="/img/doces.png" alt="Doces">
                    <p>Doces</p>
                </div>
                <div class="bebidas">
                    <img src="/img/bebidas.png" alt="Bebidas">
                    <p>Bebidas</p>
                </div>
                <div class="porcoes">
                    <img src="/img/porcoes.png" alt="Porções">
                    <p>Porções</p>
                </div>
                <div class="sobremesas">
                    <img src="/img/sobremesas.png" alt="Sobremesas">
                    <p>Sobremesas</p>
                </div>
            </div>
        </main>

        <!-- Inclui o footer -->
        @include('templates.footer') <!-- Inclui a navbar -->
    </script>
    </body>
</html>
