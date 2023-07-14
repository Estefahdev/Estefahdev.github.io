<head>
    <!-- css header y footer-->
    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- favicon -->
    <link rel="icon" href="" type="image/x-icon">

    <!-- meta -->
    <meta property="og:image" content="">
    <meta name="twitter:card" content="">
    <meta name="twitter:image" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">

    <!-- slick -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font-family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- javascript -->
    <script src="javascriptcode.js"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/388554b322.js" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- HTML -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estefania Henriquez Developer</title>

    <!-- Header -->
    <nav class="headermd">
        <div class="iconmage1">
            <a href="">
                <img src="" alt="">
            </a>
        </div>
        <div class='header-links'>
            <ul class="alinks">
                <li>
                    <a href="">Inicio</a>
                </li>
                <li>
                    <a href="">Quienes Somos?</a>
                </li>
                <li>
                    <a href="">Servicios</a>
                </li>
                <li>
                    <a href="">Contactenos</a>
                </li>
                <li>
                    <a href="">Galeria</a>
                </li>
            </ul>
            <div class='line1'></div>
            <div class='socialmedia1'>
                <li><a target=”_blank” href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                <li><a target=”_blank” href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a target=”_blank” href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
            </div>
        </div>
        <div class='burger'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </nav>
    <script>
        const navSlide = () => {
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.header-links');
            const navLinks = document.querySelectorAll('.header-links li');

            burger.addEventListener('click', () => {
                // toggle-header
                nav.classList.toggle('header-active');

                // link-animation
                navLinks.forEach((link, index) => {
                    if (link.style.animation) {
                        link.style.animation = ''
                    } else {
                        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
                    }
                });
                // burger-animation
                burger.classList.toggle('toggle');

            });
        }
        navSlide();
    </script>
</head>

<body>
    <div class='background1'>
        <div class='container'>
            <div class='bgbox1'>
                <div class='txt1'>
                    <span>Hello,</span>
                    <h1>I'm Estefania Henriquez</h1>
                    <h3>Website Developer</h3>
                    <div class='btn-1'>
                        <a href="">Let's Talk</a>
                    </div>
                </div>
                <div class='img1'>
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <div class='backgroundfooter'>
        <div class='container'>
            <div class='bgfooter'>
                <div class='iconfooter'>
                    <img src="" alt="">
                </div>
                <div class='directionfooter'>
                    <p>Canton Central, San José Costa Rica</p>
                </div>
                <div class='socialmediafooter'>
                    <a target=”_blank” href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    <a target=”_blank” href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a target=”_blank” href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a target=”_blank” href=""><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>