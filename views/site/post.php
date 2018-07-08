<?php include ROOT . '/views/layouts/header.php'; ?>


<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->

<header class="intro-header" style="background-image: url('../img/032.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>Человек должен исследовать</h1>
                    <h2 class="subheading">И это исследование на пределе возможностей</h2>
                    <span class="meta"> <?php  echo date("Y-m-d H:i:s")?></span>
                </div>
            </div>
        </div>
    </div>
</header>

    <p>     Призыв древних философов познать самого себя и окружающий мир сегодня не менее
        актуален, чем в античные времена. Человеку необходимо знать возможности своего
        организма и постоянно познавать мир, чтобы сделать жизнь наиболее активной и
        полноценной,  развиваться в выбранном направлении.</p>


<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach ($articles as $articleItem): ?>
            <div class="post-preview">
                <a href="/article/index/<?php echo $articleItem['id']; ?>">
                    <h2 class="post-title">
                        <?php echo $articleItem['title']; ?>
                        <img class="img-responsive" src="..<?php echo $articleItem['preview']; ?>" alt=""></h2>
                    <h3 class="post-subtitle">
                        <?php echo $articleItem['short_content']; ?>
                    </h3>

                </a>
                <p class="post-meta"><?php echo $articleItem['date']; ?></p>
            </div>
            <hr>
            <?php endforeach; ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
<!--                    <a href="/post/">Все статьи &rarr;</a>-->
                </li>
            </ul>
        </div>
    </div>
</div>

<hr>



<?php include ROOT . '/views/layouts/footer.php'; ?>
