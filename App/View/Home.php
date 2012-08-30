
<html>
    <head>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/jogo.css" rel="stylesheet"/>
        <script src="jquery.js" type="text/javascript" ></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jogo.js" type="text/javascript"></script>
        <script type="text/javascript">
            var baseUrl = "<?= APPLICATION_PATH ?>";
        </script>
    </head>
    <body>

        <div class ="container">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">

                        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!-- Be sure to leave the brand out there if you want it shown -->
                        <a class="brand" href="#">The Game</a>

                        <!-- Everything you want hidden at 940px or less, place within here -->
                        <div class="nav-collapse">
                            <!-- .nav, .navbar-search, .navbar-form, etc -->
                        </div>

                    </div>
                </div>
            </div>
            <div class ="page-header">
                <h1 class="pagination-centered">Jogo: Par ou Impar</h1>

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
                                        ?
                                    </div>
                                    <div class ="caption">
                                        <p class="warning">
                                            <a id="botao-proxima-carta" class="btn btn-primary" href="">Ver Carta</a>
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
                            <button data-dismiss="alert" class="close" type="button">×</button>
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
                        <button class="btn btn-large btn-primary" type="button" id="botao-par-1">Par</button>
                        <button class="btn btn-large" type="button" id="botao-impar-1">Impar</button>
                    </div>
                </div>
                <div class="span5 well escurecer">
                    <h2>Jogador 2</h2>
                    <span>Quantidade de Cartas: <span id="num-cartas-2" class="badge">0</span></span>
                    <br />
                    <br />
                    <div class="btn-group">
                        <button class="btn btn-large btn-primary" type="button" id="botao-par-2">Par</button>
                        <button class="btn btn-large" type="button" id="botao-impar-2">Impar</button>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>