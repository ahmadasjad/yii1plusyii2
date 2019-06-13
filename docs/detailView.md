
data -> model

attributes.[].name -> attributes.[].attribute

```php
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
        ['label' => 'Currency', 'value' => "{$model->currency->name}"],
        ['label' => 'Balance', 'value' => $model->balance],
        'username',
		'password',
		['name' => 'is_active', 'value' => $model->is_active ? 'Yes' : 'No'],
		['name' => 'type_id', 'value' => $model->type->name],        
	),
));
```
To

```php
<?php echo \yii\widgets\DetailView::widget( array(
	'model'=>$model,
	'attributes'=>array(
		'id',
		'name',
        ['label' => 'Currency', 'value' => "{$model->currency->name}"],
        ['label' => 'Balance', 'value' => $model->balance],
        'username',
		'password',
		['attribute' => 'is_active', 'value' => $model->is_active ? 'Yes' : 'No'],
		['attribute' => 'type_id', 'value' => $model->type->name ],
	),
));
```