<div class="weather">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-1 col-sm-0"></div>
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="weather_content text-center">
                    <div class="fdate text-left">Прогноз на <?= date('d.m'); ?></div>
                    <div class="city-name ">
                        <h1>Погода в Запорожье</h1>
                    </div>
                    <?php print_r(\Flint\Application\Core\View::$data); ?>
                    <div class="fbottom">.</div>
                </div>
            </div>
        </div>
    </div>
</div>