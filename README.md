
# TurtlesPizza 

TurtlesPizza é um projeto de pizzaria desenvolvido em PHP, com o objetivo de oferecer uma experiência simples, moderna e intuitiva para os usuários. Este projeto visa simular o processo de pedido de pizzas online, proporcionando uma interface limpa e funcional, ideal para quem deseja aprender ou aprimorar habilidades em desenvolvimento web com PHP.
## ⚙️ Recursos do Sistema

- **Sistema de Pedidos de Pizza:** Permite que os usuários escolham suas pizzas preferidas e façam pedidos de forma prática.
- **Gestão de Menu:** O administrador pode adicionar, editar ou remover opções do menu.
- **Interface Responsiva:** Design adaptável para diferentes dispositivos (desktop, tablet, mobile).
- **Resumo do Pedido:** Exibe os itens escolhidos, preços e total antes da finalização.
- **Integração com Banco de Dados:** Gerencia informações como pedidos, clientes e opções do menu.

---

## 🛠️ Tecnologias Utilizadas

- **PHP**: Backend para o processamento e lógica do sistema.
- **HTML5 & CSS3**: Estrutura e design do frontend.
- **JavaScript**: Funcionalidades interativas e dinâmicas.
- **MySQL**: Banco de dados para armazenamento de informações.
- **Bootstrap** *(opcional)*: Para estilização responsiva.

---

## 🚀 Como Executar o Projeto

### 1. **Clone o Repositório**

Primeiro, faça o clone do repositório para o seu ambiente local. No terminal, execute o seguinte comando:

```bash
git clone https://github.com/seu-usuario/turtlespizza.git
```

### 2. **Instalar Dependências**

Caso ainda não tenha o Laravel instalado globalmente, execute o seguinte comando para instalá-lo:

```bash
composer global require laravel/installer
```

Depois, dentro do diretório do projeto, instale as dependências do projeto com:

```bash
composer install
```

### 3. **Configurar o Ambiente**

Em seguida, copie o arquivo `.env.example` para `.env`:

```bash
cp .env.example .env
```

Agora, gere a chave de aplicação do Laravel:

```bash
php artisan key:generate
```

### 4. **Configurar a Extensão Zip**

Para garantir que todas as funcionalidades do Laravel funcionem corretamente, habilite a extensão `zip` no PHP CLI. Siga os passos abaixo:

- Abra o arquivo `php.ini` do PHP CLI. No seu caso, ele está localizado em:

  ```
  C:\xampp\php\php.ini
  ```

- Procure pela linha:

  ```ini
  ;extension=zip
  ```

- Remova o ponto e vírgula (;) no início da linha para habilitar a extensão:

  ```ini
  extension=zip
  ```

- Salve o arquivo `php.ini` e reinicie o servidor Apache no XAMPP:

  - No painel do XAMPP, clique em **Stop** no Apache, depois em **Start** novamente.

- Verifique se a extensão foi ativada corretamente executando:

  ```bash
  php -m | findstr zip
  ```

  O comando deve listar a extensão `zip` se tudo estiver correto.

### 5. **Executar o Projeto**

Finalmente, para rodar o projeto, utilize o seguinte comando para iniciar o servidor embutido do Laravel:

```bash
php artisan serve
```

Isso iniciará o servidor local e você poderá acessar o projeto pelo endereço: `http://localhost:8000`.

---

Para mais detalhes e informações adicionais, **não se esqueça de ler o arquivo `READ.md` completo**.
# Projeto: Meu Estilo de Tema CSS

Este repositório contém um tema CSS com uma paleta de cores personalizável e tipografia elegante usando a fonte [Montserrat](https://fonts.google.com/specimen/Montserrat). É ideal para criar interfaces modernas e responsivas.

## 🎨 Paleta de Cores

| Nome da Cor       | Hexadecimal |
| ----------------- | ----------- |
| **Texto Principal** | ![#000000](https://via.placeholder.com/10/000000?text=+) `#000000` |
| **Texto Secundário** | ![#ffffff](https://via.placeholder.com/10/ffffff?text=+) `#ffffff` |
| **Cor Principal** | ![#ff7b00](https://via.placeholder.com/10/ff7b00?text=+) `#ff7b00` |
| **Principal Escuro** | ![#e66b00](https://via.placeholder.com/10/e66b00?text=+) `#e66b00` |
| **Principal Claro** | ![#fff1e6](https://via.placeholder.com/10/fff1e6?text=+) `#fff1e6` |
| **Cinza Claro**    | ![#f8f9fa](https://via.placeholder.com/10/f8f9fa?text=+) `#f8f9fa` |
| **Sombras Suave**  | `rgba(0, 0, 0, 0.05)`        

## 🛠️ Configuração

## 📂 Estrutura de Diretórios

```plaintext
turtlespizza/
├── public/               # Recursos públicos
│   ├── css/              # Arquivos CSS
│   ├── img/              # Imagens
│   ├── js/               # Scripts JavaScript
│   ├── lottie/           # Animações Lottie
│   └── orginals/         # Arquivos originais (assets brutos)
│
├── resources/            # Recursos do sistema
│   └── views/            # Arquivos de visualização
│       └── templates/    # Templates reutilizáveis (layouts, partials)
│
├── app/                  # Diretório do núcleo do aplicativo
│   ├── controllers/      # Controladores (lógica do negócio)
│   ├── models/           # Modelos (interação com o banco de dados)
│   └── routes/           # Rotas da aplicação
│
├── config/               # Arquivos de configuração
├── database/             # Scripts e migrações do banco de dados
├── index.php             # Arquivo principal para inicialização
└── turtlespizza.sql      # Dump do banco de dados
```
## 🌐 Páginas do Sistema

Aqui está a lista de páginas do sistema, com suas respectivas funções:

- **Página Inicial (`/`)**  
  - Exibe a página inicial com informações gerais e destaque para o serviço.

- **Página de Cadastro (`/cadastro`)**  
  - Exibe o formulário de cadastro para novos usuários.

- **Página de Login (`/login`)**  
  - Exibe o formulário de autenticação para usuários existentes.

- **Página Sobre Nós (`/sobre`)**  
  - Apresenta informações sobre a empresa, missão e valores.

- **Dashboard (`/dashboard`)**  
  - Área restrita ao cliente, exibindo informações personalizadas e funcionalidades exclusivas.

- **Cardápio de Produtos (`/cardapio`)**  
  - Apresenta o menu de pizzas e produtos disponíveis para pedidos. Nome da rota: `produtos`.
## ⚠️ **Observações Importantes**

### 🚧 **Sistema em Desenvolvimento**

Este projeto é um **protótipo funcional** e, no momento, **não está integrado ao banco de dados** nem está salvando dados localmente. Durante o desenvolvimento, enfrentamos alguns erros que impedem a persistência de dados. Portanto, **o sistema funciona de maneira simulada**: o fluxo de pedidos e a interação com a área do cliente estão implementados, mas **nenhuma informação é salva permanentemente**.

### 🛠️ **O que está funcionando:**

- **Sistema de Pedidos**: O fluxo de pedidos está completamente funcional, simulando a experiência de compra. O usuário pode adicionar produtos ao carrinho, visualizar o pedido e simular a finalização da compra, mas **nenhuma informação é armazenada**.
- **Área do Cliente**: A área do cliente pode ser acessada manualmente. Nela, é possível visualizar um resumo do pedido e interagir com o sistema. Contudo, **os pedidos não são salvos**, nem no banco de dados, nem localmente.

### ⚡ **Como funciona a Área do Cliente** (Exemplo Estático):

- **Seleção de Produtos**: O usuário escolhe os itens do cardápio, como pizzas e bebidas, e os adiciona ao carrinho.
- **Carrinho de Compras**: Após adicionar os itens, o usuário visualiza o carrinho com os produtos selecionados e pode editar a quantidade ou remover itens.
- **Resumo do Pedido**: O sistema exibe um resumo do pedido, mostrando os itens, o total da compra e uma simulação do processo de checkout.
- **Finalização do Pedido**: O usuário pode simular a finalização da compra, com a escolha de opções de pagamento e a confirmação do pedido.

**Importante**: Apesar de o sistema simular todo o fluxo de compra, **nenhuma informação é salva** no banco de dados ou localmente. Ao concluir o processo, o pedido será "perdido" e não poderá ser recuperado. O sistema é um protótipo funcional para demonstrar como a interface e o fluxo de pedidos devem funcionar.

### ⚡ **O que falta implementar:**

- **Integração com Banco de Dados**: A integração com o banco de dados, para armazenar pedidos e informações dos clientes, ainda não foi implementada.
- **Persistência de Dados**: No momento, as informações inseridas são temporárias e **não são armazenadas** permanentemente, o que significa que todos os pedidos são apagados ao final da sessão.
- **Recursos Avançados**: Recursos como autenticação de usuários, histórico de pedidos e personalização ainda estão em desenvolvimento.

### 🔄 **Próximos Passos:**

Estamos trabalhando para corrigir os erros e **implementaremos a persistência de dados em breve**, o que permitirá ao sistema salvar pedidos e informações do cliente permanentemente. Além disso, pretendemos adicionar **funcionalidades avançadas**, como:

- Armazenamento de pedidos e informações de clientes.
- Autenticação e gerenciamento de usuários.
- Melhorias na interface e usabilidade.

### 💡 **Importante:** 

Este é apenas um **protótipo de como o sistema deve funcionar**. O layout está pronto e reflete o design final esperado. No entanto, por enquanto, o sistema **não armazena pedidos** — apenas simula o processo de compra de forma interativa.

Agradecemos a paciência e compreensão. **Em breve, teremos atualizações significativas que tornarão o sistema totalmente funcional!**
