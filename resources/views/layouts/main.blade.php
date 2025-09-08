<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/navbar.css">

    <script src="/js/script.js"></script>
</head>
<body>
    <header>
        <nav class="barra-navegacao">
            <div class="secao-logo">
                <img src="/images/logo.gif" alt="Logo Flamexs">
            </div>
            
            <div class="links-navegacao">
                <a href="/">Início</a>
                <a href="/produtos">Produtos</a>
                <a href="/sobre">Sobre nós</a>
                <a href="#faq">FAQ</a>
                <a href="/troca">Trocas e Devoluções</a>
                <a href="/contato">Contato</a>
            </div>
            
            <div class="secao-usuario">
                <a href="/login"><img src="/images/user.svg" alt="Usuário"></a>
                <a href="#" id="icone-carrinho" style="position: relative;">
                    <img src="/images/carrinho.svg" alt="Carrinho">
                    <span class="contador-carrinho" id="contador-carrinho">0</span>
                </a>
            </div>

            <button id="botao-menu-mobile" class="botao-menu-mobile">
                <span class="linha-menu"></span>
                <span class="linha-menu"></span>
                <span class="linha-menu"></span>
            </button>
        </nav>

        <div id="menu-mobile" class="menu-mobile">
            <div class="menu-mobile-conteudo">
                <a href="/">Início</a>
                <a href="/produtos">Produtos</a>
                <a href="/sobre">Sobre nós</a>
                <a href="#faq">FAQ</a>
                <a href="/troca">Trocas e Devoluções</a>
                <a href="/contato">Contato</a>
            </div>
        </div>
    </header>

    <main>
        <div class="container-fluid">
            @yield('content')
            <!-- Aqui ira ficar todo o conteudo da pagina que nao foi puxado da main -->
        </div>
    </main>


    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                {{-- O restante do seu código do footer entra aqui --}}
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 Flamexs. Todos os direitos reservados.</p>
                {{-- O restante do seu código do footer-bottom entra aqui --}}
            </div>
        </div>
    </footer>

</body>
</html>