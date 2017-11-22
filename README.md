YII2 Calculator Widget
======================


This is a calculator widget which uses vuejs in the background.



## Prerequisite ##

It loads vuejs in case it is not already there. 



## Installation ##

The preferred way to install **Yii2 Calculator Widget** is through [Composer](https://getcomposer.org/). Either add the following to the require section of your `composer.json` file:

`"cenotia/yii2-calculator-widget": "dev-master"` 

Or run:

`$ php composer.phar require cenotia/yii2-calculator-widget "dev-master"` 


## Using Calculator Widget ##

**CalculatorWidget** is in namespace `cenotia\components\CalculatorWidget`.

For instance, to associate **CalculatorWidget** with the attribute `'cat_icon'` in a form view, use code like this:

    use cenotia\components\CalculatorWidget;
        
	...
	<?php echo calculatorWidget::widget(CalculatorWidget::className()) ?>
	...

	


