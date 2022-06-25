<?php
    require_once(PATH_CONTROLLER . "FormController.php");
    $form = new Form;
    $form->sugestao();
    $form->notificacao();
?>

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
                                        <input class="form-control" name="nome_notif" id="name" type="text" required/>
                                        <label for="name">Nome Completo</label>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="email_notif" id="email" type="email" required/>
                                        <label for="email">Endereço de Email</label>
                                    </div>
                                    <div>
                                        <div id="div_1_notif" class="form-floating mb-3">
                                                <select class="form-control" name="tipo_notif_1" type="typelist" required>
                                                    <option value="" data-default disabled selected></option>
                                                    <option value="1">Religioso</option>
                                                    <option value="2">Artesanal</option>
                                                    <option value="3">Cultural</option>
                                                    <option value="4">Histórico</option>
                                                    <option value="5">Lazer</option>
                                                    <option value="6">Ecológico</option>
                                                    <option value="7">Aventura</option>
                                                    <option value="8">Aquático</option>
                                                    <option value="9">Comércio</option>
                                                    <option value="10">Esportivo</option>
                                                    <option value="11">Científico</option>
                                                </select>
                                            <label for="type">Tipo do Local</label>
                                        </div>
                                        <div id="div_2_notif" class="form-floating mb-3 hide">
                                                <select class="form-control" name="tipo_notif_2" type="typelist">
                                                    <option value="null" data-default selected></option>
                                                    <option value="1">Religioso</option>
                                                    <option value="2">Artesanal</option>
                                                    <option value="3">Cultural</option>
                                                    <option value="4">Histórico</option>
                                                    <option value="5">Lazer</option>
                                                    <option value="6">Ecológico</option>
                                                    <option value="7">Aventura</option>
                                                    <option value="8">Aquático</option>
                                                    <option value="9">Comércio</option>
                                                    <option value="10">Esportivo</option>
                                                    <option value="11">Científico</option>
                                                </select>
                                            <label for="type">Tipo do Local (Opcional)</label>
                                        </div>  
                                        <div id="div_3_notif" class="form-floating mb-3 hide">
                                                <select class="form-control" name="tipo_notif_3" type="typelist">
                                                    <option value="null" data-default selected></option>
                                                    <option value="1">Religioso</option>
                                                    <option value="2">Artesanal</option>
                                                    <option value="3">Cultural</option>
                                                    <option value="4">Histórico</option>
                                                    <option value="5">Lazer</option>
                                                    <option value="6">Ecológico</option>
                                                    <option value="7">Aventura</option>
                                                    <option value="8">Aquático</option>
                                                    <option value="9">Comércio</option>
                                                    <option value="10">Esportivo</option>
                                                    <option value="11">Científico</option>
                                                </select>
                                            <label for="type">Tipo do Local (Opcional)</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <button id="btn_plus_notif" type="button" class="btn btn-outline-primary btn-sm">+</button>
                                            <button id="btn_minor_notif" type="button" class="btn btn-outline-danger btn-sm hide">-</button>
                                        </div>
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
                                <input class="form-control" name="nome_sugest" type="text" required/>
                                <label for="name">Nome Completo</label>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email_sugest" type="email" required/>
                                <label for="email">Endereço de Email</label>
                            </div>
                            <!-- Local name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="local_sugest" type="text" required/>
                                <label for="local">Nome do Local</label>
                            </div>  
                            <!-- Local type input-->
                            <div>
                                <div id="div_1_sugest" class="form-floating mb-3">
                                        <select class="form-control" name="tipo_sugest_1" type="typelist" required>
                                            <option value="" data-default disabled selected></option>
                                            <option value="1">Religioso</option>
                                            <option value="2">Artesanal</option>
                                            <option value="3">Cultural</option>
                                            <option value="4">Histórico</option>
                                            <option value="5">Lazer</option>
                                            <option value="6">Ecológico</option>
                                            <option value="7">Aventura</option>
                                            <option value="8">Aquático</option>
                                            <option value="9">Comércio</option>
                                            <option value="10">Esportivo</option>
                                            <option value="11">Científico</option>
                                        </select>
                                    <label for="type">Tipo do Local</label>
                                </div>
                                <div id="div_2_sugest" class="form-floating mb-3 hide">
                                        <select class="form-control" name="tipo_sugest_2" type="typelist">
                                            <option value="null" data-default selected></option>
                                            <option value="1">Religioso</option>
                                            <option value="2">Artesanal</option>
                                            <option value="3">Cultural</option>
                                            <option value="4">Histórico</option>
                                            <option value="5">Lazer</option>
                                            <option value="6">Ecológico</option>
                                            <option value="7">Aventura</option>
                                            <option value="8">Aquático</option>
                                            <option value="9">Comércio</option>
                                            <option value="10">Esportivo</option>
                                            <option value="11">Científico</option>
                                        </select>
                                    <label for="type">Tipo do Local (Opcional)</label>
                                </div>  
                                <div id="div_3_sugest" class="form-floating mb-3 hide">
                                        <select class="form-control" name="tipo_sugest_3" type="typelist">
                                            <option value="null" data-default selected></option>
                                            <option value="1">Religioso</option>
                                            <option value="2">Artesanal</option>
                                            <option value="3">Cultural</option>
                                            <option value="4">Histórico</option>
                                            <option value="5">Lazer</option>
                                            <option value="6">Ecológico</option>
                                            <option value="7">Aventura</option>
                                            <option value="8">Aquático</option>
                                            <option value="9">Comércio</option>
                                            <option value="10">Esportivo</option>
                                            <option value="11">Científico</option>
                                        </select>
                                    <label for="type">Tipo do Local (Opcional)</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <button id="btn_plus_sugest" type="button" class="btn btn-outline-primary btn-sm">+</button>
                                    <button id="btn_minor_sugest" type="button" class="btn btn-outline-danger btn-sm hide">-</button>
                                </div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="sugestao_sugest" type="text" style="height: 10rem"></textarea>
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
                            <div class="mb-2"><img class="img-thumbnail rounded-circle" src="<?php echo BASE_URL; ?>/assets/img/devs/Wanderley.jfif" alt="derley" width="70%" height="70%"></div>
                            <h3 class="text-white h4 mb-2">Wanderley Filho</h3>
                            <p class="text-white mb-0">22 anos | Estudante de Ciência da Computação na UFCA | Mobile Developer</p>
                            <a href="https://github.com/derleymad" target="_blank"><img class="mt-2" src="<?php echo BASE_URL; ?>/assets/img/logos/github-brands.svg" alt="GitHub" width="7%" height="7%"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center align-self-center">
                        <div class="mt-5">
                            <div class="mb-2"><img class="img-thumbnail rounded-circle" src="<?php echo BASE_URL; ?>/assets/img/devs/Lucas.jfif" alt="derley" width="70%" height="70%"></div>
                            <h3 class="text-white h4 mb-2">Lucas Lemos</h3>
                            <p class="text-white mb-0">22 anos | Estudante de Ciência da Computação na UFCA | Backend Developer</p>
                            <a href="https://github.com/lucaslemo" target="_blank"><img class="mt-2" src="<?php echo BASE_URL; ?>/assets/img/logos/github-brands.svg" alt="GitHub" width="7%" height="7%"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center  align-self-center">
                        <div class="mt-5">
                            <div class="mb-2"><img class="img-thumbnail rounded-circle" src="<?php echo BASE_URL; ?>/assets/img/devs/Pedro.png" alt="derley" width="70%" height="70%"></div>
                            <h3 class="text-white h4 mb-2">Pedro Henrique</h3>
                            <p class="text-white mb-0">20 anos | Estudante de Ciência da Computação na UFCA | Frontend Developer</p>
                            <a href="https://github.com/Pedro-HenriqueFF" target="_blank"><img class="mt-2" src="<?php echo BASE_URL; ?>/assets/img/logos/github-brands.svg" alt="GitHub" width="7%" height="7%"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        