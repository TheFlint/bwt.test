<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12"></div>
    <div class="col-lg-6 col-md-6 col-sm-12 right">
        <div class="authorize-form">
            <form method="POST" action="">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12"></div>
                    <div class="col-lg-8 col-md-8 col-sm-12 right">
                        <h1>Sign Up</h1>
                        <?php extract(\Application\Core\View::$data); ?>
                        <?php // var_dump($data); ?>
                        <?php if ($signup_status == "registered") { ?>
                            <p style="color:green">Регистрация прошла успешно.</p>
                        <?php } elseif ($signup_status == "reCaptcha_error") { ?>
                            <p style="color:red">Вы не прошли валидацию reCaptcha.</p>
                        <?php } elseif ($signup_status == "non_registered") { ?>
                            <p style="color:red">This email already registered!.</p>
                        <?php } ?>

                        <div class="col-lg-6 col-md-6 col-sm-12 right">

                            <div class="form-group">
                                <input type="text"
                                       class="form-control form-control-lg"
                                       placeholder="Your Name"
                                       name="name"
                                       pattern="[\x1F-\xBF]*"
                                       required>
                            </div>
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
                                       pattern="[\x1F-\xBF]*"
                                       required>
                            </div>
                            <b>Sex:</b>
                            <input type="radio" name="sex" value="man"> Man
                            <input type="radio" name="sex" value="female"> Female
                            <input type="radio" name="sex" value="another"> Another
                            <p><b>Birth Day: <b>
                                        <input type="date"
                                               name="birthdate"
                                               class="form-control form-control-lg"
                                        ></p>
                            <div class="text-danger" id="recaptchaError"></div>
                            <div class="g-recaptcha" data-sitekey="6Lf58moUAAAAAHug33Z-H6SWdySUWSqMh_K5m2FF"></div>
                            <input type="submit"
                                   class="btn btn-secondary btn-block"
                                   value="Sign up"
                                   name="btn">
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>