<?php

use yii\helpers\Url;
use yii\helpers\Html;

$current_controller = Yii::$app->controller->id;  
$current_action = Yii::$app->controller->action->id;  

$this->registerCssFile('@web/css/header.css', ['depends' => [yii\web\JqueryAsset::class]]);
?>

<header>
    <nav class="navbar">
        <div class="logo">
            <a href="<?= Url::to(['/site/home']) ?>">
                <?= Html::img('@web/images/secpedia.png', ['alt' => 'Logo']) ?>
            </a>
        </div>

    
        <ul class="nav-links">
            <li><a href="<?= Url::to(['/site/home']) ?>" class="<?= ($current_controller == 'site' && $current_action == 'home') ? 'active' : '' ?>">Home</a></li>
            <li><a href="<?= Url::to(['/site/explore']) ?>" class="<?= ($current_controller == 'site' && $current_action == 'explore') ? 'active' : '' ?>">Explore</a></li>
            <li><a href="<?= Url::to(['/site/about']) ?>" class="<?= ($current_controller == 'site' && $current_action == 'about') ? 'active' : '' ?>">About</a></li>
            <li><a href="<?= Url::to(['/site/contact']) ?>" class="<?= ($current_controller == 'site' && $current_action == 'contact') ? 'active' : '' ?>">Contact Us</a></li>
        </ul>

    
        <div class="nav-right">
            <a href="<?= Url::to(['/site/faqs']) ?>" class="btn-faq">FAQs</a>
            <button class="user-btn">
                <i class="fa-solid fa-user"></i>
            </button>
        </div>
    </nav>
</header>
