<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Bootstrap Login</title>
</head>
<body>
    <!-- Main Container -->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!-- Login Container -->

    <div class="row border rounder-5 p-3 bg-white shadow box-area">

    <!-- Left box(holds the image and the light) -->

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box " style="background: darkorange;">

            <div class="featured-image mb-3">
                <img src="images/man-taking-care-of-dog-vector-removebg-preview.png" class="img-fluid" style="width: 250px">
            </div>

            <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Vigie seu pet</p>
            <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Seu melhor amigo, protegido</small>

        </div>

    <!-- Right box(holds the input form) -->

        <div class="col-md-6 right-box">
            <div class="row align-items-center">

                <div class="header-text mb-4">
                    <h2>Conheça o PetFinder</h2>
                    <p>Encontre seu pet em minutos</p>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address">
                </div>

                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                </div>

                <div class="input-group mb-5 d-flex justify-content-between">
                     <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="form-check" class="form-check-label text-secondary" ><small>Remember Me</small></label>
                     </div>

                     <div class="forgot">
                        <small><a href="#">Forgot Password?</a></small>
                     </div>
                     
                </div>

                <div class="input-group mb-3">
                    <button class=" btn btn-lg btn-outline-primary w-100 fs-6">Login</button>
                </div>

                <div class="input-group mb-3">
                    <button class=" btn btn-lg btn-light w-100 fs-6"><img src="Images/google.png" style="width: 20px;" class="me-2"><small>Sign In with Google</small></button>
                </div>

                <div class="row">
                    <small>Don't Have a account? <a href="#">Sign Up</a></small>
                </div>
            </div>
        </div>

    </div>
 </div>

</body>
</html>