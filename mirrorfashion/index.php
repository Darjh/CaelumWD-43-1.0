<!DOCTYPE html>
<html>
    <head>

        <!--[if lt IE 9]>
	        <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container" id="aviso1" >
            <h1>!!!AVISO!!!</h1>
                <p>Este Site é apenas produto de estudo do curso de Desenvolvimento Web, em andamento.
                    Agradeço a compreensão.
                </p>
        </div>
        
        <?php 
            $cabecalho_title = "Home";
            include("cabecalho.php"); 
        ?>

        <div class="container destaque">
            <section class="busca">
                <h2>Busca</h2>

                <form>
                    <input type="search">
                    <input type="image" src="img/busca.png">
                </form>
            </section><!-- fim .busca -->

            <section class="menu-departamentos">
                <h2>Departamentos</h2>

                <nav>
                    <ul>
                        <li>
                            <a href="#">Blusas e Camisas</a>
                            <ul>
                                <li><a href="#">Manga Curta</a></li> 
                                <li><a href="#">Manga Comprida</a></li> 
                                <li><a href="#">Camisa Social</a></li> 
                                <li><a href="#">Camisa Casual</a></li> 
                            </ul>
                        </li>

                        <li><a href="#">Calças</a></li>
                        <li><a href="#">Saias</a></li>
                        <li><a href="#">Vestidos</a></li>
                        <li><a href="#">Sapatos</a></li>
                        <li><a href="#">Bolsas e Carteiras</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
                </nav>
            </section><!-- fim .menu-departamentos-->

            <img src="img/destaque-home.png" alt="Promoçao: Big City Night">
        </div><!-- fim .container .destaque -->

        <div class="container paineis">
            <section class="painel novidades">
                <h2>Novidades</h2>
                <ol>

                    <!--Primeiro Produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <!--Segundo Produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura2.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <!--Terceiro Produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura3.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <!--Quarto Produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura4.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <!--Quinto Produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura5.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <!--Sexto Produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura6.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>

            <section class="painel mais-vendidos">
                <h2>Mais Vendidos</h2>
                <ol>

                    <!--Primeiro Produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura7.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <!--Segundo Produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura8.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <!--Terceiro Produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura9.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <!--Quarto Produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura10.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <!--Quinto Produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura11.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <!--Sexto Produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura12.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>
        </div>

        <?php
            $rodape_cope = '<p class="dir"> &COPY All rights reserved Mirror Fashion 2020 </p>';
            include("rodape.php"); 
        ?>

    </body>
</html>