<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="view/css/jogo.css" />

    <title>Jokenpô</title>
</head>

<body>
    <div id="areaJokenpo" class="container">

        <h1>Hora do jogo!</h1>

        <div id="areaJogador">
            <form action="index.php?classe=jogar&metodo=resultado" method="post">
                <div class="container-fluid">
                    <div class="row mb-4 pt-4">
                        <div class="col-md-4 col-sm-12 "> 
                            <h4 class="pb-3">Personagem</h4>
                            <div id="personagem" class="carousel slide gradiente m-auto" data-ride="carousel" data-interval="0">

                                <div class="carousel-inner center-block">

                                    <div class="carousel-item bloco active">
                                        <input type="radio" name="personagemEscolido" class="inputRadio" value="Samurai">
                                        <img class="mx-auto d-block imagens" src="view/images/samurai.jpg" alt="samurai" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Samurai</h5>
                                        </div>
                                        <input type="button" onclick="opcaoPersonagem('personagemEscolido',0)" class="confirmar" value="confirmar">
                                    </div>
                                    <div class="carousel-item bloco">
                                        <input type="radio" name="personagemEscolido" class="inputRadio" value="Naruto">
                                        <img class="mx-auto d-block imagens" src="view/images/naruto.jpg" alt="naruto" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Naruto</h5>
                                        </div>
                                        <input type="button" onclick="opcaoPersonagem('personagemEscolido',1)" class="confirmar" value="confirmar">

                                    </div>

                                    <div class="carousel-item bloco">
                                        <input type="radio" name="personagemEscolido" class="inputRadio" value="Sasuke">
                                        <img class="mx-auto d-block imagens" src="view/images/sasuke.jpg" alt="sasuke" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Sasuke</h5>
                                        </div>
                                        <input type="button" onclick="opcaoPersonagem('personagemEscolido',2)" class="confirmar" value="confirmar">
                                    </div>
                                    <div class="carousel-item bloco">
                                        <input type="radio" name="personagemEscolido" class="inputRadio" value="Sonic">
                                        <img class="mx-auto d-block imagens" src="view/images/sonic.jpg" alt="sonic" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Sonic</h5>
                                        </div>
                                        <input type="button" onclick="opcaoPersonagem('personagemEscolido',3)" class="confirmar" value="confirmar">
                                    </div>
                                    <div class="carousel-item bloco">
                                        <input type="radio" name="personagemEscolido" class="inputRadio" value="Monica">
                                        <img class="mx-auto d-block imagens" src="view/images/monica.jpg" alt="monica" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Monica</h5>
                                        </div>
                                        <input type="button" onclick="opcaoPersonagem('personagemEscolido',4)" class="confirmar" value="confirmar">
                                    </div>
                                    <div class="carousel-item bloco">
                                        <input type="radio" name="personagemEscolido" class="inputRadio" value="Magali">
                                        <img class="mx-auto d-block imagens" src="view/images/magali.jpg" alt="magali" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Magali</h5>
                                        </div>
                                        <input type="button" onclick="opcaoPersonagem('personagemEscolido',5)" class="confirmar" value="confirmar">
                                    </div>
                                    <div class="carousel-item bloco">
                                        <input type="radio" name="personagemEscolido" class="inputRadio" value="Cebolinha">
                                        <img class="mx-auto d-block imagens" src="view/images/cebolinha.jpg" alt="cebolinha" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Cebolinha</h5>
                                        </div>
                                        <input type="button" onclick="opcaoPersonagem('personagemEscolido',6)" class="confirmar" value="confirmar">
                                    </div>

                                    <div class="carousel-item bloco">
                                        <input type="radio" name="personagemEscolido" class="inputRadio" value="Cascão">
                                        <img class="mx-auto d-block imagens" src="view/images/cascao.jpg" alt="cascao" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Cascão</h5>
                                        </div>
                                        <input type="button" onclick="opcaoPersonagem('personagemEscolido',7)" class="confirmar" value="confirmar">
                                    </div>

                                    <div class="carousel-item bloco">
                                        <input type="radio" name="personagemEscolido" class="inputRadio" value="Florzinha">
                                        <img class="mx-auto d-block imagens" src="view/images/florzinha.jpg" alt="florzinha" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Florzinha</h5>
                                        </div>
                                        <input type="button" onclick="opcaoPersonagem('personagemEscolido',8)" class="confirmar" value="confirmar">
                                    </div>

                                    <div class="carousel-item bloco">
                                        <input type="radio" name="personagemEscolido" class="inputRadio" value="Lindinha">
                                        <img class="mx-auto d-block imagens" src="view/images/lindinha.jpg" alt="lindinha" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Lindinha</h5>
                                        </div>
                                        <input type="button" onclick="opcaoPersonagem('personagemEscolido',9)" class="confirmar" value="confirmar">
                                    </div>

                                    <div class="carousel-item bloco">
                                        <input type="radio" name="personagemEscolido" class="inputRadio" value="Docinho">
                                        <img class="mx-auto d-block imagens" src="view/images/docinho.jpg" alt="docinho" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Docinho</h5>
                                        </div>
                                        <input type="button" onclick="opcaoPersonagem('personagemEscolido',10)" class="confirmar" value="confirmar">
                                    </div>

                                    <a class="carousel-control-prev" href="#personagem" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon seta" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#personagem" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon seta" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <h4 class="pb-3">Batalha</h4>
                            <div class="versus gradiente m-auto">
                                <img class="mx-auto d-block imagens" src="view/images/versus.jpg" alt="imagem versus" />
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <h4 class="pb-3">Mestre</h4>
                            <div class="personagemMaquina gradiente m-auto">
                                <img class="mx-auto d-block imagens" src="view/images/mestre.jpg" alt="mestre" />
                            </div>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class=" col-md-4 col-sm-12">
                            <h4 class="pb-3">Opção Usúario:</h4>
                            <div id="opcaousuario" class="carousel slide gradiente m-auto" data-ride="carousel" data-interval="0">
                                <div class="carousel-inner center-block">
                                    <div class="carousel-item opcao active ">
                                        <input type="radio" name="opcaoEscolido" class="inputRadio" value="pedra">
                                        <img class="mx-auto d-block imagens" src="view/images/pedra.jpg" alt="pedra" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Pedra</h5>
                                        </div>
                                        <input type="button" onclick="opcaojokenpo('opcaoEscolido',0)" class="confirmar" value="confirmar">
                                    </div>
                                    <div class="carousel-item opcao">
                                        <input type="radio" name="opcaoEscolido" class="inputRadio" value="papel">
                                        <img class="mx-auto d-block imagens" src="view/images/papel.jpg" alt="papel" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Papel</h5>
                                        </div>
                                        <input type="button" onclick="opcaojokenpo('opcaoEscolido',1)" class="confirmar" value="confirmar">
                                    </div>
                                    <div class="carousel-item opcao">
                                        <input type="radio" name="opcaoEscolido" class="inputRadio" value="tesoura">
                                        <img class="mx-auto d-block imagens" src="view/images/tesoura.jpg" alt="tesoura" />
                                        <div class="carousel-caption d-block legenda">
                                            <h5>Tesoura</h5>
                                        </div>
                                        <input type="button" onclick="opcaojokenpo('opcaoEscolido',2)" class="confirmar" value="confirmar">
                                    </div>
                                    <a class="carousel-control-prev" href="#opcaousuario" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon seta" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#opcaousuario" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon seta" aria-hidden="true"></span>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12 align-self-center">
                            <input type="submit" name="jogar" id="jogar" value="jogar">
                        </div>

                        <div class=" col-md-4 col-sm-12">
                            <h4 class="pb-3">Opção Mestre:</h4>
                            <div class="opcaomaquina gradiente m-auto">
                                <img class="mx-auto d-block imagens" src="view/images/interrogacao.jpg"
                                    alt="interrogacao">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div id="areaResultado">
             <h1>Resultado</h1>
            <div id="personagemUsuario">
                <img src="view/images/<?=$ganhador[2].'.jpg';?>" alt="<?=$personagemUsuario;?>" />
            </div>
            <div class="versus">
                <img src="view/images/versus.jpg" alt="imagem versus" />
            </div>
            <div class="personagemMaquina">
                <img src="view/images/mestre.jpg" alt="mestre" />
            </div>
            <div id="opcaoEscolida">
                <img src="view/images/<?=$ganhador[3].'.jpg';?>" alt=" imagem <?=$ganhador[3]; ?>" />
            </div>
            <div class="opcaoMaquina">
                <img src="view/images/<?=$ganhador[4].'.jpg';?>" alt=" imagem <?=$ganhador[4]; ?>" />
            </div>
            <div id="ganhador">
                <h1><?=$ganhador[0]?></h1>
                <img src="view/images/<?=$ganhador[1].'.jpg';?>" alt="imagem <?=$ganhador[1]; ?>" />
            </div> 
        </div>
    </div>
    <footer>
        <p>&copy; Desenvolvido por Lucas akio</p>
       
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="view/javascript/atributos.js"></script>
</body>

</html>