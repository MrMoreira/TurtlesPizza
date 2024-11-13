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
    <section class="cmain">
        <div class="img-a">
            <img src="/img/turtle.jpg" alt="">
        </div>
        <div class="about">
            <p>Desde 1837, a Turtle's Pizza é uma jornada lenta, mas saborosa, combinando autenticidade italiana com ingredientes de todo o mundo. Dos temperos brasileiros à marcha lenta das azeitonas gregas, cada mordida é uma parada nessa estrada repleta de sabores. Uma verdadeira aventura para os paladares mais apressados ou lentos!</p>
        </div>
    </section>
    <!-- Inclui o footer -->
    @include('templates.footer') <!-- Inclui o footer -->
    </body>
</html>
