<?php

namespace sjaakp\cookieconsent;

use yii\web\AssetBundle;

class CookieConsentAsset extends AssetBundle
{
    public $css = [
        '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.css'
    ];
    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.js'
    ];
}
