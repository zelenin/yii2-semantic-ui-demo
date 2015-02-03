<?php
/**
 * @var Model $model
 */

use app\modules\demo\models\Model;

use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\widgets\ActiveForm;

$this->title = 'ActiveForm';

Elements::header($this->title);
?>

<?php $form = ActiveForm::begin(); ?>

<div class="one field">
    <?= $form->field($model, 'id')->textInput(['maxlength' => 255]) ?>
</div>
<div class="one field">
    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>
</div>
<div class="one field">
    <?= $form->field($model, 'total')->dropDownList($model->getTotalList()) ?>
</div>

<?= Elements::button('Update', ['class' => ' primary']) ?>

<?php $form::end(); ?>
