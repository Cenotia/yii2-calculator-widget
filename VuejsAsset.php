<?php
/**
 * author     : x.Villamuera <xavier.villamuera@gmail.com>
 * createTime : 2017/11/16 19:51
 * description:
 */

namespace cenotia\components\calculatorWidget;

use yii\web\AssetBundle;

class VuejsAsset extends AssetBundle
{
    public $sourcePath = '@bower/vue';

    public function init()
    {
        $this->js = YII_DEBUG ? ['dist/vue.min.js'] : ['dist/vue.min.js'];
    }
}
