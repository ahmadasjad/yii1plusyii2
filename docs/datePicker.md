 options -> clientOptions
 
 htmlOptions -> options
 
 Move dateFormat to main attribute
 
```php
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model' => $model,
    'attribute' => 'attribute_name',
    // additional javascript options for the date picker plugin
    'options' => array(
        //                'showAnim' => 'fold',
        'dateFormat' => 'yy-mm-dd',
        'changeMonth' => 'true',
        'changeYear' => 'true',
        'yearRange' => 'c-30:c',
        'defaultDate' => '-20Y',
        'maxDate' => "-10D",
    ),
    'htmlOptions' => array(
        'style' => 'max-width: 100px;',
        'size' => 10,
        'maxlength' => 10,
        'placeholder' => 'YYYY-MM-DD'
    ),
));
?>
```

To     
            

```php
<?php
echo \yii\jui\DatePicker::widget([
    'model' => $model,
    'attribute' => 'attribute_name',
    'dateFormat' => 'yyyy-MM-dd',
    // additional javascript options for the date picker plugin
    'clientOptions' => array(
        //                'showAnim' => 'fold',
        'changeMonth' => 'true',
        'changeYear' => 'true',
        'yearRange' => 'c-30:c',
        'defaultDate' => '-20Y',
        'maxDate' => "-10D",
    ),
    'options' => array(
        'style' => 'max-width: 100px;',
        'size' => 10,
        'maxlength' => 10,
        'placeholder' => 'YYYY-MM-DD'
    ),
]);
?>
```
