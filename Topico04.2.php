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

                <h2 class="font-bold">4.2 - Matriz Operacional</h2>
                <hr class="pontLaranja">

                <p class="Texto">
                    A Matriz Operacional detalha o conjunto de procedimentos através do qual devem ser atingidos os
                    resultados esperados nas operações. Cada ação poderá ser dividida em atividades que, por sua vez, podem
                    ser detalhadas em tarefas, dependendo da complexidade da operação ou da ação e das características do
                    cenário que pretende construir o ator que planeja. De qualquer forma, o enunciado das ações, das
                    atividades e/ou das tarefas na Matriz Operacional deve vir acompanhado pelos respectivos produtos,
                    resultados esperados, datas (início/fim), responsáveis, apoios e recursos necessários.
                </p>
                <hr>

                <h2 class="font-bold">4.2.1 - Ações, Atividades, Tarefas</h2>
                <hr class="pontLaranja">

                <p class="Texto">
                    São as unidades de implementação de um plano. Seu detalhamento deve ser feito até o nível
                    necessário para uma compreensão clara da operacionalização de um plano ou projeto. Se necessário, até
                    mesmo as tarefas podem ser subdivididas de acordo com o interesse ou a necessidade do ator que planeja.
                </p>

                <p class="Texto">
                    O detalhamento das tarefas deve ser refeito periodicamente, em função das necessidades. A
                    somatória das ações e tarefas, verificáveis em forma de produtos, deve garantir que se alcancem os
                    resultados.
                </p>

                <i class="fas fa-lightbulb CorLaranja"></i>
                <strong class="CorLaranja">Clique nos botões abaixo</strong>

                <div>
                    <button class="btn btn-outline-ead" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        <p class="Texto">
                        <h5>Resultados</h5>
                        </p>
                    </button><br><br>
                    <div class="collapse" id="collapse1">
                        <div class="card card-body" style="border-color: #FC6B30; top: -15px;">
                            <p class="Texto">
                                São os impactos sobre as manifestações concretas do problema que está sendo atacado (avaliado
                                pelos seus descritores); a mudança na realidade observada. A definição dos resultados possibilita uma
                                avaliação do plano, assim como a condução precisa das ações no sentido da estratégia geral.
                            </p>
                        </div>
                    </div>

                    <button class="btn btn-outline-ead" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        <p class="Texto">
                        <h5>Produtos</h5>
                        </p>
                    </button><br><br>
                    <div class="collapse" id="collapse2">
                        <div class="card card-body" style="border-color: #FC6B30; top: -15px;">
                            <p class="Texto">
                                São parâmetros concretos – quantidade, qualidade, tempo e lugar – que auxiliam na execução das
                                atividades planejadas. Se os produtos estão sendo obtidos e os problemas identificados persistem é porque
                                os resultados esperados não estão ocorrendo. Há, então, necessidade de rever as operações e as ações
                                projetadas.
                            </p>
                        </div>
                    </div>

                    <button class="btn btn-outline-ead" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        <p class="Texto">
                        <h5>Recursos</h5>
                        </p>
                    </button><br><br>
                    <div class="collapse" id="collapse3">
                        <div class="card card-body" style="border-color: #FC6B30; top: -15px;">
                            <p class="Texto">
                                Recurso é tudo aquilo que um ator pode mobilizar para viabilizar a consecução dos seus objetivos.
                                A execução de um plano implica o gerenciamento de múltiplos recursos escassos.<br>
                                Para o processo de planejamento que aqui propomos, é necessário trabalhar com um conceito
                                bastante amplo de recurso.<br>
                                A imagem a seguir indica os recursos que podem ser utilizados para a viabilização de ações
                                planejadas.
                            <div class="text-center">
                                <img src="imagens/imagem17.png" class="img-fluid wow fadeIn" alt="Responsive image">
                            </div>
                            Para cada ação prevista, devemos detalhar quais recursos de diferentes tipos serão necessários,
                            ajustar a utilização dos recursos à sua disponibilidade e especificar os custos para cada ação/tarefa.<br>
                            A partir dessa informação, será possível uma alocação realista dos recursos. Para tanto, é
                            fundamental avaliarmos em que medida as atividades previstas em um plano necessitam consumir os
                            diferentes tipos de recursos para avaliar sua eficiência.
                            </p>
                        </div>
                    </div>


                    <button class="btn btn-outline-ead" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        <p class="Texto">
                        <h5>Prazos</h5>
                        </p>
                    </button><br><br>
                    <div class="collapse" id="collapse4">
                        <div class="card card-body" style="border-color: #FC6B30; top: -15px;">
                            <p class="Texto">
                                O tempo talvez seja o recurso mais escasso com os quais lidam os dirigentes públicos e os seus
                                planos de governo. A determinação dos prazos das operações e das ações marca a trajetória do plano, com
                                os pré-requisitos, as concomitâncias, os intervalos ou os pontos predeterminados de confluência (datas
                                simbólicas etc.).<br>
                                A indicação de prazos é indispensável para o acompanhamento e a avaliação do plano, e indica o
                                compromisso do responsável com a execução das ações. Os prazos estão relacionados à data limite para a
                                finalização da ação (para ser mais preciso, ao intervalo entre o início e o fim da ação).
                            </p>
                        </div>
                    </div>


                    <button class="btn btn-outline-ead" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        <p class="Texto">
                        <h5>Responsáveis</h5>
                        </p>
                    </button><br><br>
                    <div class="collapse" id="collapse5">
                        <div class="card card-body" style="border-color: #FC6B30; top: -15px;">
                            <p class="Texto">
                                Envolve todos os coordenadores e os articuladores de tarefas a serem desenvolvidas no plano. As
                                responsabilidades devem ser nominais ou no mínimo por função, evitando a diluição de
                                responsabilidades. Quando todos são responsáveis por tudo, ninguém é responsável por nada.<br>
                                É também importante distinguirmos entre o responsável (aquelas pessoas que estão comprometidas
                                diretamente com a realização da ação) e eventuais apoios (pessoas que contribuem para a realização da
                                ação).
                            </p>
                        </div>
                    </div>
                </div>
                <br>

                <br><br>
                <div class="text-center">
                    <a href="Topico04.1.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico04.3.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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