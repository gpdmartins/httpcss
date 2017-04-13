<!--
<!DOCTYPE html>
<html>
    <head>
        <title>Mirror Fashion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilos.css">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    </head>

<body>
    <header class="container">
        <h1><img src="img/logo.png" alt="Mirror Fashion"></h1>
        <p class="sacola">Nenhum item na sacola de compras</p>
        <nav class ="menu-opcoes">
            <ul>
                <li><a href="#">Sua Conta</a></li>
                <li><a href="#">Lista de Desejos</a></li>
                <li><a href="#">Cartão Fidelidade</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </nav>
    </header>
    -->
    <?php 
    $cabecalho_title = "Mirror Fashion";
    include("cabecalho.php"); ?>
    <div class="container destaque">
            <section class="busca">
                <h2>Busca</h2>
        <form >
            <input type="search">
            <input type="image" src="img/busca.png" class="lupa">

        </form>
            </section>
            <section class="menu-departamentos">
                <h2>Departamentos</h2>
                <nav>    
                    <ul>
                        <li><a href="#">blusas e camisas</a>
                            <ul>
                                <li><a href="#">Manga curta</a></li>
                                <li><a href="#">Manga comprida</a></li>
                                <li><a href="#">Camisa social</a></li>
                                <li><a href="#">Camisa casual</a></li>
                            </ul>
                        </li>
                        <li><a href="#">calças</a></li>
                        <li><a href="#">saias</a></li>
                        <li><a href="#">vestidos</a></li>
                        <li><a href="#">sapatos</a></li>
                        <li><a href="#">bolsas e carteiras</a></li>
                        <li><a href="#">Acessorios</a></li>
                    </ul>
                </nav>
            </section> <!-- fim menu departamentos -->
            <img src="img/destaque-home.png" alt="Promoção: Big City Night">
    </div><!--fim do container destaque -->       
    <section id="main">
        <div class ="container paineis">
            <!-- paoineis de novidades e mais vendidos -->
            <section class="painel novidades">
                <h2>Novidades</h2>
                <ol>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura2.png">
                                <figcaption>Brusinha Caveira por R$ 99,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                   
                                <img src="img/produtos/miniatura3.png">
                                <figcaption>Casaco verde por R$ 9,90</figcaption>
                            </figure>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura4.png">
                                <figcaption>Salva-vidas Sueco por R$ 27,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura5.png">
                                <figcaption>Blusa Ginastica por R$42,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura6.png">
                                <figcaption>Vestido Rosa por R$ 12,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section> <!-- fim do painel novidades -->
            <section class="painel mais-vendidos">
                <h2>Mais Vendidos</h2>
                <ol>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura9.png">
                                <figcaption>Festa Junina por R$ 9,90</figcaption>
                            </figure>
                        </a>
                    </li>
<li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura2.png">
                                <figcaption>Brusinha Caveira por R$ 99,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura10.png">
                                <figcaption>Loira Rosa por R$ 91,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura4.png">
                                <figcaption>Salva-vidas Sueco por R$ 27,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura5.png">
                                <figcaption>Blusa Ginastica por R$42,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura6.png">
                                <figcaption>Vestido Rosa por R$ 12,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section> <!-- fim do painel mais-vendidos-->
        </div>
    </section>
    <!--
    <footer>

        <div class="container">
        <img src="img/logo-rodape.png" alt="Logo Mirror Fashion">
        <ul class="social">
            <li> <a href="http://facebook.com/mirrorfashion"></a></li>
            <li> <a href="http://twitter.com/mirrorfashion"></a></li>
            <li> <a href="http://plus.google.com/mirrorfashion"></a></li>
        </ul>
        </div>
    </footer>
-->
<?php include("rodape.php") ?>
</body>

</html>