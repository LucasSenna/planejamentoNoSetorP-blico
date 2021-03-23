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

                <h2 class="font-bold">4.3 - Etapas para a Formulação dos um Plano de Ação</h2>
                <hr class="pontLaranja">

                <p class="Texto">
                    Apresentamos um resumo dos elementos fundamentais para formulação de um plano. São eles:
                </p>

                <p class="Texto pl-5">
                    <i class="far fa-star CorLaranja"></i> Identificação do ator que planeja;<br>
                    <i class="far fa-star CorLaranja"></i> Descrição da situação-problema, em que se quer atuar;<br>
                    <i class="far fa-star CorLaranja"></i> Problemas precisos a enfrentar;<br>
                    <i class="far fa-star CorLaranja"></i> Objetivos bem definidos;<br>
                    <i class="far fa-star CorLaranja"></i> Identificação de interessados e de beneficiários;<br>
                    <i class="far fa-star CorLaranja"></i> Nome do plano (aspecto comunicacional);<br>
                    <i class="far fa-star CorLaranja"></i> Principais ações a realizar, trajetória, encadeamento;<br>
                    <i class="far fa-star CorLaranja"></i> Definição de responsáveis, rede de ajuda e parceiros;<br>
                    <i class="far fa-star CorLaranja"></i> Previsão de recursos necessários, produtos e resultados esperados;<br>
                    <i class="far fa-star CorLaranja"></i> Indicação do prazo de maturação dos resultados;<br>
                    <i class="far fa-star CorLaranja"></i> Indicadores para verificação do andamento dos trabalhos, produtos, uso de recursos, contexto e resultados;<br>
                    <i class="far fa-star CorLaranja"></i> Clareza ao atuar em relação a aliados e a oponentes;<br>
                    <i class="far fa-star CorLaranja"></i> Clareza ao atuar em relação a mudanças no contexto;<br>
                    <i class="far fa-star CorLaranja"></i> Previsão de procedimentos para acompanhamento das ações, cobrança e prestação de contas;<br>
                    <i class="far fa-star CorLaranja"></i> Previsão de procedimentos para avaliação e para revisão durante a execução do que foi planejado.
                </p>
                <hr>

                <p class="Texto"> 
                    Como complemento, a partir da análise do balanço entre apoios e oposições previsíveis a um plano
                    de ação formulado, cabe identificarmos um tipo especial de operação a ser planejada.
                </p>

                <br><br>
                <div class="text-center">
                    <a href="Topico04.2.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico04.4.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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