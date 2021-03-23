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

                <h2 class="font-bold">4.4 - Gestão do Plano</h2>
                <hr class="pontLaranja">

                <p class="Texto">
                    O plano só se completa na ação, nunca antes. E a ação de governo frequentemente exige adaptações
                    de último momento que completam e viabilizam o plano. Essas adaptações são uma forma de
                    improvisação necessária e quase inexorável.
                </p>
                <br>

                <p class="Texto">
                    Contudo, a questão consiste, no momento da ação, se o domínio será da improvisação sobre o plano
                    ou do plano sobre a improvisação. Não obstante, temos de reconhecer que as equipes dirigentes podem escolher os problemas, formular seus planos para solucioná-los e o momento de fazê-lo, mas não podem
                    escolher as circunstâncias do contexto em que deverão agir.
                </p>
                <br>

                <p class="Texto">
                    O plano formulado mediante simples cálculo determinista inviabiliza, no limite, a avaliação do seu
                    cumprimento e do compromisso com as responsabilidades assumidas. Isso porque é impossível
                    valorarmos o significado dos resultados frente a metas previstas, se são verificadas mudanças
                    significativas no contexto em que o plano deve ser implementado.
                </p>
                <br>

                <p class="Texto">
                    Considerando que surpresas sempre ocorrem e podem gerar alto impacto sobre o plano e os
                    resultados esperados, podemos afirmar que este é um conjunto de condições fora do controle do ator que
                    planeja. Ele influencia o desenvolvimento e os resultados finais do plano.
                </p>
                <br>

                <p class="Texto">
                    De acordo com essa concepção, resumimos que planejar sob incerteza significa:
                </p>

                <p class="Texto pl-5">
                <ul style="list-style: none;">
                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i> Não congelar o cálculo sobre o futuro, ou seja, refazê-lo constantemente; </li>
                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i> Utilizar recursos de cálculo como previsão, reação rápida diante da mudança imprevista, aprendizado com o passado recente; </li>
                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i> Trabalhar com diferentes cenários, com visões alternativas sobre o futuro; </li>
                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i> Estar preparado para enfrentar surpresas; </li>
                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i> Dispor de sistema de manejo de crises; </li>
                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i> Afastar a incerteza evitável mediante ações preventivas. </li>
                </ul>
                </p>

                <p class="Texto">
                    Outro aspecto que precisamos destacar faz referência aos cálculos realizados quando da elaboração
                    do plano, que precisam ser refeitos permanentemente a partir da análise sobre:
                </p>


                <p class="Texto pl-5">
                <ul style="list-style: none;">
                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i> Desenvolvimento dos fatos concretos; </li>
                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i> Evolução do plano; </li>
                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i> Avanço da elaboração individual e coletiva na instituição. </li>
                </ul>
                </p>
                <hr>

                <p class="Texto">
                    <strong>Focos de debilidade de um Plano</strong>
                </p>

                <p class="Texto">
                    Concluindo a apresentação da <strong class="CorLaranja">
                        <a title=" MPS" data-toggle="popover" data-placement="Top" data-trigger="hover" data-content="Metodologia de Planejamento de Situações"> MPS <i class="fa fa-search-plus" aria-hidden="true"></i> </a>
                    </strong> , preparamos um
                    conjunto de pontos (check list) para a verificação da qualidade de um plano de ação. São preocupações
                    enunciadas de forma negativa, mas consideradas importantes para o planejamento e acompanhamento das
                    operações, avaliação e replanejamento de um plano de ação. São elas:
                </p>


                <p class="Texto pl-5">
                    <i class="fas fa-square CorLaranja"></i> Eleição de problemas inadequada ou desfocada;<br>
                    <i class="fas fa-square CorLaranja"></i> Compreensão precária sobre a situação problemática a ser enfrentada, isto é, diagnóstico de situações mal formulado;<br>
                    <i class="fas fa-square CorLaranja"></i> Má qualidade do projeto de ação elaborado;
                    <br>
                    <i class="fas fa-square CorLaranja"></i> Projeção mal formulada para resultados esperados;<br>
                    <i class="fas fa-square CorLaranja"></i> Despreparo ou não previsão para ocorrência de surpresas ou mudanças no contexto;<br>
                    <i class="fas fa-square CorLaranja"></i> Deficiente análise estratégica;<br>
                    <i class="fas fa-square CorLaranja"></i> Suposições gerenciais otimistas.
                </p>
                <hr>

                <br><br>
                <div class="text-center">
                    <a href="Topico04.3.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico04.5.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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