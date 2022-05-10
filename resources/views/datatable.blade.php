<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Datatable</title>
  </head>
  <body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Navbar</span>
        </div>
    </nav>

    <section class="container-fluid mt-4">
        <div class="card">
            <div class="card-header bg-blue text-center">                
                <p class="titulo-card mb-0"><i class="fas fa-th-list"></i> Cédula de evaluación</p>
            </div>
            <div class="card-body">  
                    <div class="container-fluid">  
                        <div class="row mt-2 mb-4">
                            <div class="col-12 text-center">
                            <button type="button" class="btn btn-info p-2"><i class="far fa-plus-square"></i>  NUEVA EVALUACIÓN</button>
                            </div>
                        </div>
        
                        <hr>
        
                        <div class="row mb-4">
                            <div class="col-12">
                            <div class="form-group">
                                <label for="select-empleado">Seleccionar empleado:</label>
                                <select class="form-control" id="select-empleado">
                                <option>1</option>
                                <option>2</option>
                                </select>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="container-fluid mt-4">
        <div class="card">
          <div class="card-header bg-white text-center">
            <p class="titulo-card"><i class="fas fa-tasks"></i> Lista de cedulas registradas</p>
          </div>
          <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-6">
                    <p class="text-card">Selecciona un conjunto de cédulas para realizar firmado electrónico o envío masivo</p>
                    <div class="botones d-flex">
                        <button class="btn btn-lg btn-yellow ">
                            <i class="fas fa-pen-alt"></i>
                            FIRMADO MASIVO
                        </button>
                        <button class="btn btn-lg btn-blue">
                            <i class="fas fa-envelope"></i>
                            ENVÍO MASIVO
                        </button>
                    </div>   
                  </div>
                  <div class="col-lg-6">
                    <ul class="iconlist float-right">
                      <li>
                            <i class="far fa-check-circle"></i>
                            Firmado
                      </li>
                      <li>
                            <i class="far fa-clock"></i>
                            Por firmar
                      </li>
                      <li>
                            <i class="far fa-question-circle"></i>
                            En evaluación
                      </li>
                      <li>
                            <i class="far fa-dot-circle"></i>
                            Enviado a regulación
                      </li>
                    </ul>
                  </div>
                </div>
                
                  
                    <div class="datatable-row">
                      <table id="datatable1" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th class="status">Estado</th>
                                <th>Acciones</th>
                                <th class="seleccionar">Seleccionar</th>
                                <th>Evaluador</th>
                                <th>Empleado</th>
                                <th>Unidad</th>
                                <th>Mes</th>
                                <th>Año</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="firmado">
                                  <td class="text-center"><i class="far fa-check-circle"></i></td>                              
                                  <td class="text-center">
                                      <a href="#" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
                                      <a href="#" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a>                                  
                                      <a href="#" data-toggle="tooltip" data-placement="top" title="Cancelar"><i class="far fa-trash-alt"></i></a>
                                      <a href="#" data-toggle="tooltip" data-placement="top" title="Desplegar Tabla"><i class="far fa-plus-square"></i></a>
                                    </td>
                                  <td class="tex-center"><input class="w-100" type="checkbox" name="seleccionar" id="section"></td>
                                  <td>Ariana García Reyes</td>
                                  <td>Alan Martínez</td>
                                  <td>Dirección General de Tecnologías de Información y Comunicación</td>
                                  <td>Junio</td>
                                  <td>2022</td>
                            </tr>                                              
                            
                            <tr class="porFirmar">
                                <td class="text-center"><i class="far fa-clock"></i></i></td>
                                <td class="text-center">
                                  <a href="#" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>                                
                                  <a href="#" data-toggle="tooltip" data-placement="top" title="Cancelar"><i class="far fa-trash-alt"></i></a>
                                  <a href="#" data-toggle="tooltip" data-placement="top" title="Firmar"><i class="fas fa-pen-alt"></i></a>
                                  <a href="#" data-toggle="tooltip" data-placement="top" title="Desplegar Tabla"><i class="far fa-plus-square"></i></a>
                                </td>
                                <td class="tex-center"><input class="w-100" type="checkbox" name="seleccionar" id="section"></td>
                                <td>Ariana García Reyes</td>
                                <td>Alan Martínez</td>
                                <td>Dirección General de Tecnologías de Información y Comunicación</td>
                                <td>Junio</td>
                                <td>2022</td>
                            </tr>
    
                            <tr class="enEvaluacion">
                                <td class="text-center"><i class="far fa-question-circle"></i></td>
                                <td class="text-center">
                                  <a href="#" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
                                  <a href="#" data-toggle="tooltip" data-placement="top" title="Enviar"><i class="far fa-envelope"></i></a>
                                  <a href="#" data-toggle="tooltip" data-placement="top" title="Desplegar Tabla"><i class="far fa-plus-square"></i></a>
                                </td>
                                <td class="tex-center"><input class="w-100" type="checkbox" name="seleccionar" id="section"></td>
                                <td>Ariana García Reyes</td>
                                <td>Alan Martínez</td>
                                <td>Dirección General de Tecnologías de Información y Comunicación</td>
                                <td>Junio</td>
                                <td>2022</td>
                            </tr>
    
                            <tr class="regulacion">
                              <td class="text-center"><i class="far fa-dot-circle"></i></i></td>
                              <td class="text-center">
                                  <a href="#" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
                                  <a href="#" data-toggle="tooltip" data-placement="top" title="Desplegar Tabla"><i class="far fa-plus-square"></i></a>
                                </td>
                                <td class="tex-center"><input class="w-100" type="checkbox" name="seleccionar" id="section"></td>
                                <td>Ariana García Reyes</td>
                                <td>Alan Martínez</td>
                                <td>Dirección General de Tecnologías de Información y Comunicación</td>
                                <td>Junio</td>
                                <td>2022</td>
                            </tr>
    
                        </tbody>                                           
                      </table>
                    </div>
                
            </div>
          </div>
  
        </div>
      </section>

      <section>
          <hr>
          
        <div class="footer-datatable small text-center">
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