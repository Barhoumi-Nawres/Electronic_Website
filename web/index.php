<?php
session_start(); // Initialisation des sessions

if(isset($_POST['send'])){
    // Extraction des variables 
    extract($_POST);

    // Vérification si les variables existent et ne sont pas vides 
    if(isset($username) && $username != "" &&
       isset($email) && $email != "" &&
       isset($phone) && $phone != "" &&
       isset($message) && $message != "" &&
       isset($subject) && $subject != "") {

        // Envoi de l'email 
        $to = "nawresbarhoumi2019@gmail.com";
        $subject = "Vous avez reçu un message de : " . $email;
        $message = "
            <p>Vous avez reçu un message de <strong>".$email."</strong></p>
            <p>Nom: <strong>".$username."</strong></p>
            <p>Téléphone: <strong>".$phone."</strong></p>
            <p>Message : <strong>".$message."</strong></p>
        ";

        // En-têtes du mail
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= 'From: <'.$email.'>' . "\r\n";

        // Envoi du mail
        $send = mail($to, $subject, $message, $headers);

        if($send){
            $_SESSION['success_message'] = "Message envoyé";
            $color = "green";
        } else {
            $info = "Message non envoyé !";
            $color = "red";
        }
    } else {
        // Si des champs sont vides 
        $info = "Veuillez remplir tous les champs !";
        $color = "red";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <title>embedded_enetcom</title>
</head>
<body>

<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">embedded<span>system.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">logiciels</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, nous sommes </div>
                <div class="text-2">nawres barhoumi et Amal bouabid </div>
                <div class="text-3">et nous sommes des futures  ingénieurs .</div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Apropos de nous </h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/carteelectronique.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">qui nous sommes </div>
                    <p>nous sommes une entreprise qui vous consielle quel est la meilleur carte électronique que vous pouvez pour votre projet en terme de performance ,exactitude ....etc .</p>
                    <a href="#">régarde vidéo</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card" >
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">STM32</div>
                        <img src="images/55.png" alt="" height="150px">
                        <p>La carte STM32F4Discovery offre les caractéristiques suivantes 
                            : — Un microcontrôleur STM32F407VGT6 avec processeur ARM Cortex-M4 32 bits doté de : — une mémoire F
                            lash de 1 Mo, — une mémoire vive de 192 Ko, — une FPU, — Un ST-LINK/V2 intégré..</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Raspberry Pi 4</div>
                        <img src="images/33.png" alt="" height="150px">
                        <p>Cette carte est basée sur un processeur ARM et permet l'exécution du système 
                            d'exploitation GNU/Linux/Windows 10 IoT et des logiciels compatibles. Le Raspberry Pi
                             peut effectuer des tâches d'un PC de bureau (feuilles de calcul, traitement de texte, jeux)..</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">ESP32</div>
                        <img src="images/44.png" alt="" height="150px">
                        <p>ESP32 est une série de microcontrôleurs de type système sur une puce (SoC) d'Espressif Systems, basé sur l'architecture Xtensa LX6 de Tensilica (en), intégrant la gestion du
                             Wi-Fi et du Bluetooth (jusqu'à LE 5.0 et 5.1) en mode double, et un DSP.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">les logiciels </h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">les logiciels que vous pouvez les utilisez .</div>
                    <p> Les logiciels de systèmes embarqués peuvent être définis comme des outils de programmation 
                        spécialisés dans les dispositifs embarqués qui facilitent le 
                        fonctionnement des machines . Le logiciel gère divers périphériques et systèmes matériels..</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>STM32CUBEIDE</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>thony</span>
                            <span>88%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams" >
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/1.PNG" alt="">
                        <div class="text">Amal</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/2.PNG" alt="">
                        <div class="text">Nawres</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">nawres et Amal</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Enetcom ,sfax</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">nawresbarhoumi2019@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <?php
    if(isset($_SESSION['succes_message'])){?>
        <p class="request_message" style="color:green">
        <?=$$_SESSION['succes_message']?>
        </p>
        <?php
    }

    ?>
    <?php
    if(isset($info)){?>
        <p class="request_message" style="color:red">
        <?=$info?>
        </p>
        <?php
    }
    ?>
                    <!--formulaire pour les clients-->
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div class="fields">
        <div class="field name">
            <input type="text" name="username" placeholder="Name" required>
        </div>
        <div class="field email">
            <input type="email" name="email" placeholder="Email" required>
        </div>
    </div>
    <div class="field">
        <input type="text" name="subject" placeholder="Subject" required>
    </div>
    <div class="field">
        <input type="number" name="phone" placeholder="Numéro de téléphone" required placeholder="+216........">
    </div>
    <div class="field textarea">
        <textarea name="message" cols="30" rows="10" placeholder="Message.." required></textarea>
    </div>
    <div class="button-area">
        <button type="reset">Annuler</button>
        <button type="submit" name="send">Send</button>
    </div>
</form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://www.codingnepalweb.com">CodingNAWRES AND amal</a> | <span class="far fa-copyright"></span> 2024.</span>
    </footer>

    <script src="script.js"></script>
  
</body>
</html>