<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!doctype html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
    <?

    use Bitrix\Main\Page\Asset;
    use Bitrix\Main\UI\Extension;

    Extension::load('ui.bootstrap4');
    // JS
    CJSCore::Init(array("jquery3"));
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/fancy/jquery.fancybox.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.min.js');
    // CSS;
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/js/fancy/jquery.fancybox.min.css');
    // HEADERS
    $APPLICATION->ShowHead();
    ?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="apple-touch-icon" sizes="57x57" href="/local/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/local/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/local/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/local/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/local/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/local/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/local/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/local/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/local/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/local/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/local/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/local/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/local/ico/favicon-16x16.png">
    <link rel="manifest" href="/local/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/local/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>
<?$APPLICATION->ShowPanel();?>



<div class="top_header">
    <div class="container">
        <div class="top_header_content">
            <div class="top_one">
                <div class="logo">
                    <a href="/" title="" class="site_header_logo">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/logo1c.png" class="logo_com" width="80px">
                    </a>
                </div>
                <div class="Name">
					<a href="/">Обучение 1С</a>
                </div>
                <div class="phone_top">
                    <a class="phone" href="tel:8999999999" rel="nofollow">+7 (495) 241-49-26</a>
                </div>
            </div>
            <div class="top_two">

                <div class="menu_header">
                    <ul>
                        <li>
							<a href="/">Главная</a>
							<a href="/catalog.php">Каталог</a>
							<a href="/payment.php">Договоры и оплата</a>
							<a href="/about.php">О нас</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>






