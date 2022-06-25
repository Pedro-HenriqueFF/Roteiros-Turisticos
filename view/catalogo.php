<?php
    require_once(PATH_CONTROLLER . "CatalogoController.php");
    $valores = (new Catalogo)->carregarCatalogo();
    #die(BASE_URL.$valores[0]['pasta'].$valores[0]['nome'].'_01.jpg');
?>
        <main>
        <header class="page-section bg-secondary">
            <div class="container px-4 px-lg-5 h-100 pt-5">
                <div class="row gx-4 gx-lg-5 h-100">
                    <form id="TagForm" action="" method="post" accept-charset="utf-8" autocomplete="on" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="pesquisa" id="search" type="search" placeholder="Pesquisar" aria-label="Pesquisar" required/>
                            <label for="search">Pesquisar</label>
                        </div>
                        <div class="d-grid"><button class="btn btn-primary btn-xl" id="submit" type="submit">Pesquisar</button></div>
                    </form>
                </div>
            </div>
            <div id="portfolio">
                <div class="container-fluid p-5">
                    <div class="row g-0">
                        <?php
                            for($i=0; $i<50; $i++){
                                ?>
                                <div class="col-lg-4 col-sm-6 p-4 align-self-center">
                                    <a class="portfolio-box" href="<?php echo BASE_URL.$valores[$i%2]['pasta'].'_02.jpg'?>" title="<?php echo $valores[$i%2]['nome']?>">
                                        <img class="img-fluid border border-4 rounded" src="<?php echo BASE_URL.$valores[$i%2]['pasta'].'_01.jpg'?>" alt="..." />
                                    </a>
                                    <div class="project-name text-center pt-2"><?php echo $valores[$i%2]['nome']?></div>
                                </div>
                                <?php
                            }
                        ?>
                        <!--
                        <div class="col-lg-4 col-sm-6 p-4 align-self-center">
                            <a class="portfolio-box" href="assets/img/portfolio/fullsize/padim.jpg" title="Estátua do Padre Cícero">
                                <img class="img-fluid" src="assets/img/portfolio/thumbnails/padim.jpg" alt="..." />
                            </a>
                            <div class="project-name text-center pt-2">Estátua do Padre Cícero</div>
                        </div>
                        <div class="col-lg-4 col-sm-6 p-4 align-self-center">
                            <a class="portfolio-box" href="assets/img/portfolio/fullsize/araja.jpg" title="Arajara Park">
                                <img class="img-fluid" src="assets/img/portfolio/thumbnails/araja.jpg" alt="..." />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Entretenimento</div>
                                    <div class="project-name">Arajara Park</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 p-4 align-self-center">
                            <a class="portfolio-box" href="assets/img/portfolio/fullsize/museu-paleontologia.png" title="Museu de Paleontologia">
                                <img class="img-fluid" src="assets/img/portfolio/thumbnails/museu-paleontologia.png" alt="..." />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Histórico</div>
                                    <div class="project-name">Museu de Paleontologia</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 p-4 align-self-center">
                            <a class="portfolio-box" href="assets/img/portfolio/fullsize/Salesianos.jpg" title="Igreja do Sagrado Coração de Jesus">
                                <img class="img-fluid" src="assets/img/portfolio/thumbnails/Salesianos.jpg" alt="..." />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Religioso</div>
                                    <div class="project-name">Igreja do Sagrado Coração de Jesus</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 p-4 align-self-center">
                            <a class="portfolio-box" href="assets/img/portfolio/fullsize/estadio.jpeg" title="Arena Mauro Sampaio - Romeirão">
                                <img class="img-fluid" src="assets/img/portfolio/thumbnails/estadio.jpeg" alt="..." />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Esportivo</div>
                                    <div class="project-name">Arena Mauro Sampaio - Romeirão</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 p-4 align-self-center">
                            <a class="portfolio-box" href="assets/img/portfolio/fullsize/bdn2.jpg" title="Centro Cultural Banco do Nordeste">
                                <img class="img-fluid" src="assets/img/portfolio/thumbnails/bdn2.jpg" alt="..." />
                                <div class="portfolio-box-caption p-3">
                                    <div class="project-category text-white-50">Cultural</div>
                                    <div class="project-name">Centro Cultural Banco do Nordeste</div>
                                </div>
                            </a>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </header>
        </main>

