<?php
/* @var $this FilmController */
/* @var $model Film */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'film-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_of_film'); ?>
		<?php echo $form->textField($model,'type_of_film',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'type_of_film'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'introduction_context'); ?>
		<?php echo $form->textArea($model,'introduction_context',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'introduction_context'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'special_memo'); ?>
		<?php echo $form->textField($model,'special_memo',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'special_memo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'release_year'); ?>
		<?php echo $form->textField($model,'release_year',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'release_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'language_id'); ?>
		<?php echo $form->textField($model,'language_id'); ?>
		<?php echo $form->error($model,'language_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'original_language_id'); ?>
		<?php echo $form->textField($model,'original_language_id'); ?>
		<?php echo $form->error($model,'original_language_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rental_duration'); ?>
		<?php echo $form->textField($model,'rental_duration'); ?>
		<?php echo $form->error($model,'rental_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rental_rate'); ?>
		<?php echo $form->textField($model,'rental_rate',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'rental_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'length'); ?>
		<?php echo $form->textField($model,'length'); ?>
		<?php echo $form->error($model,'length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'replacement_cost'); ?>
		<?php echo $form->textField($model,'replacement_cost',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'replacement_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rating'); ?>
		<?php echo $form->textField($model,'rating',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'special_features'); ?>
		<?php echo $form->textField($model,'special_features',array('size'=>0,'maxlength'=>0)); ?>
		<?php echo $form->error($model,'special_features'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->