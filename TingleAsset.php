<?php
namespace sashsvamir\tingle;

use yii\web\AssetBundle;


/**
 * tingle modal asset
 */
class TingleAsset extends AssetBundle
{
	public $sourcePath = '@bower/tingle/dist';

	public $js = [
		'tingle.min.js',
	];

	public $css = [
		'tingle.min.css',
	];

}
