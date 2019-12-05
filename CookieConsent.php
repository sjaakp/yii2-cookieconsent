<?php

namespace sjaakp\cookieconsent;

use yii\base\Widget;
use yii\helpers\Json;

class CookieConsent extends Widget
{
    public $options = [];

    public function run()   {
        $asset = new CookieConsentAsset();
        $asset->registerAssetFiles($this->view);
        $opts = empty($this->options) ? '{}' : Json::encode($this->options);
        $this->view->registerJs("window.addEventListener('load', function(){window.cookieconsent.initialise($opts)});");
        return '';
    }
}
