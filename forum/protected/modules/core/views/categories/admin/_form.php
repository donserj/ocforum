<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'core-categories-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo  Yii::t('core', 'Fields with <span class="required">*</span> are required.')?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('core', 'Create') : Yii::t('core', 'Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->