<?php
/**
 * Created by Artyom Manchenkov
 * Copyright © 2015-2018 [DeepSide Interactive]
 */

/**
 * This is the template for generating an action view file.
 */

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\form\Generator */

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form ActiveForm */

<?= "?>" ?>

<div class="<?= str_replace('/', '-', trim($generator->viewName, '_')) ?>">

    <?= "<?php " ?>$form = ActiveForm::begin(); ?>

    <?php foreach ($generator->getModelAttributes() as $attribute): ?>
    <?= "<?= " ?>$form->field($model, '<?= $attribute ?>') ?>
    <?php endforeach; ?>

        <div class="form-group text-center">
            <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Submit form') ?>, ['class' => 'btn btn-primary']) ?>
        </div>

    <?= "<?php " ?>ActiveForm::end(); ?>

</div><!-- <?= str_replace('/', '-', trim($generator->viewName, '-')) ?> -->
