<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Info</title>
  </head>
  <body class="body-info">
    <nav class="navbar navbar-light" style="background-color: #ffffff;">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Navbar</span>
        </div>
    </nav>

    <section class="container-fluid mt-4">
        <div class="card">
            <div class="card-header bg-blue text-center">                
                <p class="titulo-card mb-0"><i class="fa fa-user-circle"></i> INFORMACIÓN DEL EMPLEADO </p>
            </div>
            <div class="card-body">  
                    <div class="container-fluid">  
                        <div class="row">
                            <div class="col-lg-2 text-center photouser">
                                <img src="assets/img/picuser.jpg" alt="userphoto" width="160" height="230" class="m-auto">                                
                                No. de control:
                                <b>300047</b> 
                                <hr>     
                            </div>
                            
                            <div class="col-lg-10">
                                <div class="row mt-2 mb-1"><h6 class="ml-3 sub-title"><b>Información personal</b></h6></div>
                                <div class="row row-info">
                                    <div class="col-md-4">
                                        <p>
                                            Nombre(s):<br>
                                            <b>SELENA</b>
                                        </p>

                                        <p>
                                            Tipo empleado:<br>
                                            <b>Lorem Ipsum</b>
                                        </p>

                                        <p>
                                            RFC:<br>
                                            <b>UIRJ9603177M2</b>
                                        </p>

                                        <p>
                                            Correo institucional:<br>
                                            <b>correo@uaem.mx</b>
                                        </p>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            Primer Apellido:<br>
                                            <b>MARIE</b>
                                        </p>
                                        
                                        <p>
                                            Tipo personal:<br>
                                            <b>BA BASE</b>
                                        </p>

                                        <p>
                                            CURP:<br>
                                            <b>UIRJ960317MMSRVL08</b>
                                        </p>

                                        
                                        <p>
                                            Correo personal:<br>
                                            <b>correo@gmail.com</b>
                                        </p>

                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            Segundo Apellido:<br>
                                            <b>GOMEZ</b>
                                        </p>
                                        
                                        <p>
                                            Tipo plaza:<br>
                                            <b>Plaza administrativa</b>
                                        </p>

                                        <p>
                                            No. de IMSS::<br>
                                            <b>NSS15648792</b>
                                        </p>

                                        <p>
                                            Teléfono particular:<br>
                                            <b>7775502182</b>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="container-fluid mt-20">
        <div class="card">
            <div class="card-header">
                <p class="titulo-card mb-0"> Selecciona un opcion </p>
            </div>
            <div class="card-body p-0">

            <div class="row">
                <div class="col-lg-3 my-2 ">
                    <select class="custom-select ml-3 select-nav">
                        <option selected>Selecciona una opcion</option>
                        <option data-content="<i class='fa fa-user-circle'></i> Opcion 1"></option>
                        <option value="2">Two</option>
                        <option value="3"> <span class="icono"></span> Three</option>
                    </select>
                </div>
                <div class="col-lg-9">
                    <ul class="nav nav-tabs infoTab" id="infoTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab"
                                aria-controls="personal" aria-selected="true">
                                Información personal
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="formacion-tab" data-toggle="tab" href="#formacion" role="tab"
                                aria-controls="formacion" aria-selected="false">
                                Formación académica
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="dependientes-tab" data-toggle="tab" href="#dependientes" role="tab"
                                aria-controls="dependientes" aria-selected="false">
                                Dependientes económicos
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            </div>
        </div>
    </section>
    
    <section class="container-fluid mt-10">
        <div class="card">
            <div class="card-header bg-white">
                <p class="titulo-card mb-0 text-blue"><b>Información personal</b></p>
            </div>
            <div class="card-body ">
                <div class="tab-content" id="infoTabContent">
                    <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                        <h6 class="sub-title"><b>Personal</b></h6>
                        <div class="row row-info">                            
                            <p class="col-md-3">
                                Fecha de nacimiento:<br>
                                <b>22/07/1992</b>
                            </p>
                            <p class="col-md-3">
                                Fecha de nacimiento:<br>
                                <b>22/07/1992</b>
                            </p>
                            <p class="col-md-3">
                                Fecha de nacimiento:<br>
                                <b>22/07/1992</b>
                            </p>
                            <p class="col-md-3"></p>
                        </div>

                        <h6 class="sub-title"><b>Dirección</b></h6>
                        <div class="row row-info">                            
                            <p class="col-md-3">
                                Colonia:<br>
                                <b>Centro</b>
                            </p>
                            <p class="col-md-3">
                                Código postal:<br>
                                <b>62780</b>
                            </p>
                            <p class="col-md-3">
                                Calle y número:<br>
                                <b>Nombre de la calle 23</b>
                            </p>
                            <p class="col-md-3">
                                Ciudad / Población<br>
                                <b>Zacatepec</b>
                            </p>
                            <p class="col-md-3">
                                Entidad Federativa:<br>
                                <b>MORELOS</b>
                            </p>
                            <p class="col-md-3">
                                Municipio:<br>
                                <b>Zacatepec</b>
                            </p>
                        </div>

                        <h6 class="sub-title"><b>Padres</b></h6>
                        <div class="row row-info">                            
                            <p class="col-md-3">
                                Nombre del padre:<br>
                                <b>Abram Uribe Navarro</b>
                            </p>
                            <p class="col-md-3">
                                Nombre de la madre:<br>
                                <b>Rosaura Rocio Rivero Peralta</b>
                            </p>
                            <p class="col-md-3">
                            </p>
                            <p class="col-md-3"></p>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="formacion" role="tabpanel" aria-labelledby="formacion-tab">...</div>
                    <div class="tab-pane fade" id="dependientes" role="tabpanel" aria-labelledby="dependientes-tab">...</div>
                  </div>
            </div>
        </div>
    </section>
    
    <section>
        <hr>
        <div class="footer-section small text-center">
            © 2022 · Dirección General de Tecnologías de Información y Comunicación · www.uaem.mx
        </div>
    </section>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/datatable.js"></script>

</body>
</html>