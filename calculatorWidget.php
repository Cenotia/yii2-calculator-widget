<?php
/**
 * author     : x.Villamuera <xavier.villamuera@gmail.com>
 * createTime : 2017/11/17 12:20
 * description: 
 */

namespace cenotia\components\calculatorWidget;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * //in the controller
 * //in the view
 * <?= CalculatorWidget::widget([
 *               ]);?>
 *
 * Class CalculatorWidget
 * @package frontend\widgets
 * @link http://www.chartjs.org/docs/
 */
class CalculatorWidget extends Widget
{
 
    public function init() {
        parent::init();
        
    }

    public function run(){
        $this->registerAssets();

        $html = '<div id="calculator">
            <!-- Screen and clear key -->
            <div class="top">
                <span class="clear" v-on:click="kpress">C</span>
                <input class="screen" v-model="current" />
            </div>
            
            <div class="keys">
                <!-- operators and other keys -->
                <span v-on:click="kpress">7</span>
                <span v-on:click="kpress">8</span>
                <span v-on:click="kpress">9</span>
                <span class="operator" v-on:click="kpress">+</span>
                <span v-on:click="kpress">4</span>
                <span v-on:click="kpress">5</span>
                <span v-on:click="kpress">6</span>
                <span class="operator" v-on:click="kpress">-</span>
                <span v-on:click="kpress">1</span>
                <span v-on:click="kpress">2</span>
                <span v-on:click="kpress">3</span>
                <span class="operator" v-on:click="kpress">/</span>
                <span v-on:click="kpress">0</span>
                <span v-on:click="kpress">.</span>
                <span class="eval" v-on:click="kpress">=</span>
                <span class="operator" v-on:click="kpress">*</span>
            </div>
        </div>';
        return $html;
    }

    protected function registerAssets() {
        $view = $this->getView();
        VuejsAsset::register($view);
        calculatorAsset::register($view);
    }

}
