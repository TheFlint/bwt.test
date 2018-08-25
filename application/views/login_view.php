<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12"></div>
    <div class="col-lg-6 col-md-6 col-sm-12 right">
        <div class="authorize-form">
            <form method="POST" action="">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12"></div>
                    <div class="col-lg-8 col-md-8 col-sm-12 right">
                        <h1>Sign In</h1>
                        <h6>To use my site you are need to authorize or if didn't register, please, use <a
                                    href="/signup/">registration
                                form</a>.</h6>
                        <?php extract(\Flint\Application\Core\View::$data); ?>
                        <?php // var_dump($data); ?>
                        <?php if ($login_status == "access_granted") { ?>
                            <p style="color:green">Авторизация прошла успешно.</p>
                        <?php } elseif ($login_status == "access_denied") { ?>
                            <p style="color:red">Логин и/или пароль введены неверно.</p>
                        <?php } elseif ($login_status == "reCaptcha_error") { ?>
                            <p style="color:red">Вы не прошли валидацию reCaptcha.</p>
                        <?php } ?>

                        <div class="form-group">
                            <input type="email"
                                   class="form-control form-control-lg"
                                   placeholder="YourEmail@email.com"
                                   name="email"
                                   pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"
                                   required>
                        </div>
                        <div class="form-group">
                            <input type="password"
                                   class="form-control form-control-lg"
                                   placeholder="Password"
                                   name="password"
                                   required>
                        </div>
                        <div class="text-danger" id="recaptchaError"></div>
                        <div class="captcha">
                            <div class="g-recaptcha" data-sitekey="6Lf58moUAAAAAHug33Z-H6SWdySUWSqMh_K5m2FF"></div>
                        </div>
                        <input type="submit"
                               class="btn btn-secondary btn-block"
                               value="Authorize"
                               name="btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
