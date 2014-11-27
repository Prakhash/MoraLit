<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'user-form',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'htmlOptions' => array(
        'class' => 'form-horizontal form-control',
        'role' => 'form'
    )
        ));
?>
<div class="well">


    <div class="container">
        <div class="span2"></div>
        <div class="span8">
            <h3 class="master_heading">Register</h3>
            <div class="well">

                


                <div class="control-group">
                    <div class="controls"><?php echo $form->hiddenField($model, 'user_id', array('value'=>125, 'size' => 60, 'maxlength' => 100, 'placeholder' => 'USER_ID', 'class' => 'span5')); ?>
                    <?php echo $form->error($model, 'user_id'); ?></div>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model, 'username', array('class' => 'col-sm-2 control-label')); ?>
                    <div class="controls"><?php echo $form->textField($model, 'username', array('size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($model, 'username'); ?></div>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model, 'firstname', array('class' => 'col-sm-2 control-label')); ?>
                    <div class="controls"><?php echo $form->textField($model, 'firstname', array('size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($model, 'firstname'); ?></div>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model, 'lastname', array('class' => 'col-sm-2 control-label')); ?>
                    <div class="controls"><?php echo $form->textField($model, 'lastname', array('size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($model, 'lastname'); ?></div>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model, 'email', array('class' => 'col-sm-2 control-label')); ?>
                    <div class="controls"><?php echo $form->textField($model, 'email', array('size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($model, 'email'); ?></div>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model, 'password', array('class' => 'col-sm-2 control-label')); ?>
                    <div class="controls"><?php echo $form->passwordField($model, 'password', array('size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($model, 'password'); ?></div>
                </div>

<!--                <div class="control-group">
                    <?php echo $form->labelEx($model, 'phone_number', array('class' => 'col-sm-2 control-label')); ?>
                    <div class="controls"><?php echo $form->textField($model, 'phone_number', array('size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($model, 'phone_number'); ?></div>
                </div>-->

                
                    <?php echo $form->hiddenField($model, 'user_type', array('value'=>"Visitor",'size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($model, 'user_type'); ?>
                    
                    
                    <?php echo date('Y-m-d H:i:s'); ?>

<!--                <div class="control-group">
                    <?php echo $form->labelEx($model, 'faculty', array('class' => 'col-sm-2 control-label')); ?>
                    <div class="controls"><?php echo $form->textField($model, 'faculty', array('size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($model, 'faculty'); ?></div>
                </div>-->

                <div class="control-group">
                    <div class="controls"><?php echo $form->hiddenField($model, 'last_login_date',array('value'=>date('Y-m-d'))); ?>
                    <?php echo $form->error($model, 'last_login_date'); ?></div>
                </div>

                <div class="control-group">
                    <div class="controls"><?php echo $form->hiddenField($model, 'last_login_time',array('value'=>date('H:i:s'))); ?>
                    <?php echo $form->error($model, 'last_login_time'); ?></div>
                </div>

                <div class="control-group">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
                </div>

                <?php $this->endWidget(); ?>
            </div>

        </div><!-- form -->
    </div>
</div>