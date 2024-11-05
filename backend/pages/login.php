<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-secondary">
    <form class="vh-100 gradient-custom" action="../controllers/validar_usuario.php" method="POST">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Introduce usuario y contraseña</p>

                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <input type="text" id="caja_usuario" name="caja_usuario" class="form-control form-control-lg" placeholder="Usuario" />
                                    <label class="form-label" for="typeEmailX">Usuario</label>
                                </div>

                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <input type="password" id="caja_password" name="caja_password" class="form-control form-control-lg" placeholder="Contraseña" />
                                    <label class="form-label" for="typePasswordX">Contraseña</label>
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-lg px-5" type="submit">Login</button>

                            </div>

                            <div>
                                <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>