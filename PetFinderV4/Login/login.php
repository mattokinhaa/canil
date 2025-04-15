<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Tudo pro seu pet em um só lugar</title>
</head>
<body>
    <!-- Main Container -->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!-- Login Container -->

    <div class="row border rounder-5 p-3 bg-white shadow box-area">

    <!-- Left box(holds the image and the light) -->

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box " style="background: darkorange;">

            <div class="featured-image mb-3">
                <img src="images/signup1nobg.png" class="img-fluid" style="width: 600px">
            </div>

            <!--<p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Vigie seu pet</p>
            <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Seu melhor amigo, protegido</small> -->

        </div>

    <!-- Right box(holds the input form) -->

        <div class="col-md-6 right-box">
            <div class="row align-items-center">

                <div class="header-text mb-4">
                    <h2>Inicie sua sessão no PetFinder</h2>
                    <p>Encontre tudo o que o seu pet precisa</p>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Insira o email">
                </div>

                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Insira a senha">
                </div>

                <div class="input-group mb-5 d-flex justify-content-between">
                     <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="form-check" class="form-check-label text-secondary" ><small>Lembrar Dispositivo</small></label>
                     </div>

                     <div class="forgot">
                        <small><a href="#">Esqueceu a senha?</a></small>
                     </div>
                     
                </div>

                <div class="input-group mb-3">
                    <button class=" btn btn-lg btn-outline-primary w-100 fs-6">Login</button>
                </div>

                <div class="input-group mb-3">
                    <button class=" btn btn-lg btn-light w-100 fs-6"><img src="Images/google.png" style="width: 20px;" class="me-2"><small>Iniciar sessão com Google</small></button>
                </div>

                <div class="row">
                    <small>Não possui uma conta? <a href="../Signup/signup.php">Inscreva-se</a></small>
                </div>
            </div>
        </div>

    </div>
 </div>

</body>
</html>