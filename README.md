# Yii2 jquery.remodal


## Installation

`composer require sashsvamir/yii2-tingle:"dev-master"`



## Description

Asset of bower/tingle (js modal).



## Using

As required depends of another asset:
```php
class MyAsset extends AssetBundle {
	// ...
	public $depends = [
		'sashsvamir\tingle\TingleAsset';
	];
}
```

Register in widget:
```php
$view = $this->getView();
TingleAsset::register($view);
```

or in view:
```php
use sashsvamir\tingle\TingleAsset;
$this->registerAssetBundle(TingleAsset::className());
```



If you need support ie9, set classlist polyfill to condition:
```php
public $js = [
  [
    'https://cdn.jsdelivr.net/npm/classlist-polyfill@1.2.0/src/index.min.js',
    'condition' => 'lte IE 9',
    //'position' => View::POS_HEAD,
  ],
];
```
