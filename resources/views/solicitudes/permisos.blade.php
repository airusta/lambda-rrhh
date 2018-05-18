@extends('layouts')
<body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        
        <h2>Solicitud de Permisos</h2>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nombre empleado</h6>
                <span class="text-muted">Calderon Plata </span>
                <p>
              <span class="text-muted">Daniel Oliver</span>
              </div>
              
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Numero de Faltas</h6>
                <span class="text-muted">$4</span>
              </div>    
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Numero de Permisos</h6>
                <span class="text-muted">$5</span>
              </div>
              
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Vacaciones tomadas</h6>
                      <span class="text-muted">$5</span>
                    </div>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Dias Trabajados</h6>
                <span class="text-success">$5</span>
              </div>

             
          </ul>
        </div>
       
        <div class="col-md-8 order-md-1">
            <form>
                
                <div class="form-group">
                  <label for="exampleFormControlInput1">Dias Tomados</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" >
                </div>
                <div class="form-group">
                        <label for="date">Fecha</label>
                        <input class="datepicker" data-date-format="mm/dd/yyyy">
                </div>
                <p>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Razón</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option>Vacacion</option>
                      <option>Permiso</option>
                      <option>Baja medica</option>
                     
                    </select>
                </div>
                
                <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descripcion</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                <button type="submit" class="btn btn-primary mb-2">Solicitar Permiso</button>
              </form>
         
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">Sistema de Recursos humanos</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Inicio</a></li>
          <li class="list-inline-item"><a href="#">Salir</a></li>
        </ul>
      </footer>
    </div>
    </script>
  </body>