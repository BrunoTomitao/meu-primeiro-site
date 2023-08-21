<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrunoCherbaty</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="imagens/icon.png">
</head>
                    
<body>
    <header>
        <div class="nav container">
            <i class='bx bx-menu' id="menu-icon"></i>

            <a href="index.php" class="logo">Bruno<span>Cherbaty</span></a>

            <ul class="navbar">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="jogos.php">Jogos</a></li>
                <li><a href="projetos.php">Projetos</a></li>
                <li><a href="about.php">Sobre</a></li>
                <li><a href="ourblog.php">Minhas redes</a></li>
            </ul>

            <i class='bx bx-search' id="search-icon"></i>

            <div class="search-box container">
                <input type="search" name="" id="" placeholder="Search here...">
            </div>
        </div>
    </header>

    <section class="home" id="home">
        <div class="home-text">
            <?php
                echo "<h1>Vos Apresento <br> alguns <span>carros</span> que gosto</h1>";
                echo "<p>Como são varios irei apresentar apenas alguns.</p>";
            ?>
        </div>
    </section>
    <section class="cars" id="cars">
        <div class="heading">
            <span>Os meus prediletos</span>
            <?php
                echo "<h2>Nessa lista há</h2>";
                echo "<p>Vários JDM e alguns carros alemães.</p>";
            ?>
        </div>
        <div class="cars-container container">
            <div class="box">
                <img src="imagens/car1.jpg" alt="">
                <a href="car1.php">
                    <?php    
                        echo "<h2>Mazda RX7</h2>";
                    ?>
                </a>
            </div>
            <div class="box">
                <img src="imagens/car2.jpg" alt="">
                <a href="car2.php">
                    <?php
                        echo "<h2>Toyota Supra</h2>";
                    ?>
                </a>
            </div>
            <div class="box">
                <img src="imagens/car3.jpg" alt="">
                <a href="car3.php">
                    <?php    
                        echo "<h2>Nissan Skylinne R34</h2>";
                    ?>
                </a>
            </div>
            <div class="box">
                <img src="imagens/car4.jpg" alt="">
                <a href="car4.php">
                    <?php
                        echo "<h2>Honda NSX</h2>";
                    ?>
                </a>
            </div>
            <div class="box">
                <img src="imagens/car5.jpg" alt="">
                <a href="car5.php">
                    <?php
                        echo "<h2>Porsche GT3RS</h2>";
                    ?>
                </a>
            </div>
            <div class="box">
                <img src="imagens/car6.jpg" alt="">
                <a href="car6.php">
                    <?php
                        echo "<h2>BMW M3 E36</h2>";
                    ?>
                </a>
            </div>
        </div>
    </section>

    <section class="smokey">
        <div class="box">
            <?php
                echo "<h2>O lendário Smokey Nagata</h2>"; 
                echo "<h3>Alcançou 200 Mp/H(322 Km/h) em seu supra, no ano de 1999</h3>";  
                echo "<p>Como todo amante de carros, não posso deixar de falar que sou um grande fã de seu feito. Obs: Apesar das
                consequecias.</p>";   
                echo "<p>Smokey fazia parte da GANG chamada Midnight Club, uma gang na qual somente pessoas selecionadas
                participavam. Para fazer parte dela,</p>";
                echo "<p>uma das exigências era ter um carro que consegue passar dos 300KM/H.</p>";
            ?>
            <section class="video container" id="video">
                <video src="video/SMOKEY NAGATA's MIDNIGHT 200MPH BLAST chapter 5.mp4" controls
                    poster="imagens/smokey.jpg" width="1070px">
                </video>
            </section>
        </div>
    </section>

    <section class="blog" id="blog">
        <div class="heading">
            <span>Outras lendas</span>
            <?php
                echo "<h2>Aqui coloquei alguns carros que são famoso</h2>";  
                echo "<p>pelo som ou por uma pessoa em expecifica que os usaram.</p>";
            ?>
        </div>

        <div class="blog-container container">
            <div class="box">
                <img src="imagens/car1.jpg" alt="">
                <span>25 de Maio de 2023</span>
                <?php
                    echo "<h3>Mazda RX7 FD</h3>";   
                    echo "<p>Gosto bastante dele por conta do motor rotativo e o som que ele faz. E um fato curioso que foi um
                    menino de 17 anos que criou o motor desse carro.</p>";
                ?>
                <a href="car1.php" class="blog-btn">Veja mais<i class='bx bx-right-arrow-alt'></i></a>
            </div>

            <div class="box">
                <img src="imagens/car4.jpg" alt="">
                <span>25 de Maio de 2023</span>
                <?php
                    echo "<h3>Honda NSX</h3>";    
                    echo "<p>Curto pois além de ter o famoso VTEC dos civics, o nosso maior piloto de F1 ajudou no desenvolvimento
                    dele.</p>";
                ?>
                <a href="car4.php" class="blog-btn">Veja mais<i class='bx bx-right-arrow-alt'></i></a>
            </div>

            <div class="box">
                <img src="imagens/car3.jpg" alt="">
                <span>25 de Maio de 2023</span>
                <?php
                    echo "<h3>Nissan Skylinne GTR R34</h3>";   
                    echo"<p>Não tem como olhar esse carro e não lembrar do famoso Brian O'Conner.</p>";
                ?>
                <a href="car3.php" class="blog-btn">Veja mais<i class='bx bx-right-arrow-alt'></i></a>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="footer-container container">
            <div class="footer-box">
                <a href="#" class="logo">Bruno<span>Cherbaty</span></a>
                <div class="social">
                    <a href="https://www.facebook.com/bruno.cherbaty"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/bruno_cherbaty/"><i class='bx bxl-instagram'></i></a>
                    <a href="https://twitter.com/brunocherbaty2"><i class='bx bxl-twitter'></i></a>
                    <a href="https://www.linkedin.com/in/bruno-cherbaty-de-alencar-89b6a4266/"><i
                            class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
    </section>

    <script src="main.js"></script>


</body>

</html>