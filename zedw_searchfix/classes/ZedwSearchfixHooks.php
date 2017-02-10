<?php

class ZedwSearchfixHooks extends \Frontend {

    public function hookIndexPage($strContent, $arrData, &$arrSet)
    {
        $url = $arrSet['url'];
        $url = explode("?", $url);
        $url = $url[0];
        $arrSet['url'] = $url;
    }
}
