<div class="slide">
    <div class="contenedor">
        <div class="card card-s">
            <img class="card-img-middle img-fluid" src="'.$row['dir_i'].'" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">'. $row['nombre_n'] . '</h4>
                <div class="card-header">
                    '. $row['titulo_p'] . '
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-center"></i>'. $row['dia_d'] . '</li>
                    <div class="list-group-item">
                        <div class="row link-color">
                            <a href="'. $row['face_n'] . '" class="col">
                                <div class="col">
                                    <div class="row justify-content-center">
                                        <i class="fab fa-facebook-square"></i>
                                    </div>
                                    <div class="row justify-content-center">
                                        <span>Facebook</span>
                                    </div>
                                </div>
                            </a>

                            <a href="'. $row['dir_n'] . '" class="col">
                                <div class="col">
                                    <div class="row justify-content-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="row justify-content-center">
                                        <span class="link-color">Ubicación</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- FIN LIST-GROUP ITEM -->
                </ul>
            </div>
        </div>
    </div>
</div>