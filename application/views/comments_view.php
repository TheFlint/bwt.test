<?php
foreach (\Flint\Application\Core\View::$data as $val) {
    echo
    "
            <div class=\"comment\">
                 <div class=\"name\"><span>Name: </span>{$val["name"]}</div>
                 <div class=\"email\"><span>E-mail: </span>{$val["email"]}</div>
                 <div class=\"comment-text\">{$val["text"]}</div>
            </div>";
}