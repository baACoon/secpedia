<?php
/* @var $this yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'EXPLORE | SEC';

$current_controller = Yii::$app->controller->id;  
$current_action = Yii::$app->controller->action->id;  

$this->registerCssFile('@web/css/announcement/announcement.css?v=1.0');
$this->registerCssFile('@web/css/explore/explore.css'); 
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
        <div class="tabsectionleft" id="mainSection">Announcement</div>
        <div class="tabsectionright">
            <ul class="nav-link">
                <li><a href="<?= Url::to(['/site/explore']) ?>" class="<?= ($current_controller == 'site' && $current_action == 'articles') ? 'active' : '' ?>">Article</a></li>
                <li><a href="<?= Url::to(['/site/announcement']) ?>" class="<?= ($current_controller == 'site' && $current_action == 'announcement') ? 'active' : '' ?>">Announcement</a></li>
                <li><a href="<?= Url::to(['/site/events']) ?>" class="<?= ($current_controller == 'site' && $current_action == 'events') ? 'active' : '' ?>">Events</a></li>
                <li><a href="<?= Url::to(['/site/news']) ?>" class="<?= ($current_controller == 'site' && $current_action == 'news') ? 'active' : '' ?>">News</a></li>
            </ul>
        </div>
    </div>

    <div class="content-section" id="announcementSection">
        <h6>New Announcements</h6>
        <?php foreach (['Announcement Title I', 'Announcement Title II'] as $announcementTitle): ?>
        <div class="announcementcontainer">
            <div class="announceleft">
                <img src="../images/chairperson.jpg" alt="" class="articleImage">
            </div>
            <div class="announceright">
                <h2 class="announcementitle"><?= Html::encode($announcementTitle) ?></h2>
                <div class="announceauth">
                        <p> Author: Loren ipsum</p>
                        <p>Last Updated: [date]: Loren ipsum</p>
                </div>
                <div class="announcetext">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="announcebtn">
                   <button>Read more</button>
                </div>
            </div>
            
        </div>
        
        <?php endforeach; ?>
    </div>

</main>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
