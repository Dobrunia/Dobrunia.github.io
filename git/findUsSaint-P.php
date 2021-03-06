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
    <?php
        include('navbar.php');
    ?>
        <div id="maps">
            <div class="map">
                <div>
                    <h2>Владимирский просп., 4, Санкт-Петербург</h2>
                    <h3>+7(812) 713-13-36</h3>
                    <a target="_blank" href="https://yandex.ru/maps/2/saint-petersburg/?from=api-maps&ll=30.349747%2C59.931865&mode=usermaps&origin=jsapi_2_1_77&um=constructor%3Acce1b954eb0714884c55f8732df63fe74e0de7b0a7e294525e9b08a9558cd236&z=16"><button class="btn">показать на карте</button></a>
                </div>
                <br>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acce1b954eb0714884c55f8732df63fe74e0de7b0a7e294525e9b08a9558cd236&amp;width=320&amp;height=240&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
            <div class="map">
                <div>
                    <h2>Итальянская ул., 15, Санкт-Петербург</h2>
                    <h3></h3>
                    <a target="_blank" href="https://yandex.ru/maps/2/saint-petersburg/?from=api-maps&ll=30.336701%2C59.934570&mode=poi&origin=jsapi_2_1_77&poi%5Bpoint%5D=30.333191%2C59.935287&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D1231161762&z=16.4"><button class="btn" id="showMap2">показать карту</button></a>
                </div>
                <br>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A28ce5d59a69c274f338e1b255a22b7b890e11a6f3b900b0b78996c49084e2d56&amp;width=320&amp;height=240&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
            <div class="map">
                <div>
                    <h2>Большая Монетная ул., 23, Санкт-Петербург</h2>
                    <h3></h3>
                    <a target="_blank" href="https://yandex.ru/maps/2/saint-petersburg/?from=api-maps&ll=30.322432%2C59.962694&mode=usermaps&origin=jsapi_2_1_77&um=constructor%3A8442b2c336bf53bccc5d89ddcc07a0f2c7e80b9736222e222dfa3a7a757beb6a&z=15"><button class="btn" id="showMap3">показать карту</button></a>
                </div>
                <br>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8442b2c336bf53bccc5d89ddcc07a0f2c7e80b9736222e222dfa3a7a757beb6a&amp;width=320&amp;height=240&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
        </div>
        <script src="./js/scripts.js" type=""></script>
</body>

</html>
