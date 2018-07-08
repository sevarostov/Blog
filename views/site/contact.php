<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('../img/042.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
<!--                    <h1>  </h1>-->
<!--                    <hr class="small">-->
<!--                    <span class="subheading"></span>-->
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>Заполните форму и отправьте письмо. Я постараюсь ответить как можно скорее!</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Имя</label>
                        <input type="text" class="form-control" placeholder="Имя" id="name"
                               required data-validation-required-message="Пожалуйста
                               введите Ваше имя.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Email </label>
                        <input type="email" class="form-control" placeholder="Email "
                               id="email" required data-validation-required-message="Пожалуйста
                                введите Ваш email.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Телефон</label>
                        <input type="tel" class="form-control" placeholder="Телефон"
                               id="phone" required data-validation-required-message="Пожалуйста
                                введите Ваш номер телефона.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Сообщение</label>
                        <textarea rows="5" class="form-control" placeholder="Сообщение"
                                  id="message" required data-validation-required-message="
                                  Пожалуйста введите сообщение."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-default">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<hr>

<?php include ROOT . '/views/layouts/footer.php'; ?>
