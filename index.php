<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Servi Rines Empleados</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="images/p4.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.css">

</head>

<body>
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->


    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" style="color: white;" href="#">&nbsp; &nbsp; Nelson Jiménez</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>
    <div class="jumbotron">
        <div class="container">
            <br>
            <h1 class="display-4">Empleados</h1>
            <p class="lead">Agregar, mostrar y buscar</p>
            <hr class="my-4">
        </div>

    </div>
    <div class="container">

        <!-- Button trigger modal -->



        <div class="row  align-items-center">


            <div class="d-grid gap-2 d-md-flex justify-content-md-star">
                <button type="button" class="btn btn-dark " data-bs-toggle="modal" data-bs-target="#modal">
                    Agregar Empleados
                </button>
                <form action="" method="post">
                    <input class="form-control" type="text" id="inputBusqueda" name="search" placeholder="Buscar...">
                </form>
            </div>





            <!-- <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
            </div> -->
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form class="form-inline" role="form" id="frmRegistroUsuario" method="POST" action="procesos/insertar.php">
                                <div class="form-group">
                                    <label for="">Nombre:</label>
                                    <input type="" class="form-control" name="inpRegNombre" id="inpRegNombre">
                                </div>
                                <div class="form-group">
                                    <label for="">Cédula:</label>
                                    <input type="" class="form-control" name="inpRegCedula" id="inpRegCedula">
                                </div>
                                <div class="form-group">
                                    <label for="">Correo:</label>
                                    <input type="" class="form-control" name="inpRegEmail" id="inpRegEmail">
                                </div>
                                <div class="form-group">
                                    <label for="">Teléfono:</label>
                                    <input type="" class="form-control" name="inpRegTelefono" id="inpRegTelefono">
                                </div>
                                <div class="form-group">
                                    <label for="">Ciudad:</label>
                                    <input type="" class="form-control" name="inpRegCiudad" id="inpRegCiudad">
                                </div>
                                <div class="form-group">
                                    <label for="">Contraseña:</label>
                                    <input type="" class="form-control" name="inpRegPassword" id="inpRegPassword">
                                </div>
                                <br>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-dark">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <?php

    require_once "dbConnect.php";
    require_once "metodos.php";
    ?>



    <br>
    <br>
    <br>

    <div class="container">
        <table class="table">
            <thead class="table-secondary table-hover">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cédula</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody id="myTable">
                <?php

                $obj = new metodos();
                $sql = "SELECT * FROM empleados";
                $data = $obj->mostrarDatos($sql);
                foreach ($data as $key) {
                ?>
                    <tr>
                        <td> <?php echo $key['nombre'] ?> </td>
                        <td> <?php echo $key['cedula'] ?> </td>
                        <td> <?php echo $key['email'] ?> </td>
                        <td> <?php echo $key['telefono'] ?> </td>
                        <td> <?php echo $key['ciudad'] ?> </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>


    </div>




    <!-- Modal -->
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">UPDATE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="update_form" method="post">
                        <div class="form-group">
                            <input style="display: none;" type="text" name="id" class="form-control" id="update_id" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">NAME</label>
                            <input type="text" name="name" class="form-control" id="update_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">LastName</label>
                            <input type="text" name="lastname" class="form-control" id="update_lastname">
                        </div>
                        <button type="button" id="update_btn" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    </tbody>
    </table>




    <br>
    <br>
    <br>
    <br>
    <br>









    

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="js/vendor/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <script src="js/search.js"></script>
    

</body>

</html>