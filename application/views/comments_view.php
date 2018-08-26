<div class="comments">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-1 col-sm-1"></div>
            <div class="col-lg-8 col-md-10 col-sm-10">

                <h1>Comments:</h1>
                <?php
                foreach (\Flint\Application\Core\View::$data as $val) {
                    echo "
            <div class=\"comment\">
                 <div class=\"name\"><span>Name: </span>{$val["name"]}</div>
                 <div class=\"email\"><span>E-mail: </span>{$val["email"]}</div>
                 <div class=\"comment-text\">{$val["text"]}</div>
            </div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
