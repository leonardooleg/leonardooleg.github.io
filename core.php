<?php

if (isset($_COOKIE['lang'])) {
        $site_lang=$_COOKIE['lang'];
}else{
    setcookie("lang", "ua");
    $site_lang='ua';
}
