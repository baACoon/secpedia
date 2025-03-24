<?php 

use yii\helpers\Url;
use yii\helpers\Html;

$this->registerCssFile('@web/css/footer.css', ['depends' => [yii\web\JqueryAsset::class]]);
?>

<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <p>&copy; <?= date('Y') ?> Your Company Name. All Rights Reserved.</p>
            <ul class="footer-links">
                <li><a href="<?= Url::to(['/site/privacy-policy']) ?>">Privacy Policy</a></li>
                <li><a href="<?= Url::to(['/site/terms-of-service']) ?>">Terms of Service</a></li>
                <li><a href="<?= Url::to(['/site/contact']) ?>">Contact Us</a></li>
            </ul>
        </div>
    </div>
</footer>


