<!DOCTYPE html>
<html>
 <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <?php wp_head(); ?>
 </head>
 
 <body>
 <div class="header">
        <div class="container">
            <img src="https://news.mediado.info/wp-content/uploads/2017/12/logo_bkwh-1.jpg" alt="media-logo" class="md-logo">

        </div>
    </div>
    <div class="container menu-area">
        <div class="collapse">
            <div id="collapse-button" onclick="onCollapse()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="nav-bar" id="nav-bar">
            <a href="#" class="menu-link">申請</a>
            <a href="#" class="menu-link">ダウンロード</a>
            <a href="#" class="menu-link">セキュリティ情報</a>
            <a href="#" class="menu-link">セミナー情報</a>
            <a href="#" class="menu-link">FAQ</a>
            <a href="#" class="menu-link">リンク</a>
            <span class="menu-link" onclick="dropMenu()">お問合せ<i class="fas fa-angle-down"></i></span>
            <div class="drop-menu" id="drop-link">
                <a href="#">Phantomへのお問い合わせ</a>
                <a href="#">MD viewer についてのお問い合わせ </a>
                <a href="#">CAE部へのお問い合わせ</a>
                <a href="#">FE部へのお問い合わせ</a>
                <a href="#">情シスへのお問い合わせ</a>
            </div>
        </div>
    </div>