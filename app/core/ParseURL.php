<?php

class ParseURL {

    public static function parse($url) {
        if (isset($_GET['url'])) {
            $url = explode('/',
                    filter_var(
                            rtrim($_GET['url'], '/'),
                            FILTER_SANITIZE_URL));
            return $url;
        }
    }

}
