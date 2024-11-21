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

    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        
<div class="container my-5">
    <h1 class="text-center">Carrinho</h1>
    @if (count($carrinho) > 0)
        <div class="row">
            @foreach ($carrinho as $index => $item)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $item['imagem'] }}" class="card-img-top" alt="{{ $item['nome'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['nome'] }}</h5>
                            <h3>R${{ number_format($item['preco'], 2, ',', '.') }}</h3>
                            <!-- Botão de Remover -->
                            <form action="{{ route('remover.carrinho') }}" method="POST" style="display:inline;">
                                @csrf
                                <input type="hidden" name="index" value="{{ $index }}">
                                <button type="submit" class="btn btn-danger">Remover</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center">Seu carrinho está vazio.</p>
    @endif
    <div class="text-center my-3">
        <a href="{{ route('produtos') }}" class="btn btn-secondary">Voltar aos Produtos</a>

        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Finalizar</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Finalizar Pedido</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('finalizar.pedido') }}" method="POST" id="formFinalizarPedido">
                    @csrf

                    <h3 class="my-4">Carrinho:</h3>
                    <?php
                        $total = 0;
                    ?>
                    @foreach ($carrinho as $item)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['nome'] }}</h5>
                                <p>Preço: R$ {{ number_format($item['preco'], 2, ',', '.') }}</p>
                            </div>
                        </div>
                        <?php
                            $total += $item['preco'];
                        ?>
                    @endforeach
                    <h3>Total: R$ {{ number_format($total, 2, ',', '.') }}</h3>

                    <div class="form-group mt-3">
                        <label for="pagamento">Forma de Pagamento</label>
                        <select class="form-select" aria-label="Default select example" required>
                        <option selected></option>
                        <option value="1">Dinheiro</option>
                        <option value="2">Cartão de Crédito</option>
                        <option value="3">Pix</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">

                        <label for="endereco">Endereço de Entrega</label>
                        <div class="input-group mb-3">
                        <input type="text"  id="endereco" class="form-control" placeholder="Rua" aria-label="Username" required  >
                        <span class="input-group-text">Nº</span>
                        <input type="number" class="form-control" placeholder="000" aria-label="Server" required>
                        </div>

                        <label for="Contato">Contato</label>
                        <input class="form-control" id="Contato" type="text" placeholder="Número de Telefone" aria-label="default input example" required>


                        <label for="Obs">Obrservacao</label>
                        <textarea class="form-control" id="Obs"  name="endereco" rows="4" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success" form="formFinalizarPedido">Finalizar Pedido</button>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

<div class="mb-5"></div>


</body>
</html>


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </html>
