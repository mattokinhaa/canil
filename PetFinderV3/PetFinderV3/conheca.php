<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/apresentacao.css">
    <title>Pagina inicial</title>
</head>
<body>

    <header class="top-nav">
        <nav>
            <a href="./login/login.php" class="btn btn-login">Login</a>
            <a href="signup.php" class="btn btn-signup">Novo por aqui?</a>
        </nav>
    </header>

    <section>
        <div class="background-section">
            <video src="assets/videos/fundo.mp4" autoplay loop muted></video>
        </div>
        <div class="box">
            <div class="conteudo">
                <img src="assets/img/logo2.png" alt="logotipo PetFinder">
                <p>&nbsp &nbsp &nbsp O PetFinder é uma empresa dedicada a reunir 
                    pets perdidos aos seus donos! Utilizamos uma plataforma intuitiva, 
                    permite que pessoas publiquem e encontrem fotos de cachorros perdidos 
                    e achados na região, facilitando o reencontro entre tutores e seus 
                    animais de estimação. 
                </p>
            </div>
        </div>
    </section>
    <section class="sobre">

        <!-- Título da Seção  -->
        <h2>Ao acessar PetFinder você encontra</h2>

        <!-- Card Flexível com três itens -->
        <div class="features">

            <div class="feature">
                <div class="feature-icon">
                    <img src="assets/img/icon-products.png" alt="Produtos">
                </div>
                <p>Rações, brinquedos e outros produtos</p>
            </div>

            <div class="feature">
                <div class="feature-icon">
                    <img src="assets/img/icon-locator.png" alt="Localizador">
                </div>
                <p>Nosso localizador de pet intuitivo</p>
            </div>

            <div class="feature">
                <div class="feature-icon">
                    <img src="assets/img/icon-reminders.png" alt="Lembretes">
                </div>
                <p>Um sistema de lembretes para o seu pet</p>
            </div>
        </div>

    </section>
    
    <footer id="contato">
        <div class="contact-info">
            <p>Instagram: <a href="https://www.instagram.com/petfindersjc" target="_blank">@petfindersjc</a></p>
            <p>Email: <a href="mailto:petfinderjrmagu@gmail.com">petfinderjrmagu@gmail.com</a></p>
            <p>Telefone: (11) 1234-5678</p>
        </div>
        <div class="copyright">
            <p>&copy; 2025 Todos os direitos reservados aos desenvolvedores</p>
        </div>
    </footer>
</body>
</html>