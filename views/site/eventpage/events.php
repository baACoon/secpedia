<?php
/* @var $this yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'EXPLORE | SEC';

$current_controller = Yii::$app->controller->id;  
$current_action = Yii::$app->controller->action->id;  


$this->registerCssFile('@web/css/explore/explore.css');
$this->registerCssFile('@web/css/events/events.css')
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Html::encode($this->title) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php $this->head() ?> <!-- This will include any registered CSS/JS from Yii2 -->
</head>
<body>
<?php $this->beginBody() ?>

<main class="explorepage">  
    <div class="xploresearchsection">
        <div class="searchcontainer">
            <?= Html::input('search', '', '', ['placeholder' => 'Search...', 'class' => 'form-control']) ?>
            <label for=""><?= Yii::t('app', 'Search for topics, companies or regulations') ?></label>
        </div>
    </div>

    <div class="xtabsection">
        <div class="tabsectionleft" id="mainSection">Events</div>
        <div class="tabsectionright">
            <ul class="nav-link">
                <li><a href="<?= Url::to(['/site/explore']) ?>" class="<?= ($current_controller == 'site' && $current_action == 'articles') ? 'active' : '' ?>">Article</a></li>
                <li><a href="<?= Url::to(['/site/announcement']) ?>" class="<?= ($current_controller == 'site' && $current_action == 'announcement') ? 'active' : '' ?>">Announcement</a></li>
                <li><a href="<?= Url::to(['/site/events']) ?>" class="<?= ($current_controller == 'site' && $current_action == 'events') ? 'active' : '' ?>">Events</a></li>
                <li><a href="<?= Url::to(['/site/news']) ?>" class="<?= ($current_controller == 'site' && $current_action == 'news') ? 'active' : '' ?>">News</a></li>
            </ul>
        </div>
    </div>
    

    <div class="content-section" id="articleSection">

    </div>



</main>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
