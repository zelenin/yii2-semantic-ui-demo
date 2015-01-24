<?php
use yii\helpers\Html;
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Divider';
echo Elements::header($this->title);
?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::divider(),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::divider();
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => '
<div class="ui two column middle aligned relaxed fitted stackable grid">
    <div class="column">
        ' . Elements::segment('
            <div class="field">
                <label>Username</label>
                ' . Elements::inputWrapper(
                Html::input('text', null, null, ['placeholder' => 'Username']) . Elements::icon('user'),
                ['class' => 'left icon']
            ) . '
            </div>
            <div class="field">
                <label>Password</label>
                ' . Elements::inputWrapper(
                Html::input('password', null, null) . Elements::icon('lock'),
                ['class' => 'left icon']
            ) . '
            </div>
            ' . Elements::button('Login', ['class' => 'blue submit']) . '
        ', ['class' => 'form']
        ) . '
    </div>
    ' . Elements::divider('Or', ['class' => 'vertical']) . '
    <div class="center aligned column">' . Elements::button(Elements::icon('signup') . 'Sign Up', ['class' => 'huge green labeled icon']) . '</div>
</div>',
    'code' => <<<PHP
echo '<div class="ui two column middle aligned relaxed fitted stackable grid">
    <div class="column">
        ' . Elements::segment('
            <div class="field">
                <label>Username</label>
                ' . Elements::inputWrapper(
                    Html::input('text', null, null,['placeholder' => 'Username']) . Elements::icon('user'),
                    ['class' => 'left icon']
                ) . '
            </div>
            <div class="field">
                <label>Password</label>
                ' . Elements::inputWrapper(
                        Html::input('password', null, null) . Elements::icon('lock'),
                        ['class' => 'left icon']
                ) . '
            </div>
            ' . Elements::button('Login', ['class' => 'blue submit' ]) . '
        ',['class' => 'form']
        ) . '
    </div>
    ' . Elements::divider('Or', ['class' => 'vertical']) . '
    <div class="center aligned column">' . Elements::button(Elements::icon('signup') . 'Sign Up',['class'=>'huge green labeled icon']) . '</div>
</div>';
PHP
]) ?>

<?= Elements::header('Horizontal Divider') ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::segment(
        Elements::inputWrapper(
            Elements::icon('search') .
            Html::input('text', null, null, ['placeholder' => 'Order #']) .
            Elements::button('Search', ['class' => 'blue submit']),
            ['class' => 'left icon action']
        ) .
        Elements::divider('or', ['class' => 'horizontal']) .
        Elements::button('Create New Order' . Elements::icon('add'), ['class' => 'teal labeled icon']),
        ['class' => 'center aligned compact']
    ),
    'code' => <<<PHP
use yii\helpers\Html;
use Zelenin\yii\SemanticUI\Elements;
echo Elements::segment(
        Elements::inputWrapper(
            Elements::icon('search') .
            Html::input('text', null, null, ['placeholder' => 'Order #']) .
            Elements::button('Search', ['class' => 'blue submit']),
            ['class' => 'left icon action']
        ) .
        Elements::divider('or', ['class' => 'horizontal']) .
        Elements::button('Create New Order' . Elements::icon('add'), ['class' => 'teal labeled icon']),
        ['class' => 'center aligned compact']
    );
PHP
]) ?>
