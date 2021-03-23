<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->

        <div class="main-content container-fluid">
            <div class="page-title">

                <h2 class="font-bold">3.1 - O Conceito de Ator Social e as Características do Jogo Social</h2>
                <hr class="pontLaranja">

                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <p class="Texto">
                                Ator social é uma pessoa, grupo ou organização que participa de
                                algum “<strong>jogo social</strong>”, que possui um projeto político, controla algum
                                recurso relevante, tem, acumula (ou desacomoda) forças no seu decorrer e
                                possui, portanto, capacidade de produzir fatos capazes de viabilizar seu
                                projeto (MATUS, 1996).
                            </p>
                            <p class="Texto">
                                Todo ator social (com projeto e capacidade de produzir fatos no jogo)
                                é capaz de fazer pressão para alcançar seus objetivos, podendo acumular
                                força, gerar e mudar estratégias para converter-se num centro criativo de
                                acumulação de poder. O diagnóstico inicial de problemas, que conformam
                                uma situação-problema a ser enfrentada por um ator, pode ser visto como o
                                resultado do jogo realizado por um conjunto de atores num momento
                                pretérito.
                            </p>
                        </div>
                        <div class="col">
                            <img src="imagens/imagem06.png" class="img-fluid wow fadeIn" alt="Responsive image">
                        </div>
                    </div>
                </div>
                <hr>

                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <p class="Texto">
                                É possível caracterizar o agir social como um jogo que pode ser de
                                natureza cooperativa ou conflitiva. Num jogo social, diferentes jogadores
                                têm perspectivas que podem ser comuns ou divergentes e controlam
                                recursos que estão distribuídos entre os jogadores segundo suas histórias
                                de acumulação de forças em jogos anteriores. Um conjunto de jogos
                                sociais conforma um contexto que pode ser entendido como um sistema
                                social. Mas, diferentemente de jogos esportivos, por exemplo, no jogo
                                social, ou no jogo político que tipicamente ocorre nas atividades de PEG,
                                as regras do jogo podem alterar-se em função de jogadas e de acumulações
                                dos jogadores.
                            </p>
                        </div>
                        <div class="col">
                            <img src="imagens/imagem07.png" class="img-fluid wow fadeIn" alt="Responsive image">
                        </div>
                    </div>
                </div>

                <br><br>
                <div class="text-center">
                    <a href="Topico03.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico03.2.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
                </div>


                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });

                    $(function() {
                        $('[data-toggle="popover"]').popover()
                    })

                    $('.popover-dismiss').popover({
                        trigger: 'focus'
                    })

                    $(document).ready(function() {
                        new WOW().init();
                    });
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>