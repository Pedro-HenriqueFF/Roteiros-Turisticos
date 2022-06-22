<?php
    require_once(PATH_CONTROLLER . "FormController.php");
    $form = new Form;
    $form->sugestao();
    $form->notificacao();
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
                        <li class="nav-item"><a class="nav-link" href="#about">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portifólio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#notification">Mantenha-se Atualizado</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Sugestão</a></li>
                        <li class="nav-item"><a class="nav-link" href="#devs">Nossa Equipe</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">O Futuro do seu Turismo</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Monte seu roteiro turístico personalizado dentre as mais variadas opções de lugares em nosso catálogo de forma gratuita.</p>
                        <a class="btn btn-primary btn-xl" href="#about">Monte o Seu</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">O que você precisa saber</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Selecione os locais de turismo que você deseja visitar e nossa aplicação montará um roteiro personalizado totalmente gratuito.</p>
                        <a class="btn btn-light btn-xl" href="catalogo">Comece Agora</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/padim.jpg" title="Estátua do Padre Cícero">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/padim.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Religioso</div>
                                <div class="project-name">Estátua do Padre Cícero</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/araja.jpg" title="Arajara Park">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/araja.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Entretenimento</div>
                                <div class="project-name">Arajara Park</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/museu-paleontologia.png" title="Museu de Paleontologia">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/museu-paleontologia.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Histórico</div>
                                <div class="project-name">Museu de Paleontologia</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/Salesianos.jpg" title="Igreja do Sagrado Coração de Jesus">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/Salesianos.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Religioso</div>
                                <div class="project-name">Igreja do Sagrado Coração de Jesus</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/estadio.jpeg" title="Arena Mauro Sampaio - Romeirão">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/estadio.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Esportivo</div>
                                <div class="project-name">Arena Mauro Sampaio - Romeirão</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/bdn2.jpg" title="Centro Cultural Banco do Nordeste">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/bdn2.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Cultural</div>
                                <div class="project-name">Centro Cultural Banco do Nordeste</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Notification -->
        <section class="page-section bg-dark text-white" id="notification">
	        <div class="container px-4 px-lg-5 text-center">
			    <h2 class="mb-4">Receba nossas novidades e atualizações em seu email</h2>
			    <a href="" class="btn btn-light btn-xl" data-bs-toggle="modal" data-bs-target="#formModal">Quero receber!</a>
                <!-- Modal -->
                <div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog text-black">
                        <div class="modal-content">
                            <form id="notificationForm" action="" method="post" accept-charset="utf-8" autocomplete="on" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5 class="modal-title text-black" id="modalLabel">Preencha suas informações</h5>
                                </div>
                                <div class="modal-body text-black">
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="nomeNotif" id="name" type="text" required/>
                                        <label for="name">Nome Completo</label>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="emailNotif" id="email" type="email" required/>
                                        <label for="email">Endereço de Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
<<<<<<< HEAD
                                        <select class="selectpicker form-control" name="tipoNotif[]" multiple>
=======
                                        <select class="selectpicker form-control" name="tipoNotif" id="type" type="typelist" required multiple>
>>>>>>> 63497d8851256e05eaf58c12350e4e19bfd1a48b
                                            <option value="Religioso">Religioso</option>
                                            <option value="Artesanal">Artesanal</option>
                                            <option value="Musical">Musical</option>
                                            <option value="Esportivo">Esportivo</option>
                                        </select>
                                        <label for="type">Tipo do Local</label>
                                    </div>  
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Cancelar</button>
                                    <button class="btn btn-primary" id="submitButton-notif" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
	        </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Conhece mais locais?</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ajude-nos a expandir nosso catálogo! Nos dê sugestões de locais turisticos da sua região. </p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form id="contactForm" action="" method="post" accept-charset="utf-8" autocomplete="on" enctype="multipart/form-data">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="nome" id="name" type="text" required/>
                                <label for="name">Nome Completo</label>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="email" type="email" required/>
                                <label for="email">Endereço de Email</label>
                            </div>
                            <!-- Local name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="local" id="local" type="text" required/>
                                <label for="local">Nome do Local</label>
                            </div>  
                            <!-- Local type input-->
                            <div class="form-floating mb-3">
                                    <select class="selectpicker form-control" name="tipo" id="type" type="typelist" required multiple>
                                        <option value="Religioso">Religioso</option>
                                        <option value="Artesanal">Artesanal</option>
                                        <option value="Musical">Musical</option>
                                        <option value="Esportivo">Esportivo</option>
                                    </select>
                                <label for="type">Tipo do Local</label>
                            </div>  
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="sugestao" id="message" type="text" style="height: 10rem"></textarea>
                                <label for="message">Nos diga mais sobre esse local (Opcional)</label>
                            </div>
                            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+55 (88) 98886-0767</div>
                    </div>
                </div>
            </div>
        </section>
         <!-- devs-->
         <section class="page-section bg-primary" id="devs">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center text-white mt-0">Conheça nossa Equipe</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-4 col-md-6 text-center align-self-center">
                        <div class="mt-5">
                            <div class="mb-2"><img class="img-thumbnail rounded-circle" src="./assets/img/devs/derley.jfif" alt="derley" width="70%" height="70%"></div>
                            <h3 class="text-white h4 mb-2">Wanderley Filho</h3>
                            <p class="text-white mb-0">22 anos | Estudante de Ciência da Computação na UFCA | Mobile Developer</p>
                            <a href="https://github.com/derleymad" target="_blank"><img class="mt-2" src="./assets/img/logos/github-brands.svg" alt="GitHub" width="7%" height="7%"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center align-self-center">
                        <div class="mt-5">
                            <div class="mb-2"><img class="img-thumbnail rounded-circle" src="./assets/img/devs/luska.jfif" alt="derley" width="70%" height="70%"></div>
                            <h3 class="text-white h4 mb-2">Lucas Lemos</h3>
                            <p class="text-white mb-0">22 anos | Estudante de Ciência da Computação na UFCA | Backend Developer</p>
                            <a href="https://github.com/lucaslemo" target="_blank"><img class="mt-2" src="./assets/img/logos/github-brands.svg" alt="GitHub" width="7%" height="7%"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center  align-self-center">
                        <div class="mt-5">
                            <div class="mb-2"><img class="img-thumbnail rounded-circle" src="./assets/img/devs/ph.png" alt="derley" width="70%" height="70%"></div>
                            <h3 class="text-white h4 mb-2">Pedro Henrique</h3>
                            <p class="text-white mb-0">20 anos | Estudante de Ciência da Computação na UFCA | Frontend Developer</p>
                            <a href="https://github.com/Pedro-HenriqueFF" target="_blank"><img class="mt-2" src="./assets/img/logos/github-brands.svg" alt="GitHub" width="7%" height="7%"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Titan Tech</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Select Multiple-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
