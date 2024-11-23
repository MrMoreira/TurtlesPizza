<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/root.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/clientarea.css') }}"> <!-- Inclui o CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
    <title>Dashboard Cliente - Pizzaria</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    </head>
    <body>
        @include('templates.navbar') <!-- Inclui a navbar -->
        <div class="header">
            <div class="container">
                <h1>Dashboard do Cliente</h1>
                <p>Bem-vindo de volta, João Silva!</p>
            </div>
        </div>
        
        <div class="container">
            <div class="stats">
                <div class="stat-card">
                    <i class="fas fa-pizza-slice"></i>
                    <div class="number">15</div>
                    <div class="label">Pedidos Realizados</div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-heart"></i>
                    <div class="number">4</div>
                    <div class="label">Pizzas Favoritas</div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-money-bill-wave"></i>
                    <div class="number">R$ 650</div>
                    <div class="label">Total em Pedidos</div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-star"></i>
                    <div class="number">4.9</div>
                    <div class="label">Avaliação Média</div>
                </div>
            </div>

            <div class="main-content">
                <div class="card">
                    <h2><i class="fas fa-user-circle"></i> Informações Pessoais</h2>
                    <div class="info-grid">
                        <div class="info-item">
                            <strong>Nome Completo</strong>
                            João Silva Santos
                        </div>
                        <div class="info-item">
                            <strong>Email</strong>
                            joao.silva@email.com
                        </div>
                        <div class="info-item">
                            <strong>Telefone</strong>
                            (11) 98765-4321
                        </div>
                        <div class="info-item">
                            <strong>CPF</strong>
                            XXX.XXX.XXX-XX
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h2><i class="fas fa-map-marker-alt"></i> Endereço de Entrega</h2>
                    <div class="info-grid">
                        <div class="info-item">
                            <strong>Endereço</strong>
                            Rua das Flores, 123
                        </div>
                        <div class="info-item">
                            <strong>Bairro</strong>
                            Jardim das Pizzas
                        </div>
                        <div class="info-item">
                            <strong>Cidade</strong>
                            São Paulo - SP
                        </div>
                        <div class="info-item">
                            <strong>Complemento</strong>
                            Apto 42, Bloco B
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <h2><i class="fas fa-history"></i> Histórico de Pedidos</h2>
                <table class="orders-table">
                    <thead>
                        <tr>
                            <th>Nº Pedido</th>
                            <th>Data</th>
                            <th>Itens</th>
                            <th>Valor</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Nº Pedido">#1236</td>
                            <td data-label="Data">23/11/2024 - 19:30</td>
                            <td data-label="Itens">
                                <div class="order-items">
                                    <span class="order-item">1x Pizza Margherita (G)</span>
                                    <span class="order-item">1x Pizza Pepperoni (M)</span>
                                    <span class="order-item">2x Refrigerante 2L</span>
                                </div>
                            </td>
                            <td data-label="Valor"><span class="price-tag">R$ 149,90</span></td>
                            <td data-label="Status"><span class="status status-novo"><i class="fas fa-circle"></i> Novo</span></td>
                        </tr>
                        <tr>
                            <td data-label="Nº Pedido">#1235</td>
                            <td data-label="Data">22/11/2024 - 20:15</td>
                            <td data-label="Itens">
                                <div class="order-items">
                                    <span class="order-item">1x Pizza Calabresa (G)</span>
                                    <span class="order-item">1x Borda Recheada</span>
                                </div>
                            </td>
                            <td data-label="Valor"><span class="price-tag">R$ 89,90</span></td>
                            <td data-label="Status"><span class="status status-preparo"><i class="fas fa-circle"></i> Em preparo</span></td>
                        </tr>
                        <tr>
                            <td data-label="Nº Pedido">#1234</td>
                            <td data-label="Data">21/11/2024 - 19:45</td>
                            <td data-label="Itens">
                                <div class="order-items">
                                    <span class="order-item">1x Pizza Portuguesa (G)</span>
                                    <span class="order-item">1x Refrigerante 2L</span>
                                </div>
                            </td>
                            <td data-label="Valor"><span class="price-tag">R$ 79,90</span></td>
                            <td data-label="Status"><span class="status status-entregue"><i class="fas fa-check-circle"></i> Entregue</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @include('templates.footer') <!-- Inclui o footer -->
    </body>
</html>
