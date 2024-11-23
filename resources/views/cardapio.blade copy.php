<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/root.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/about.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/cardapio.css') }}"> <!-- Inclui o CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
    <!-- Inclui a navbar -->
    @include('templates.navbar') <!-- Inclui a navbar -->

    <div class="mb-5"></div>
    <h1 class="text-center">Cardápio</h1>
    <div class="mb-5"></div>
    <h2 class="text-center">Pizzas Salgadas</h2>
    <div class="mb-5"></div>

    <div class="container my-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://media.istockphoto.com/id/1494273340/pt/foto/pizza-with-pepperoni-arugula-ketchup-tomatoes-and-cheese-in-a-plate-on-a-white-background.jpg?s=612x612&w=0&k=20&c=tImY3W2LwZeUvnLjc12fKq1S-NZXrSr75zw39WzLYYA=" class="card-img-top" alt="Calabresa">
                <div class="card-body">
                    <h5 class="card-title">Calabresa</h5>
                    <p class="card-text">Queijo, calabresa e cebola, orégano.</p>
                    <h3>R$72,90</h3>
                    <form method="POST" action="{{ route('adicionar.carrinho') }}">
                        @csrf
                        <input type="hidden" name="nome" value="Calabresa">
                        <input type="hidden" name="preco" value="72.90">
                        <input type="hidden" name="imagem" value="https://media.istockphoto.com/id/1494273340/pt/foto/pizza-with-pepperoni-arugula-ketchup-tomatoes-and-cheese-in-a-plate-on-a-white-background.jpg?s=612x612&w=0&k=20&c=tImY3W2LwZeUvnLjc12fKq1S-NZXrSr75zw39WzLYYA=">
                        <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col">
    <div class="card" style="width: 18rem;">
        <img src="https://media.istockphoto.com/id/1494273340/pt/foto/pizza-with-pepperoni-arugula-ketchup-tomatoes-and-cheese-in-a-plate-on-a-white-background.jpg?s=612x612&w=0&k=20&c=tImY3W2LwZeUvnLjc12fKq1S-NZXrSr75zw39WzLYYA=" class="card-img-top" alt="3 Queijos">
        <div class="card-body">
            <h5 class="card-title">3 Queijos</h5>
            <p class="card-text">Queijo, requeijão, orégano e parmesão ralado.</p>
            <h3>R$55,90</h3>
            <form method="POST" action="{{ route('adicionar.carrinho') }}">
                @csrf
                <input type="hidden" name="nome" value="3 Queijos">
                <input type="hidden" name="preco" value="55.90">
                <input type="hidden" name="imagem" value="https://media.istockphoto.com/id/1494273340/pt/foto/pizza-with-pepperoni-arugula-ketchup-tomatoes-and-cheese-in-a-plate-on-a-white-background.jpg?s=612x612&w=0&k=20&c=tImY3W2LwZeUvnLjc12fKq1S-NZXrSr75zw39WzLYYA=">
                <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
            </form>
        </div>
    </div>
</div>


<div class="col">
    <div class="card" style="width: 18rem;">
        <img src="https://media.istockphoto.com/id/1494273340/pt/foto/pizza-with-pepperoni-arugula-ketchup-tomatoes-and-cheese-in-a-plate-on-a-white-background.jpg?s=612x612&w=0&k=20&c=tImY3W2LwZeUvnLjc12fKq1S-NZXrSr75zw39WzLYYA=" class="card-img-top" alt="Pepperoni">
        <div class="card-body">
            <h5 class="card-title">Pepperoni</h5>
            <p class="card-text">Queijo mussarela, orégano e pepperoni.</p>
            <h3>R$72,90</h3>
            <form method="POST" action="{{ route('adicionar.carrinho') }}">
                @csrf
                <input type="hidden" name="nome" value="Pepperoni">
                <input type="hidden" name="preco" value="72.90">
                <input type="hidden" name="imagem" value="https://media.istockphoto.com/id/1494273340/pt/foto/pizza-with-pepperoni-arugula-ketchup-tomatoes-and-cheese-in-a-plate-on-a-white-background.jpg?s=612x612&w=0&k=20&c=tImY3W2LwZeUvnLjc12fKq1S-NZXrSr75zw39WzLYYA=">
                <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
            </form>
        </div>
    </div>
</div>


<div class="col">
    <div class="card" style="width: 18rem;">
        <img src="https://media.istockphoto.com/id/1494273340/pt/foto/pizza-with-pepperoni-arugula-ketchup-tomatoes-and-cheese-in-a-plate-on-a-white-background.jpg?s=612x612&w=0&k=20&c=tImY3W2LwZeUvnLjc12fKq1S-NZXrSr75zw39WzLYYA=" class="card-img-top" alt="Portuguesa">
        <div class="card-body">
            <h5 class="card-title">Portuguesa</h5>
            <p class="card-text">Queijo, presunto, ovo de codorna, azeitona preta, cebola, orégano e pimentão verde.</p>
            <h3>R$79,90</h3>
            <form method="POST" action="{{ route('adicionar.carrinho') }}">
                @csrf
                <input type="hidden" name="nome" value="Portuguesa">
                <input type="hidden" name="preco" value="79.90">
                <input type="hidden" name="imagem" value="https://media.istockphoto.com/id/1494273340/pt/foto/pizza-with-pepperoni-arugula-ketchup-tomatoes-and-cheese-in-a-plate-on-a-white-background.jpg?s=612x612&w=0&k=20&c=tImY3W2LwZeUvnLjc12fKq1S-NZXrSr75zw39WzLYYA=">
                <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
            </form>
        </div>
    </div>
</div>



<div class="col">
    <div class="card" style="width: 18rem;">
        <img src="https://media.istockphoto.com/id/1494273340/pt/foto/pizza-with-pepperoni-arugula-ketchup-tomatoes-and-cheese-in-a-plate-on-a-white-background.jpg?s=612x612&w=0&k=20&c=tImY3W2LwZeUvnLjc12fKq1S-NZXrSr75zw39WzLYYA=" class="card-img-top" alt="Frango Grelhado">
        <div class="card-body">
            <h5 class="card-title">Frango Grelhado</h5>
            <p class="card-text">Queijo, frango, requeijão, tomate, azeitona preta, orégano e manjericão.</p>
            <h3>R$79,90</h3>
            <form method="POST" action="{{ route('adicionar.carrinho') }}">
                @csrf
                <input type="hidden" name="nome" value="Frango Grelhado">
                <input type="hidden" name="preco" value="79.90">
                <input type="hidden" name="imagem" value="https://media.istockphoto.com/id/1494273340/pt/foto/pizza-with-pepperoni-arugula-ketchup-tomatoes-and-cheese-in-a-plate-on-a-white-background.jpg?s=612x612&w=0&k=20&c=tImY3W2LwZeUvnLjc12fKq1S-NZXrSr75zw39WzLYYA=">
                <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
            </form>
        </div>
    </div>
</div>



<div class="col">
    <div class="card" style="width: 18rem;">
        <img src="https://media.istockphoto.com/id/1494273340/pt/foto/pizza-with-pepperoni-arugula-ketchup-tomatoes-and-cheese-in-a-plate-on-a-white-background.jpg?s=612x612&w=0&k=20&c=tImY3W2LwZeUvnLjc12fKq1S-NZXrSr75zw39WzLYYA=" class="card-img-top" alt="Napolitana">
        <div class="card-body">
            <h5 class="card-title">Napolitana</h5>
            <p class="card-text">Queijo, tomate, orégano e parmesão ralado, azeitona, presunto.</p>
            <h3>R$69,90</h3>
            <form method="POST" action="{{ route('adicionar.carrinho') }}">
                @csrf
                <input type="hidden" name="nome" value="Napolitana">
                <input type="hidden" name="preco" value="69.90">
                <input type="hidden" name="imagem" value="https://media.istockphoto.com/id/1494273340/pt/foto/pizza-with-pepperoni-arugula-ketchup-tomatoes-and-cheese-in-a-plate-on-a-white-background.jpg?s=612x612&w=0&k=20&c=tImY3W2LwZeUvnLjc12fKq1S-NZXrSr75zw39WzLYYA=">
                <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
            </form>
        </div>
    </div>
</div>

<!--  -->

<div class="mb-5"></div>
<h2 class="text-center">Pizzas Doces</h2>
<div class="mb-5"></div>

<div class="col">
    <div class="card" style="width: 18rem;">
        <img src="https://img.freepik.com/fotos-premium/foto-de-estudio-de-uma-pizza-de-chocolate-em-um-fundo-branco-ia-geradora_63135-5991.jpg?w=900" class="card-img-top" alt="Chocolate com Morango">
        <div class="card-body">
            <h5 class="card-title">Chocolate com Morango</h5>
            <p class="card-text">Massa doce, chocolate ao leite, morangos frescos, chocolate.</p>
            <h3>R$29,90</h3>
            <form method="POST" action="{{ route('adicionar.carrinho') }}">
                @csrf
                <input type="hidden" name="nome" value="Chocolate com Morango">
                <input type="hidden" name="preco" value="29.90">
                <input type="hidden" name="imagem" value="https://img.freepik.com/fotos-premium/foto-de-estudio-de-uma-pizza-de-chocolate-em-um-fundo-branco-ia-geradora_63135-5991.jpg?w=900">
                <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
            </form>
        </div>
    </div>
</div>

<div class="col">
    <div class="card" style="width: 18rem;">
        <img src="https://img.freepik.com/fotos-premium/foto-de-estudio-de-uma-pizza-de-chocolate-em-um-fundo-branco-ia-geradora_63135-5991.jpg?w=900" class="card-img-top" alt="Banana com Canela">
        <div class="card-body">
            <h5 class="card-title">Banana com Canela</h5>
            <p class="card-text">Massa doce, banana, canela, açúcar mascavo.</p>
            <h3>R$39,90</h3>
            <form method="POST" action="{{ route('adicionar.carrinho') }}">
                @csrf
                <input type="hidden" name="nome" value="Banana com Canela">
                <input type="hidden" name="preco" value="39.90">
                <input type="hidden" name="imagem" value="https://img.freepik.com/fotos-premium/foto-de-estudio-de-uma-pizza-de-chocolate-em-um-fundo-branco-ia-geradora_63135-5991.jpg?w=900">
                <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
            </form>
        </div>
    </div>
</div>

<div class="col">
    <div class="card" style="width: 18rem;">
        <img src="https://img.freepik.com/fotos-premium/foto-de-estudio-de-uma-pizza-de-chocolate-em-um-fundo-branco-ia-geradora_63135-5991.jpg?w=900" class="card-img-top" alt="Nutella e Marshmallow">
        <div class="card-body">
            <h5 class="card-title">Nutella e Marshmallow</h5>
            <p class="card-text">Massa doce, Nutella, marshmallows.</p>
            <h3>R$39,90</h3>
            <form method="POST" action="{{ route('adicionar.carrinho') }}">
                @csrf
                <input type="hidden" name="nome" value="Nutella e Marshmallow">
                <input type="hidden" name="preco" value="39.90">
                <input type="hidden" name="imagem" value="https://img.freepik.com/fotos-premium/foto-de-estudio-de-uma-pizza-de-chocolate-em-um-fundo-branco-ia-geradora_63135-5991.jpg?w=900">
                <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
            </form>
        </div>
    </div>
</div>
    </div>
  </div>
</div>

<!--  -->

<div class="mb-5"></div>
<h2 class="text-center">Bebidas</h2>
<div class="mb-5"></div>

<div class="container text-center" id="Bebidas">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://suculentaburger.instantdelivery.com.br/_core/_uploads/331/2024/04/14392304240k913ggggf.jpg" style="max-height:220px" class="card-img-top" alt="Refrigerante Lata">
                <div class="card-body">
                    <h5 class="card-title">Refrigerante Lata (350 ml)</h5>
                    <p class="card-text">Bebida gaseificada refrescante, disponível em diversos sabores.</p>
                    <h3>R$4,50</h3>
                    <form method="POST" action="{{ route('adicionar.carrinho') }}">
                        @csrf
                        <input type="hidden" name="nome" value="Refrigerante Lata (350 ml)">
                        <input type="hidden" name="preco" value="4.50">
                        <input type="hidden" name="imagem" value="https://suculentaburger.instantdelivery.com.br/_core/_uploads/331/2024/04/14392304240k913ggggf.jpg">
                        <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem">
                <img src="https://www.padariapampulha.com.br/wp-content/uploads/2023/12/95587.png" class="card-img-top" alt="Suco Natural"  style="max-height:220px">
                <div class="card-body">
                    <h5 class="card-title">Suco Natural (1 L)</h5>
                    <p class="card-text">Suco 100% natural, sem conservantes, disponível em sabores variados.</p>
                    <h3>R$10,90</h3>
                    <form method="POST" action="{{ route('adicionar.carrinho') }}">
                        @csrf
                        <input type="hidden" name="nome" value="Suco Natural (1 L)">
                        <input type="hidden" name="preco" value="10.90">
                        <input type="hidden" name="imagem" value="https://www.padariapampulha.com.br/wp-content/uploads/2023/12/95587.png">
                        <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://static.paodeacucar.com/img/uploads/1/132/11825132.jpg" class="card-img-top" alt="Água Mineral (500 ml)" style="max-height:220px">
                <div class="card-body">
                    <h5 class="card-title">Água Mineral (500 ml)</h5>
                    <p class="card-text">Água mineral pura e refrescante, ideal para hidratação.</p>
                    <h3>R$2,50</h3>
                    <form method="POST" action="{{ route('adicionar.carrinho') }}">
                        @csrf
                        <input type="hidden" name="nome" value="Água Mineral (500 ml)">
                        <input type="hidden" name="preco" value="2.50">
                        <input type="hidden" name="imagem" value="https://static.paodeacucar.com/img/uploads/1/132/11825132.jpg">
                        <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mb-5"></div>


<button class="floating-button">
  <a href="/carrinho"><i class="bi bi-cart"></i></a>
    </button>

    <!-- Inclui o footer -->
    @include('templates.footer') <!-- Inclui o footer -->
    </body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
