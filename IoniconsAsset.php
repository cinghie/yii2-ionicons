<?php

/**
 * @copyright Copyright &copy; Gogodigital Srls
 * @company Gogodigital Srls - Wide ICT Solutions
 * @website http://www.gogodigital.it
 * @github https://github.com/cinghie/yii2-ionicons
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 * @package yii2-ionicons
 * @version 1.0.0
 */

namespace cinghie\ionicons;

use yii\web\AssetBundle;

/**
 * Class IoniconsAsset
 *
 * @package cinghie\ionicons
 */
class IoniconsAsset extends AssetBundle
{

	/**
	 * @inherit
	 */
	public $sourcePath = '@bower/ionicons';

	/**
	 * @inherit
	 */
	public $css = [
		'docs/css/ionicons.min.css'
	];

	/**
	 * @inherit
	 */
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapPluginAsset'
	];

}
