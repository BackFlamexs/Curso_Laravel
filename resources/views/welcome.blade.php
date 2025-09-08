@extends('layouts.main')

@section('title', 'Página Inicial')

@section('content')

   <!-- Hero Banner -->
    <div id="carrossel-container">
        <div id="carrossel-banners">
            <div class="banner-slide ativo">
                <img src="./images/banner3.png" alt="Banner 1">
            </div>
            <div class="banner-slide">
                <img src="./images/banner2.png" alt="Banner 2">
            </div>
            <div class="banner-slide">
                <img src="./images/banner.png" alt="Banner 3">
            </div>
        </div>
        
        <div id="indicadores-carrossel">
            <span class="indicador ativo" data-slide="0"></span>
            <span class="indicador" data-slide="1"></span>
            <span class="indicador" data-slide="2"></span>
        </div>
        
        <button id="botao-anterior" class="botao-navegacao">&lt;</button>
        <button id="botao-proximo" class="botao-navegacao">&gt;</button>

    </div>

            <!-- Faixa de Frete Grátis -->
    <div id="faixa-frete-gratis" class="faixa-frete-gratis">
        <div class="conteudo-faixa-rolante">
            <span class="texto-frete">FRETE GRÁTIS PARA COMPRAS ACIMA DE R$599</span>
            <span class="texto-frete">FRETE GRÁTIS PARA COMPRAS ACIMA DE R$599</span>
            <span class="texto-frete">FRETE GRÁTIS PARA COMPRAS ACIMA DE R$599</span>
            <span class="texto-frete">FRETE GRÁTIS PARA COMPRAS ACIMA DE R$599</span>
            <span class="texto-frete">FRETE GRÁTIS PARA COMPRAS ACIMA DE R$599</span>
            <span class="texto-frete">FRETE GRÁTIS PARA COMPRAS ACIMA DE R$599</span>
            <span class="texto-frete">FRETE GRÁTIS PARA COMPRAS ACIMA DE R$599</span>
            <span class="texto-frete">FRETE GRÁTIS PARA COMPRAS ACIMA DE R$599</span>
            <span class="texto-frete">FRETE GRÁTIS PARA COMPRAS ACIMA DE R$599</span>
            <span class="texto-frete">FRETE GRÁTIS PARA COMPRAS ACIMA DE R$599</span>
            <span class="texto-frete">FRETE GRÁTIS PARA COMPRAS ACIMA DE R$599</span>
            <span class="texto-frete">FRETE GRÁTIS PARA COMPRAS ACIMA DE R$599</span>
        </div>
    </div>

    <!-- Categorias -->
    <div class="container-categorias">
        <h1>CATEGORIAS</h1>
        <section class="secao-categorias">
            <div class="carrossel-categorias">
                <div class="lista-categorias">
                    <div class="primeira-linha">
                        <div class="card-categoria">
                            <a href="#"><img src="./images/camisetas.png" alt="Camisetas"></a>
                        </div>
                        <div class="card-categoria">
                            <a href="#"><img src="./images/regatas.png" alt="Regatas"></a>
                        </div>
                        <div class="card-categoria">
                            <a href="#"><img src="./images/blusas.png" alt="Blusas"></a>
                        </div>
                    </div>
                    <div class="segunda-linha">
                        <div class="card-categoria">
                            <a href="#"><img src="./images/calças.png" alt="Calças"></a>
                        </div>
                        <div class="card-categoria">
                            <a href="#"><img src="./images/shorts.png" alt="Shorts"></a>
                        </div>
                    </div>
                </div>
                
                <div class="mini-botoes-categoria">
                    <button class="mini-botao proximo" id="mini-proximo">›</button>
                </div>
            </div>
        </section>
    </div>

    <!-- Produtos -->
    <section id="sessao-produtos">
        <h2 class="titulo-produtos">PRODUTOS</h2>
        <div class="grid-produtos">
            <div class="produto">
                <div class="produto-imagem-container">
                    <a href="/produto/1">
                        <img src="./images/cocada.png" alt="Produto 1" class="produto-imagem">
                    </a>
                </div>
                <div class="produto-info">
                    <h3 class="produto-nome"><a href="/produto/1">C0CADA ZIP UP</a></h3>
                    <p class="produto-preco">R$ 49,90</p>
                    <p class="produto-tamanhos">P, M, G, GG</p>
                </div>
                <div class="produto-botoes">
                    <button class="botao-comprar">COMPRAR AGORA</button>
                    <button class="botao-carrinho">ADICIONAR AO CARRINHO</button>
                </div>
            </div>
            
            <div class="produto">
                <div class="produto-imagem-container">
                    <img src="./images/1.png" alt="Produto 2" class="produto-imagem">
                </div>
                <div class="produto-info">
                    <h3 class="produto-nome">REGATA ESPORTIVA</h3>
                    <p class="produto-preco">R$ 39,90</p>
                    <p class="produto-tamanhos">P, M, G</p>
                </div>
                <div class="produto-botoes">
                    <button class="botao-comprar">COMPRAR AGORA</button>
                    <button class="botao-carrinho">ADICIONAR AO CARRINHO</button>
                </div>
            </div>
            
            <div class="produto">
                <div class="produto-imagem-container">
                    <img src="./images/1.png" alt="Produto 3" class="produto-imagem">
                </div>
                <div class="produto-info">
                    <h3 class="produto-nome">BLUSA FEMININA</h3>
                    <p class="produto-preco">R$ 59,90</p>
                    <p class="produto-tamanhos">PP, P, M, G</p>
                </div>
                <div class="produto-botoes">
                    <button class="botao-comprar">COMPRAR AGORA</button>
                    <button class="botao-carrinho">ADICIONAR AO CARRINHO</button>
                </div>
            </div>
            
            <div class="produto">
                <div class="produto-imagem-container">
                    <img src="./images/1.png" alt="Produto 4" class="produto-imagem">
                </div>
                <div class="produto-info">
                    <h3 class="produto-nome">CALÇA JEANS</h3>
                    <p class="produto-preco">R$ 89,90</p>
                    <p class="produto-tamanhos">36, 38, 40, 42, 44</p>
                </div>
                <div class="produto-botoes">
                    <button class="botao-comprar">COMPRAR AGORA</button>
                    <button class="botao-carrinho">ADICIONAR AO CARRINHO</button>
                </div>
            </div>
          
       
     </div>
    </section>

    <!-- FAQ -->
    <section id="faq">
        <div class="container-faq">
            <div class="faq-header">
                <h2 class="faq-titulo">PERGUNTAS FREQUENTES</h2>
                <p class="faq-descricao">Encontre respostas para as perguntas mais comuns sobre nossos produtos e processo de compra.</p>
            </div>
            
            <div class="faq-lista">
                <div class="faq-item">
                    <button class="faq-pergunta" data-faq="1">
                        <span>Quais formas de pagamento a loja aceita?</span>
                        <span class="faq-icone">▼</span>
                    </button>
                    <div class="faq-resposta" id="faq-1">
                        <p>Aceitamos cartões de crédito, débito, PIX e boleto bancário.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-pergunta" data-faq="2">
                        <span>Quanto tempo demora para meu pedido chegar?</span>
                        <span class="faq-icone">▼</span>
                    </button>
                    <div class="faq-resposta" id="faq-2">
                        <p>O prazo de entrega varia de acordo com a sua região. Normalmente, as entregas levam entre 3 a 10 dias úteis após a confirmação do pagamento.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-pergunta" data-faq="3">
                        <span>Posso trocar ou devolver um produto?</span>
                        <span class="faq-icone">▼</span>
                    </button>
                    <div class="faq-resposta" id="faq-3">
                        <p>Sim! Você pode solicitar a troca ou devolução em até 7 dias corridos após o recebimento do pedido, desde que a peça esteja sem uso e com etiqueta.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-pergunta" data-faq="4">
                        <span>Como descubro meu tamanho ideal?</span>
                        <span class="faq-icone">▼</span>
                    </button>
                    <div class="faq-resposta" id="faq-4">
                        <p>Disponibilizamos uma tabela de medidas em cada produto para ajudar na escolha. Se ainda tiver dúvidas, nossa equipe de atendimento pode auxiliar.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-pergunta" data-faq="5">
                        <span>Vocês oferecem frete grátis?</span>
                        <span class="faq-icone">▼</span>
                    </button>
                    <div class="faq-resposta" id="faq-5">
                        <p>Sim, oferecemos frete grátis em compras acima de R$ 599,00.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal do Carrinho -->
    <div class="modal-overlay" id="modal-carrinho">
        <div class="modal-carrinho">
            <div class="modal-header">
                <h2 class="modal-titulo">CARRINHO DE COMPRAS</h2>
                <button class="modal-fechar" id="fechar-modal">&times;</button>
            </div>
            
            <div class="modal-body" id="carrinho-conteudo">
                <div class="carrinho-vazio" id="carrinho-vazio">
                    <p>Seu carrinho está vazio</p>
                </div>
                
                <div class="carrinho-itens" id="carrinho-itens" style="display: none;">
                    <!-- Itens do carrinho serão inseridos aqui via JavaScript -->
                </div>
            </div>
            
            <div class="carrinho-resumo" id="carrinho-resumo" style="display: none;">
                <div class="subtotal">
                    <p class="subtotal-titulo">Subtotal</p>
                    <p class="subtotal-info">(sem frete)</p>
                    <p class="subtotal-valor" id="subtotal-valor">R$ 0,00</p>
                </div>
                
                <div class="carrinho-acoes">
                    <button class="btn-iniciar-compra">INICIAR A COMPRA</button>
                    <button class="btn-continuar-comprando" id="continuar-comprando">CONTINUAR COMPRANDO</button>
                </div>
            </div>
        </div>
    </div>

@endsection