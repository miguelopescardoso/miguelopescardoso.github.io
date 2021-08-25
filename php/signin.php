<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFruits</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../sass/signin.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js" integrity="sha512-UxP+UhJaGRWuMG2YC6LPWYpFQnsSgnor0VUF3BHdD83PS/pOpN+FYbZmrYN+ISX8jnvgVUciqP/fILOXDjZSwg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <?php
        function test(num){
            num = 3;
        }
    ?>
    <header class="header">
        <nav>
            <div class="left">
                <div class="logo">
                    <img src="../img/newLogo.png" alt="" onclick="page('../index.html')">
                </div>
            </div>
            <div class="right">
                <div id="svg" onclick="page('../html/shop.html')">
                    <svg width="auto" height="4vh" viewBox="0 0 802 684" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="basket">
                        <ellipse id="1" cx="355.365" cy="409.382" rx="36.6349" ry="37.625" fill="white"/>
                        <rect id="1" x="217.94" y="173.827" width="72.5898" height="265.069" transform="rotate(-22.5344 217.94 173.827)" fill="white"/>
                        <rect id="2" x="165.999" y="48.8232" width="72.5898" height="265.069" transform="rotate(-22.5344 165.999 48.8232)" fill="white"/>
                        <rect id="3" x="328" y="74.104" width="72.5898" height="270.575" transform="rotate(-24.5012 328 74.104)" fill="white"/>
                        <rect id="4" x="50" y="361" width="72" height="723" transform="rotate(-90 50 361)" fill="white"/>
                        <rect id="5" x="107" y="683" width="72" height="589" transform="rotate(-90 107 683)" fill="white"/>
                        <rect id="6" x="7.31421" y="359.352" width="74.1524" height="298.663" transform="rotate(-12.8585 7.31421 359.352)" fill="white"/>
                        <rect id="7" x="727.182" y="314.979" width="74.1524" height="332.601" transform="rotate(13.33 727.182 314.979)" fill="white"/>
                        <rect id="8" x="202.797" y="73.8225" width="72.5898" height="165.167" transform="rotate(-79.8648 202.797 73.8225)" fill="white"/>
                        <ellipse id="9" cx="210.5" cy="38" rx="47.5" ry="36" fill="white"/>
                        <ellipse id="10" cx="195" cy="31.5" rx="36" ry="31.5" fill="white"/>
                        <circle id="11" cx="376.5" cy="50.5" r="18.5" fill="white"/>
                        <ellipse id="12" cx="106" cy="645" rx="32" ry="38" fill="white"/>
                        <ellipse id="13" cx="46" cy="339" rx="42" ry="48" fill="white"/>
                        <path id="14" d="M81 325C81 346.539 61.6437 364 39 364C16.3563 364 7.5 378 0 323.5C0 301.961 12.3563 289 35 289C76.5 287 81 303.461 81 325Z" fill="white"/>
                        <path id="15" d="M790.5 295.5C813.5 313 792.575 356 786.5 356C780.425 356 761.45 295.204 761.45 292.995C761.45 290.786 770.925 289 777 289C783.075 289 790.5 293.291 790.5 295.5Z" fill="white"/>
                        <path id="16" d="M723.5 650.5C721.5 656.5 722.5 676.5 694 683C679.462 686.316 667 669.569 667 653C667 636.431 679.088 623 694 623C708.912 623 727 634.5 723.5 650.5Z" fill="white"/>
                        <rect id="17" x="106" y="483" width="624" height="20" fill="white"/>
                        <rect id="18" width="279.561" height="21.0023" transform="matrix(0.21708 0.976154 0.976154 -0.21708 168 359.886)" fill="white"/>
                        <rect id="19" width="279.561" height="21.0023" transform="matrix(0.112209 0.993685 0.993685 -0.112209 307 345.357)" fill="white"/>
                        <rect id="20" width="279.561" height="21.0023" transform="matrix(-0.197964 0.980209 0.980209 0.197964 611.482 337.556)" fill="white"/>
                        <rect id="121" width="279.561" height="21.0023" transform="matrix(-0.102916 0.99469 0.99469 0.102916 471.905 337.974)" fill="white"/>
                        </g>
                    </svg>
                </div>
                <button onclick="page('../html/faq.html')" class="other">
                    FAQ
                </button>
                <button onclick="page('../html/review.html')" class="other">
                    REVIEW
                </button>
                <button onclick="page('../html/about.html')" class="other">
                    ABOUT
                </button>
                <button onclick="page('../php/signin.php')">
                    SIGN IN 
                </button>
                <button onclick="page('../php/join.php')">
                    JOIN MYFRUITS
                </button>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="outerBox">
            <div class="text">
                <h2>CREATE A NEW MYFRUITS ACCOUNT</h2>
                <p>OR&nbsp<button onclick="page('./signin.html')">LOG IN</button>&nbspTO AN EXISTING ONE</p>
            </div>
            <div class="innerBox">
                <form action="../php/signup.php" method="POST">
                    <input type="text" name="uname" id="" placeholder="USERNAME">
                    <input type="password" name="pass" id="" placeholder="PASSWORD">
                    <input type="submit" value="SIGN IN" class="submit">
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="extra">
            <button onclick="page('./html/faq.html')">FAQ</button>
            <button onclick="page('./html/about.html')">ABOUT</button>
            <button onclick="page('./html/review.html')">REVIEW</button>
        </div>
        <p>By Miguel Lopes Cardoso</p>
    </footer>
    <script src="../js/index.js"></script>
</body>
</html>
