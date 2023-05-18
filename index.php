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
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="SIGNINLabel">SIGN IN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                              <form action="./registro.php"> 
                            <div class="container px-2">
                              <div class="row gx-2">
                                <div class="col">
                                 <div class="p-1 ">
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">NOMBRES</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="daniel felipe">
                                      
                                    </div>
                                 </div>
                                </div>
                                <div class="col">
                                  <div class="p-1 ">
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">APELLIDOS</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="asencio martinez">
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="mb-3">
                            <label for="telefono" class="form-label">Telefono de contacto</label>
                            <input type="email" class="form-control" id="telefono" aria-describedby="emailHelp" name="telefono" placeholder ="311022500">
                          </div>

                          <button type="submit" value="registrar"  class="btn btn-success fs-5 w-100">SIGN IN</button>
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


