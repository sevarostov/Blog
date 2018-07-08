
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

<style>


    .error-template {
        padding: 40px 15px;
        text-align: center;
    }

    .error-actions {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .error-actions .btn {
        margin-right: 10px;
    }


</style>

</head>


<body>
<div class="container">
    <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">


        <div class="article">
            <div class="row">

                <div class="col-xs-12">
                    <div class="error-template">
                        <h1>
                            Ошибка 404
                        </h1>
                        <h2>
                            Извините, но данная страница не найдена
                        </h2>
                        <div class="error-details">

                        </div>
                        <br/>
                        <div class="error-actions">
                            <div class="col-xs-12 col-md-6" style="padding:  10px;">
                                <a href="/" class="btn btn-primary btn-lg"><span
                                        class="glyphicon glyphicon-home"></span>
                                    Вернуться на главную</a>
                            </div>

                            <div class="col-xs-12 col-md-6" style="padding:  10px;">
                                <a href="/contacts/" class="btn btn-default btn-lg">
                                    <span class="glyphicon glyphicon-envelope"></span> Написать в поддержку
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr/>

<?php include ROOT . '/views/layouts/footer.php'; ?>