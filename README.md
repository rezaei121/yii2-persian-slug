yii2-persian-slug
=================
yii2 persian slug

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist developit/yii2-persian-slug "*"
```

or add

```
"developit/yii2-persian-slug": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
    public function behaviors()
    {
        return [
            [
                'class' => PesianSluggableBehavior::className(),
                'attribute' => 'title',
            ],
        ];
    }```
    
License
-------
yii2-persian-slug is an open source project created by Ehsan Rezaei(http://www.developit.ir) that is licensed under GPL-3.0.