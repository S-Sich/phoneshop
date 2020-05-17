<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">
    <?php
    $goods = [
        [
            'id' => 1,
            'name' => 'Iphone',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A odit voluptatibus dolores dolorum cupiditate aut quasi illo ipsa ipsum, eveniet numquam, vero repudiandae optio, amet impedit magni neque. Laudantium repellendus voluptatum consequatur corporis eos, itaque, delectus obcaecati in neque enim ad repudiandae commodi reprehenderit possimus. Sapiente rerum at repellat aliquid?',
            'img' => '/images/goods/iphone.jpg',
            'price' => '2000 $'
        ],
        [
            'id' => 2,
            'name' => 'HTC',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum voluptatem possimus sint repellat libero impedit consequatur, quod inventore qui totam, modi, accusamus. Perferendis repellat ipsa vero eos blanditiis doloribus consequatur soluta veritatis consequuntur ipsam natus officiis pariatur nam assumenda sint laudantium odio sapiente, adipisci amet.',
            'img' => '/images/goods/htc.jpg',
            'price' => '1200 $'
        ],
        [
            'id' => 3,
            'name' => 'Samsung',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non quibusdam natus suscipit architecto expedita vero, molestias pariatur. Fugiat, dolorum et. Quisquam harum autem sit, nemo esse quidem non voluptatum odio tenetur veniam dolor nam obcaecati alias tempora quo reprehenderit, ad deleniti sunt maxime, minima dolore atque adipisci deserunt! Quaerat.',
            'img' => '/images/goods/samsung.jpg',
            'price' => '1400 $'
        ]
    ];

    $page = $_GET['page'];
    if (!isset($page)) {
        require('templates/main.php');
    }  elseif ($page == 'shop') {
        require('templates/shop.php');
    }  elseif ($page == 'product') {
        $id = $_GET['id'];
        $good = [];
        foreach ($goods as $product) {
            if ($product['id'] ==$id) {
                $good = $product;
                break;
            }
        }
        require('templates/openproduct.php');
    }

    ?>

</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                info@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 800 555 00 00
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, пр-т Ленина, д. 1 офис 304
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brandshop</div>
    </div>
</footer>

</body>
</html>