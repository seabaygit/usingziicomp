<?php
/* @var $this FilmController */
/* @var $model Film */

$this->breadcrumbs=array(
	'Films'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Film', 'url'=>array('index')),
	array('label'=>'Create Film', 'url'=>array('create')),
	array('label'=>'Update Film', 'url'=>array('update', 'id'=>$model->film_id)),
	array('label'=>'Delete Film', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->film_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Film', 'url'=>array('admin')),
);
?>

<h1>View Film #<?php echo $model->film_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'film_id',
		'title',
		'type_of_film',
		'introduction_context',
		'description',
		'special_memo',
		'release_year',
		'language_id',
		'original_language_id',
		'rental_duration',
		'rental_rate',
		'length',
		'replacement_cost',
		'rating',
		'special_features',
		'last_update',
	),
)); ?>
