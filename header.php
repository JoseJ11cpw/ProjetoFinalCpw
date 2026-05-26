<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> <!--Ligar Bootsrap-->
    <link rel="stylesheet" href="css/fontes.css"> <!-- Ligar ao Css onde tem as fontes-->
    <link rel="stylesheet" href="css/stylesNav.css">
    <link rel="stylesheet" href="css/styles.css"> <!-- Ligar ao Css-->
</head>

<nav class="navbar">

    <div class="nav-left">
        <a href="index.php">
            <img src="imagens/favicon.ico" alt="Logo" height="100" width="100">
        </a>

        <h1>A ilha dos<br>Açores</h1>
    </div>

    <!-- Botão hamburguer -->
    <div class="menu-toggle" id="menu-toggle">
        ☰
    </div>

    <div class="nav-right" id="nav-right">
        <a href="cultura.php">Gastronomia</a>
        <a href="restaurantes.php">Restaurantes</a>
        <a href="alojamentos.php">Alojamentos</a>
        <a class="botaologin" href="login.php">Log in</a>
    </div>

</nav>

<script>
const menuToggle = document.getElementById('menu-toggle');
const navRight = document.getElementById('nav-right');

menuToggle.addEventListener('click', () => {
    navRight.classList.toggle('active');
});
</script>