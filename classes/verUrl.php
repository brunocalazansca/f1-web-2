<?php

    class VerUrl {
        function trocarUrl ($url) {
            if (empty($url)) {
                $url = "secao/home.php";

            } else {
                $url = "secao/$url.php";

            }
            include_once($url);
        }
    }