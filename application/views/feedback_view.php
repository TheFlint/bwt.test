<div class="container-fluid">
    <div class="contact-form">
        <div class="container">
            <form method="POST" action="">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h1>Get in Touch</h1>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 right">
                        <?php extract(\Flint\Application\Core\View::$data); ?>
                        <?php // var_dump($data); ?>
                        <?php if ($result == "Sent") { ?>
                            <p style="color:green">Успешно.</p>
                        <?php } ?>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="name"
                                   required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg"
                                   placeholder="YourEmail@email.com" name="email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control form-control-lg" name="text" required></textarea>
                        </div>
                        <input type="submit" class="btn btn-secondary btn-block" value="Send">
                    </div>
                </div>
            </form>
        </div>
