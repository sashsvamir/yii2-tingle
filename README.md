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