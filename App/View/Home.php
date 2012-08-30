
<html>
    <head>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="jquery.js" type="text/javascript" ></script>
        <script src="js/jogo.js" type="text/javascript"></script>
    </head>
    <body>
        <div class ="container">
            <div class ="page-header">
                <h1 class="offset3">Jogo: Par ou Impar</h1>
                <div class ="btn-group">
                    <button class ="btn-primary">Iniciar o jogo</button>
                </div>
            </div>
            <div class ="span12">
                <div class="pagination-centered thumbnail">
                    <div class="row-fluid">
                        <ul class="">
                            <li class="span4">
                                <div class ="thumbnail">
                                    <h2>Baralho</h2>
                                    <img alt="baralho" src ="img/playcard.png">
                                    <div class ="caption">
                                        <p class="warning">
                                            <a id="botao-proxima-carta" class="btn btn-primary" href="#">Proxima Carta</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="span4">
                                <div class="thumbnail" id ="descarte">
                                    <h1>
                                        Descarte
                                    </h1>


                                </div>
                            </li>

                        </ul>


                        <p class="span10" class="warning">Vez do jogador: <span id="jogadorAtual">Jogador 1</span></p>


                    </div>
                </div>


            </div>
            <div class ="span5">
                <h2>Jogador 1</h2>
                <div class="btn-group">
                    <button class="btn-large" id="par1">PAR</button>
                    <button class="btn-large" id="impar1">IMPAR</button>
                </div>
                <p></p>
            </div>
            <div class ="span5">
                <h2>Jogador 2</h2>
                <div class="btn-group">
                    <button class="btn-large" id="par2">PAR</button>
                    <button class="btn-large" id="impar2">IMPAR</button>
                </div>
                <p></p>
            </div>

        </div>
    </body>
</html>