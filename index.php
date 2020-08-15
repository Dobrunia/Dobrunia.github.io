<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ekaterina Kostrigina</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id='first'>
        <?php
            include('navbar.php');
        ?>
            <span id='logo'>Ekaterina Kostrigina</span>
            <div class="contacts">
                <a href=""><img src="" alt=""></a>
                <a href=""><img src="" alt=""></a>
                <a href=""><img src="" alt=""></a>
            </div>
            <div class='box'>
                <div class="visible">
                    <div class="font-side">
                        <img src="./img/01.jpg" alt="">
                    </div>
                    <div class="back-side">
                        <img src="./img/02.jpg" alt="">
                    </div>
                    <div class="left-side">
                        <img src="./img/03.jpg" alt="">
                    </div>
                    <div class="right-side">
                        <img src="./img/01.jpg" alt="">
                    </div>
                    <div class="top-side">
                        <img src="./img/02.jpg" alt="">
                    </div>
                    <div class="bottom-side">
                        <img src="./img/03.jpg" alt="">
                    </div>
                </div>
            </div>
    </div>
    <div id="second">
        <input type="checkbox" name=""><span>золото</span>
        <input type="checkbox" name=""><span>броши</span>
        <input type="checkbox" name=""><span>серьги</span>
        <h1>Ekaterina Kostrigina</h1>
        <div class="positions">
            <div class="position">
                <div class="PosImg"><img src="" alt=""></div>
                <div class="contentBox">
                    <h2>Бусы из жемчуга</h2>
                    <a href="#">подробнее</a>
                </div>
            </div>
        </div>
    </div>
    <footer></footer>
    <!--
    <script type="text/javascript">
        const logo = document.getElementById('logo');

        window.addEventListener('scroll',function(){
            let value = window.scrollY;

            logo.style.top = value + 1 + 'px';
        })
    </script>
-->
    <script src="./js/scripts.js" type=""></script>
</body>

</html>
