<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'HOME | SEC';
$this->registerCssFile('@web/css/home/home.css'); 
$this->registerCssFile('@web/css/homearticle/article.css');
$this->registerCssFile('@web/css/modal/modal.css');
$this->registerCssFile('@web/css/modal/articlemodal.css');
$this->registerJsFile('@web/modal/modal.js', ['depends' => [yii\web\JqueryAsset::class]]);
$this->registerJsFile('@web/js/homemodal.js', ['depends' => [yii\web\JqueryAsset::class]]);

?>

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

<div class="page-wrapper"> 

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <button class="close-btn">&times;</button>
           
          <div class="modalmaincontent">
            <div class="modalcontentleft">
                <div class="modaltitle">
                    <h2><span>SEC</span>pedia</h2>
                </div>
                <img src="../images/secpedia.png" alt="">
            </div>
            <div class="modalcontentright">
                <div class="modalcontentrighttop">
                    <p>SECpedia is an open and community-driven platform designed to provide accurate, up-to-date, and editable information about the Securities and Exchange Commission (SEC), business regulations, company registration, investment guidelines, and compliance requirements.</p>
                </div>
                <div class="modalcontentrightbottom">
                        <p> What Can You Do Here?  </p> 
                        <ul>
                            <li> Explore SEC-related topics such as business registration, stock market regulations, and investor protection.</li>
                            <li>Edit & Contribute by improving existing articles, adding new insights, and ensuring information remains accurate and updated.</li>
                            <li>Track Changes with a transparent edit history, allowing users to see modifications and revert outdated information if needed.</li>
                            <li>Discuss & Collaborate with industry professionals, investors, and business owners in an open discussion forum to share insights and best practices.</li>
                        </ul>

                        </p>
                </div>
            </div>
          </div>
          <div class="modalgotitbtn">
                <button class="gotit-btn">Got it!</button>
          </div>
        </div>
    </div>



    <!-- Homepage Content -->
    <main class="maincontent-page">
        <h1><span>SEC</span>PEDIA</h1>
        <p>Welcome to<span class="pempasize">SECPEDIA</span>, the collaborative platform where you can learn, contribute, and share knowledge about business registration, compliance, investor protection, and SEC regulations.</p>
    </main>

    <!--- ARTICLE MODAL --> 

    <!-- Featured Section with Article Containers -->
    <section class="featured-section">
        <div class="searchcontainer">
            <input type="search" placeholder="Search...">
            <label for="">Search for topics, companies or regulations</label>
        </div>
        <div class="headerarticle">
            <h4>Featured Articles</h4>
            <hr>
        </div>

        <!-- Featured Article Containers -->
        <div class="featured-container">    
            <div class="container1" onclick="openModal('article1')">
                <img src="../images/chairperson.jpg" alt="" class="articleImage">
                <h6>last updated: [date] </h6>
                <h3>Testing Article 1</h3>
                <span>2/12/2025, 7:00:33 PM</span>
            </div>
            
            <div class="container2" onclick="openModal('article2')">
                <img src="../images/chairperson.jpg" alt="" class="articleImage">
                <h6>last updated: [date] </h6>
                <h3>Testing Article 2</h3>
                <span>2/12/2025, 1:09:06 PM</span>
            </div>

            <div class="container3" onclick="openModal('article3')">
                <img src="../images/chairperson.jpg" alt="" class="articleImage">
                <h6>last updated: [date] </h6>  
                <h3>Testing Article 3</h3>
                <span>2/12/2025, 10:22:10 AM</span>
            </div>
        </div>
    </section>

    <!-- Other Sections like "In the News" and "Quote of the Day" -->
    <section class="inthenews-section"> 
        <div class="headerarticle">
            <h4>In The News</h4>
            <hr>
        </div>
        <div class="inthenews-container"></div>
    </section>

    <section class="qoutes-section"> 
        <div class="headerarticle">
            <h4>Quote of the Day</h4>
            <hr>
        </div>
        <div class="qoutescontainer">
            <h5>"Every day is a new beginning, a fresh canvas. Embrace the opportunity to create your best day yet!"</h5>
        </div>
        <div class="datecontainer">
            <p class="date">March 12, 2025</p>
        </div>
    </section>

    

</div>


