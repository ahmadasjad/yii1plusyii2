
name -> clientOptions.scoreName

```php
<?php
$this->widget('CStarRating', array(
    'name' => 'some_name',
    'id' => 'id_rating',
    'readOnly' => !$isStaffLogged,
    'resetText' => 'Zero rating',
    'value' => $model->rating
));
?>
```
To
```php
<?php
echo \yii2mod\rating\StarRating::widget([
    'name' => 'some_name',
    'id' => 'id_rating',
    'value' => $model->rating,
    'clientOptions' => [
        'scoreName' => 'some_name',
        'readOnly' => !$isStaffLogged,
        'cancel' => true,
        'cancelHint' => 'Zero rating',
    ],
 ]);
?>
```