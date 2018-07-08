
<?php include ROOT . '/views/layouts/header.php'; ?>


<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('../img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>МОЙ ДЕНЬ</h1>
                    <hr class="small">
                    <span class="subheading">повседневная жизнь и не только</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach ($recomendedArticles as $recomendedArticleItem): ?>
            <div class="post-preview">
                <a href="/article/index/<?php echo $recomendedArticleItem['id']; ?>">
                    <h2 class="post-title">
                        <?php echo $recomendedArticleItem['title']; ?>
                        <img class="img-responsive" src="..<?php echo $recomendedArticleItem['preview']; ?>" alt=""></h2>
                    <h3 class="post-subtitle">
                        <?php echo $recomendedArticleItem['short_content']; ?>
                    </h3>

                </a>
                <p class="post-meta"><?php echo $recomendedArticleItem['date']; ?></p>
            </div>
            <hr>
            <?php endforeach; ?>


            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="/post/">Все статьи &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<hr>

<?php include ROOT . '/views/layouts/footer.php'; ?>

<?php
//// Показывать всю информацию, по умолчанию INFO_ALL
//phpinfo();
//// Показывать информацию только о загруженных модулях.
//// phpinfo(8) выдает тот же результат.
//phpinfo(INFO_MODULES);
//?>
