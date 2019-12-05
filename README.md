# yii2-cookieconsent

#### Wrapper for Osano Cookie Consent plugin ####

[![Latest Stable Version](https://poser.pugx.org/sjaakp/yii2-cookieconsent/v/stable)](https://packagist.org/packages/sjaakp/yii2-cookieconsent)
[![Total Downloads](https://poser.pugx.org/sjaakp/yii2-cookieconsent/downloads)](https://packagist.org/packages/sjaakp/yii2-cookieconsent)
[![License](https://poser.pugx.org/sjaakp/yii2-cookieconsent/license)](https://packagist.org/packages/sjaakp/yii2-cookieconsent)

This is a simple wrapper for the [Osano Cookie Consent plugin](https://www.osano.com/cookieconsent/documentation/about-cookie-consent/)
to be used in the [Yii 2.0](https://www.yiiframework.com/ "Yii") PHP Framework.

## Usage ##

`sjaakp\cookieconstent\CookieConsent` is a 
[Yii2 `Widget`](https://www.yiiframework.com/doc/api/2.0/yii-base-widget) 
which can be used in a layout view file along these lines:

    <?php
    use sjaakp\cookieconsent\CookieConsent;
    ?>
    
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html ...>
    <head>
        ... 
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
        ...
        <?= $content ?>
        ...
    <?php $this->endBody() ?>
    
    <?= CookieConsent::widget([
        'options' => [
            'content' => [
                'message' => 'This website uses cookies...',
                // ... more content options ...
            ]
            // ... more cookieconsent options ...
        ]
    ]) ?>
    
    </body>
    </html>
    <?php $this->endPage() ?>

**CookieConsent** options are documented 
[here](https://www.osano.com/cookieconsent/documentation/javascript-api/#content_options).
