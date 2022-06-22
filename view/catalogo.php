<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Futurismo</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets//img/logos/sun.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo BASE_URL; ?>/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logos/logo.png" width="200px" height="100px"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/#about">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#portfolio">Portifólio</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#notification">Mantenha-se Atualizado</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#contact">Sugestão</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#devs">Nossa Equipe</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
        <header class="page-section bg-secondary">
            <div class="container px-4 px-lg-5 h-100 pt-5">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
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
                        <div class="col-lg-4 col-sm-6 p-4 align-self-center">
                            <a class="portfolio-box" href="assets/img/portfolio/fullsize/padim.jpg" title="Estátua do Padre Cícero">
                                <img class="img-fluid" src="assets/img/portfolio/thumbnails/padim.jpg" alt="..." />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Religioso</div>
                                    <div class="project-name">Estátua do Padre Cícero</div>
                                </div>
                            </a>
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
                            <a class="portfolio-box" href="assets/img/portfolio/fullsize/bdn.jpg" title="Centro Cultural Banco do Nordeste">
                                <img class="img-fluid" src="assets/img/portfolio/thumbnails/bdn.jpg" alt="..." />
                                <div class="portfolio-box-caption p-3">
                                    <div class="project-category text-white-50">Cultural</div>
                                    <div class="project-name">Centro Cultural Banco do Nordeste</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        </main>
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Titan Tech</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
