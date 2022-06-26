<?php
    require_once(PATH_CONTROLLER . "CatalogoController.php");
    $catalogo = new Catalogo;
    $locais = $catalogo->carregarCatalogo();
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
                            foreach($locais as $index => $local){
                                ?>
                                <!-- Modal -->
                                <div class="modal fade" id="<?php echo "modal_catalogo_".$local['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><?php echo $local['nome']?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div id="<?php echo "carrocel_controles_".$local['id']?>" class="carousel slide" data-bs-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    <div class="carousel-item active">
                                                                        <img src="<?php echo BASE_URL.$local['file_path'].'_01.jpg'; ?>" class="d-block w-100" alt="<?php echo $local['nome']?>">
                                                                    </div>
                                                                    <?php
                                                                        foreach (glob($local['file_path']."*.*") as $img) {
                                                                            if ($img == $local['file_path'].'_01.jpg')
                                                                                continue;
                                                                            ?>
                                                                            <div class="carousel-item">
                                                                                <img src="<?php echo BASE_URL.$img; ?>" class="d-block w-100" alt="...">
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                    ?>
                                                                </div>
                                                                <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo "carrocel_controles_".$local['id']; ?>" data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button" data-bs-target="#<?php echo "carrocel_controles_".$local['id']; ?>" data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-12"><?php echo $local['descricao']; ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button id="<?php echo "dimRoteiro_".$local['id']; ?>" type="button" class="btn btn btn-danger btn-dimiss" data-bs-dismiss="modal" disabled>Remover do Roteiro</button>
                                                <button id="<?php echo "addRoteiro_".$local['id']; ?>" type="button" class="btn btn-primary btn-roteiro" data-bs-dismiss="modal">Adicionar ao meu Roteiro</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 p-4 align-self-center">
                                    <a class="" data-bs-toggle="modal" data-bs-target="<?php echo "#modal_catalogo_".$local['id']?>" title="<?php echo $local['nome']?>">
                                        <img id="<?php echo "img_".$local['id']; ?>" class="img-fluid border border-4 rounded" src="<?php echo BASE_URL.$local['file_path'].'_01.jpg'?>" alt="<?php echo $local['nome']?>" />
                                    </a>
                                    <div class="project-name text-center pt-2"><?php echo $local['nome']?></div>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="position-fixed end-0 top-50 me-2">
                        <button id="mostra-roteiro" type="button" class="btn btn-primary btn-check-roteiro" data-bs-toggle="modal" data-bs-target="#roteiroModal">Seu Roteiro</button>
                    </div>
                    <!-- Modal do roteiro-->
                    <div class="modal fade" id="roteiroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Roteiro</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            <div class="modal-body">
                                <div id="msg">
                                    Nenhum lugar foi selecionado ainda.
                                </div>
                                <div id="tabela">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            </tr>
                                        </thead>
                                        <tbody id="bodyTable">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button id="salva-roteiro" type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        </main>
        <script src="<?php echo BASE_URL; ?>js/catalogo.js"></script>