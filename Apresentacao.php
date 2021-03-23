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

                <h2 class="font-bold">Apresentação</h2>
                <hr class="pontLaranja">

                <p class="Texto">
                    Nesta aula inicial, apresentaremos o conceito de planejamento e o seu breve histórico através de
                    seus fundamentos teórico-políticos. Em seguida, na perspectiva do planejamento estratégico
                    governamental, abordaremos o uso da metodologia de diagnóstico de situações para análise proativa do
                    contexto. Por fim, apresentaremos a elaboração da metodologia de planejamento de situações com o
                    objetivo de auxiliar na formulação de ações, fixação de recursos e resultados a atingir.
                </p>

                <p class="Texto">
                    A elaboração do conteúdo é fundamentada em trabalhos produzidos por: Renato Peixoto Dagino e a
                    Célula de Planejamento da Seplag.
                </p>
                <br>

                <h2 class="font-bold">Objetivo</h2>
                <hr class="pontLaranja">

                <p class="Texto">
                    Elaborar uma metodologia de planejamento de situações para auxiliar a formulação de ações, a
                    fixação de recursos e de resultados a atingir.
                </p>


                <br><br>

                <div class="text-center">
                    <a href="Topico01.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>