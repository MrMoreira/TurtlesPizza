<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/root.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/about.css') }}"> <!-- Inclui o CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
    </head>
    <body>
    <!-- Inclui a navbar -->
    @include('templates.navbar') <!-- Inclui a navbar -->
    <section class="cmain" style="display: none;">
        <div class="img-a">
            <img src="/img/turtle.jpg" alt="">
        </div>
        <div class="about">
            <p>Desde 1837, a Turtle's Pizza é uma jornada lenta, mas saborosa, combinando autenticidade italiana com
                ingredientes de todo o mundo. Dos temperos brasileiros à marcha lenta das azeitonas gregas, cada mordida
                é uma parada nessa estrada repleta de sabores. Uma verdadeira aventura para os paladares mais apressados
                ou lentos!
            </p>
        </div>
    </section>

    <section class="cmain2">
        <div class="img-a2">
            <img src="/img/turtle.jpg" alt="">
        </div>
        <div class="about2">
            <p>Desde 1837, a Turtle's Pizza é uma jornada lenta, mas saborosa, combinando autenticidade italiana com
                ingredientes de todo o mundo. Dos temperos brasileiros à marcha lenta das azeitonas gregas, cada mordida
                é uma parada nessa estrada repleta de sabores. Uma verdadeira aventura para os paladares mais apressados
                ou lentos!
            </p>
        </div>
    </section>

    <section class="cmain2">
        <div class="about2">
            <p>Desde 1837, a Turtle's Pizza é uma jornada lenta, mas saborosa, combinando autenticidade italiana com
                ingredientes de todo o mundo. Dos temperos brasileiros à marcha lenta das azeitonas gregas, cada mordida
                é uma parada nessa estrada repleta de sabores. Uma verdadeira aventura para os paladares mais apressados
                ou lentos!
            </p>
        </div>
        <div class="img-a2">
            <img src="/img/turtle.jpg" alt="">
        </div>
    </section>
    <section class="cmain3">
        <div id="lottie-container"></div>
        <div class="about3">
            <p>Nossas receitas são verdadeiras relíquias familiares, preparadas com todo amor e segredos culinários passados de geração em geração. 
                É a famosa receita da vovó que traz memórias quentes da infância. 
                Cada mordida é uma homenagem à tradição cultivada ao longo dos anos. 
                Como dizia a vovó: "O segredo está no amor".
            </p>
        </div>
    </section>
    <script>
        lottie.loadAnimation({
            container: document.getElementById('lottie-container'), // ID do contêiner onde a animação será renderizada
            renderer: 'svg',         // Formato da animação (SVG é o mais comum)
            loop: true,              // Define se a animação será em loop
            autoplay: true,          // Define se a animação começará automaticamente
            path: '/lottlie/cooking.json' // Caminho para o arquivo .json da animação
        });
    </script>
    <!-- Inclui o footer -->
    @include('templates.footer') <!-- Inclui o footer -->
    </body>
</html>
