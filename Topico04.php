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

                <h2 class="font-bold">4 - Metodologia de Planejamento de Situações - MPS</h2>
                <hr class="pontLaranja">

                <p class="Texto">
                    <strong>Objetivo: </strong>Orientar o planejamento no que tange à eficácia, à alocação de recursos, à
                    determinação dos prazos das operações e das ações, ao delineamento da trajetória do
                    plano, à avaliação dos pré-requisitos, concomitâncias, intervalos, pontos de
                    confluência, a especificar os recursos necessários para cada ação, buscando manter a
                    ideia de que essa metodologia privilegia aspectos situacionais e estratégicos, em que
                    o plano só se completa na ação, nunca antes. E que ele deve ser refeito,
                    permanentemente, a partir da análise do desenvolvimento dos fatos concretos, da
                    evolução do plano, do avanço da capacidade de elaboração individual, coletiva e da
                    instituição.
                </p>
                <hr>

                <p class="Texto">
                    Este tópico sintetiza os elementos e conceitos da Metodologia de Planejamento de Situações <strong>(MPS)</strong> necessários para apoiar o trabalho a ser desenvolvido. Retomando a analogia náutica que traçamos
                    anteriormente (Tópico 2 – Item 2), ela corresponderia às ações que o gestor <strong>(velejador)</strong> teria de tomar
                    para, utilizando a informação proporcionada pela Metodologia de Diagnóstico de Situações MDS <strong>(bússola)</strong> e aproveitando a governabilidade propiciada pelas condições do contexto político e
                    socioeconômico <strong>(vento, maré etc.)</strong>, engendrar situações que permitam atingir seu objetivo (alcançar um
                    ponto da costa o mais próximo possível daquele que havia inicialmente programado).
                </p>

                <p class="Texto">
                A <strong class="CorLaranja">
                    <a title="MPS" data-toggle="popover" data-placement="Top" data-trigger="hover" data-content="Metodologia do Planejamento de Situações"> MPS <i class="fa fa-search-plus" aria-hidden="true"></i> </a>
                </strong> se baseia nos resultados alcançados com a
                aplicação da <strong class="CorLaranja">
                    <a title="MDS" data-toggle="popover" data-placement="Top" data-trigger="hover" data-content="Metodologia do Diagnóstico de Situações"> MDS <i class="fa fa-search-plus" aria-hidden="true"></i> </a>
                </strong> apresentada anteriormente, em especial,
                no fluxograma explicativo da situação. É sobre essa base que o trabalho de análise e de planejamento de
                situações tem início.
                </p>

                <br><br>
                <div class="text-center">
                    <a href="Topico03.2.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico04.1.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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