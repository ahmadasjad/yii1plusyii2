 options -> clientOptions
 
 htmlOptions -> options
 
 Wrap js inside the `yii\web\JsExpression` constructor
 

```php
<?php
echo CHtml::hiddenField('selectedvalue', '');

$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
    'name' => 'searchbox',
    'id' => 'searchbox',
    'value' => '',
    'source' => CController::createUrl('/users/search'),
    'options' => array(
        'showAnim' => 'fold',
        'minLength' => '4',
        'select' => 'js:function( event, ui ) {
                 $("#searchbox").val( ui.item.label );
                location.href = "/users/manage?selectedvalue=" + ui.item.value;
//                        $("#selectedvalue").val( ui.item.value );
                return false;
          }',
    ),
    'htmlOptions' => array(
        'onfocus' => 'js: this.value = null; $("#searchbox").val(null); $("#selectedvalue").val(null);',
        'class' => 'form-control search-query',
        'placeholder' => "Smart users search ...",
    ),
));
?>
```

```php
<?php
echo CHtml::hiddenField('selectedvalue', '');

echo \yii\jui\AutoComplete::widget([
    'name' => 'searchbox',
    'id' => 'searchbox',
    'value' => '',
    'clientOptions' => [
        'source' => CController::createUrl('/users/search'),
        'showAnim' => 'fold',
        'minLength' => '4',
        'select' => new yii\web\JsExpression('function( event, ui ) {
                 $("#searchbox").val( ui.item.label );
                location.href = "/users/manage?selectedvalue=" + ui.item.value;
//                        $("#selectedvalue").val( ui.item.value );
                return false;
          }'),
    ],
    'options' => array(
        'onfocus' => new yii\web\JsExpression('this.value = null; $("#searchbox").val(null); $("#selectedvalue").val(null);'),
        'class' => 'form-control search-query',
        'placeholder' => "Smart users search ...",
    ),
]);
?>
```
