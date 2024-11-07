<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/root.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/mainp.css') }}"> <!-- Inclui o CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>

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
        <section class="info-pizza">
        <div id="lottie-container"></div>

        <div class="info-right-text">
            <h1>Entrega Rápida e Confiável</h1>
            <p>Sabemos que a sua fome não pode esperar! Por isso, garantimos a entrega do seu pedido em até 30 minutos.
                Se não cumprirmos nosso compromisso, a pizza é por nossa conta! Aproveite a comodidade de saborear
                nossas deliciosas pizzas no conforto da sua casa.
            </p>
        </div>
    </section>

    <!-- Inclui o footer -->
    @include('templates.footer') <!-- Inclui o footer -->
    <script>
        lottie.loadAnimation({
            container: document.getElementById('lottie-container'), // ID do contêiner onde a animação será renderizada
            renderer: 'svg',         // Formato da animação (SVG é o mais comum)
            loop: true,              // Define se a animação será em loop
            autoplay: true,          // Define se a animação começará automaticamente
            path: 'lottlie/Food.json' // Caminho para o arquivo .json da animação
        });
    </script>
    
    </body>
</html>
