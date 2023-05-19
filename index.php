<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-6 text-center">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning fs-3 w-25 mt-5 text-light" data-bs-toggle="modal" data-bs-target="#SIGNIN">
                  SIGN IN
                </button>                
                <!-- Modal -->
                <div class="modal fade" id="SIGNIN" tabindex="-1" aria-labelledby="SIGNINLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content bg-dark text-light">
                      <div class="modal-header">
                        <h5 class="modal-title" id="SIGNINLabel">Registrate</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                              <form action="registro.php" method="POST" id="form"> 
                            <div class="container px-2">
                              <div class="row gx-2">
                                <div class="col">
                                 <div class="p-1 ">
                                    <div class="mb-3">
                                      <label for="nombres" class="form-label">NOMBRES</label>
                                      <input type="tetx" class="form-control" id="nombres" name ="nombres"  placeholder="daniel felipe">
                                      
                                    </div>
                                 </div>
                                </div>
                                <div class="col">
                                  <div class="p-1 ">
                                    <div class="mb-3">
                                      <label for="apellidos" class="form-label">APELLIDOS</label>
                                      <input type="text" class="form-control" id="apellidos" name="apellidos"  placeholder="asencio martinez">
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="mb-3">
                                      <label for="correo" class="form-label">correo</label>
                                      <input type="email" class="form-control" id="correo" name="correo"  placeholder="asencio martinez">
                                    </div>


                            <div class="mb-3" >
                            <label for="telefono" class="form-label">Telefono de contacto</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono"  name="telefono" placeholder ="311022500">
                          </div>

                          <div class="mb-3 text-start">
                                <div class="text-center"><h5>lenguajes de programacion </h5></div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                Html
                              </label>
                                </div>

                                <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="2" id="flexCheckChecked" name="lenguajes[]" checked>
                              <label class="form-check-label" for="flexCheckChecked">
                                Python
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="3" id="flexCheckChecked" name="lenguajes[]" checked>
                              <label class="form-check-label" for="flexCheckChecked">
                                Css
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="4" id="flexCheckChecked" name="lenguajes[]" checked>
                              <label class="form-check-label" for="flexCheckChecked">
                                Javascript
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="5" id="flexCheckChecked" name="lenguajes[]" checked>
                              <label class="form-check-label" for="flexCheckChecked">
                                Typescript
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="6" id="flexCheckChecked" name="lenguajes[]" checked>
                              <label class="form-check-label" for="flexCheckChecked">
                                C#
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="7" id="flexCheckChecked" name="lenguajes[]" checked>
                              <label class="form-check-label" for="flexCheckChecked">
                                Node js
                              </label>
                            </div>


                          </div>

                          <div class="mb-3">
                            <h5>nivel de ingles</h5>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <select name="niveling" id="">
                                <option value="1">basico</option>
                                <option value="2">intermedio</option>
                                <option value="3">avanzado</option>
                            </select>
                            </div>
                          </div>

                          <div class="mb-3">
                              <select class="form-select" aria-label="Default select example">
                              <option selected>Nivel academico</option>
                              <option value="1">Bachiller</option>
                              <option value="2">Tecnico</option>
                              <option value="3">Tecnologico</option>
                              <option value="4">profesional</option>
                              <option value="5">Estudiante universitario</option>
                              </select>
                          </div>

                          <button type="submit" value="registrar"  class="btn btn-success fs-5 w-100">Registrate</button>
                          <button type="reset" value="reset"  class="btn btn-danger fs-5 w-100 mt-3">limpiar</button>
                        </form> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


