<?php
/* 
 * @link https://github.com/cenotia/yii2-calculatorWidget
 * @copyright Copyright (c) 2017 Cenotia Group * 
 * @license https://www.cenotia.com/licences * 
 */
namespace cenotia\components\calculatorWidget;

use Yii;
use yii\web\AssetBundle;

class CalculatorAsset extends AssetBundle
{
    public $sourcePath = '@frontend/widgets/';
    //public $baseUrl = '@web';
   
    public $css=[
        'assets/calculator.css'
    ];

    public $js= [
        'assets/calculator_vjs.js'
    ];

    public $depends
            = [
                    'yii\web\YiiAsset',
                    'yii\bootstrap\BootstrapAsset',
                    'yii\bootstrap\BootstrapPluginAsset',
            ];
    
   
}