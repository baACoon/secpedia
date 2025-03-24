<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<?= $this->render('//layouts/header') ?>

<main id="main" class="flex-grow-1" role="main">
    <div class="">
        <?= $content ?>
    </div>
</main>

<?= $this->render('//layouts/footer') ?> 


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
