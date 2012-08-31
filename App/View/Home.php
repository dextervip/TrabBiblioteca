
<html>
    <head>
        <meta charset="utf-8" />
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/jogo.css" rel="stylesheet"/>
        <script src="jquery.js" type="text/javascript" ></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jogo.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
            var baseUrl = "<?= APPLICATION_PATH ?>";
        </script>
    </head>
    <body>

        <div class ="container">

            <div class="navbar-inner">

                <div class="pagination-centered">
                    <div class="">
                        <a class="navbar" href=""><h2> Jogo: Par ou Impar </h2></a>                    
                    </div>
                </div>
            </div>

            <div class ="page-header">
            </div>

            <div class ="span12">
                <div class="pagination-centered">
                    <div class="row-fluid">
                        <h3>Quantidade de Cartas Restantes: <span id="cartas-restantes">52</span></h3>
                        <ul class="">
                            <li class="span4">
                                <div class ="thumbnail pagination-centered">
                                    <h2>Baralho</h2>
                                    <div id="carta" naipe="copas" valor="A">
                                        <div id="carta-valor" style="margin-top:100px;">?</div>
                                    </div>
                                    <div class ="caption">
                                        <p class="warning">
                                            <a id="botao-ver-carta" class="btn btn-primary" href="">Ver Carta</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="span4">
                                <div class="thumbnail" id ="descarte">
                                    <h1>
                                        Descarte
                                    </h1>
                                    <span id="num-cartas-descarte">0</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <br />

                    <div id="alerta">
                        <div class="alert alert-block alert-error fade in">
                            <h4 class="alert-heading" id="alerta-titulo">Oh snap! You got an error!</h4>
                            <p id="alerta-texto">Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </div>

                    <div class="alert alert-info">
                        Vez do jogador: <span id="jogadorAtual">Jogador <span id="idJogadorAtual">1</span> </span>
                    </div>
                    <div class ="btn-group" style="margin: 0 auto;">
                        <button id="botao-iniciar-jogo" class="btn btn-primary">Novo Jogo</button>
                    </div>
                </div>
            </div>
            <div class="span12 pagination-centered" style="margin-top: 20px;">
                <div class="span2"> </div>
                <div class="span5 well">
                    <h2>Jogador 1</h2>
                    <span>Quantidade de Cartas: <span id="num-cartas-1" class="badge">0</span></span>
                    <br />
                    <br />
                    <div class="btn-group">
                        <button id="botao-par-1" class="btn btn-large btn-primary botao-par" type="button">Par</button>
                        <button id="botao-impar-1" class="btn btn-large botao-impar" type="button">Impar</button>
                    </div>
                </div>
                <div class="span5 well">
                    <h2>Jogador 2</h2>
                    <span>Quantidade de Cartas: <span id="num-cartas-2" class="badge">0</span></span>
                    <br />
                    <br />
                    <div class="btn-group">
                        <button id="botao-par-2" class="btn btn-large btn-primary botao-par" type="button">Par</button>
                        <button id="botao-impar-2" class="btn btn-large botao-impar" type="button">Impar</button>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>