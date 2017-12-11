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
		// fix .classList in IE9:
		[
			'https://cdn.jsdelivr.net/npm/classlist-polyfill@1.2.0/src/index.min.js',
			'condition' => 'lte IE 9',
		],
		'tingle.min.js',
	];

	public $css = [
		'tingle.min.css',
	];

}
