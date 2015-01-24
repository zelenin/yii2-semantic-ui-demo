<?php

use yii\helpers\Html;
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Step';

Elements::header($this->title);
?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::steps(
        Elements::step(
            Elements::icon('truck') .
            Html::tag(
                'div',
                Html::tag('div', 'Shipping', ['class' => 'title']) .
                Html::tag('div', 'Choose your shipping options', ['class' => 'description']),
                ['class' => 'content']
            )
        ) .
        Elements::step(
            Elements::icon('payment') .
            Html::tag(
                'div',
                Html::tag('div', 'Billing', ['class' => 'title']) .
                Html::tag('div', 'Enter billing information', ['class' => 'description']),
                ['class' => 'content']
            )
        ) .
        Elements::step(
            Elements::icon('info') .
            Html::tag(
                'div',
                Html::tag('div', 'Confirm Order', ['class' => 'title']),
                ['class' => 'content']
            )
        )
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::steps(
    Elements::step(
        Elements::icon('truck') .
        Html::tag(
            'div',
            Html::tag('div', 'Shipping', ['class' => 'title']) .
            Html::tag('div', 'Choose your shipping options', ['class' => 'description']),
            ['class' => 'content']
        )
    ) .
    Elements::step(
        Elements::icon('payment') .
        Html::tag(
            'div',
            Html::tag('div', 'Billing', ['class' => 'title']) .
            Html::tag('div', 'Enter billing information', ['class' => 'description']),
            ['class' => 'content']
        )
    ) .
    Elements::step(
        Elements::icon('info') .
        Html::tag(
            'div',
            Html::tag('div', 'Confirm Order', ['class' => 'title']),
            ['class' => 'content']
        )
    )
);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::steps(
        Elements::step(
            Elements::icon('truck') .
            Html::tag(
                'div',
                Html::tag('div', 'Shipping', ['class' => 'title']) .
                Html::tag('div', 'Choose your shipping options', ['class' => 'description']),
                ['class' => 'content']
            )
        ) .
        Elements::step(
            Elements::icon('payment') .
            Html::tag(
                'div',
                Html::tag('div', 'Billing', ['class' => 'title']) .
                Html::tag('div', 'Enter billing information', ['class' => 'description']),
                ['class' => 'content']
            ),
            ['class' => 'active']
        ) .
        Elements::step(
            Elements::icon('info') .
            Html::tag(
                'div',
                Html::tag('div', 'Confirm Order', ['class' => 'title']),
                ['class' => 'content']
            ),
            ['class' => 'disabled']
        ),
        ['class' => 'vertical']
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::steps(
    Elements::step(
        Elements::icon('truck') .
        Html::tag(
            'div',
            Html::tag('div', 'Shipping', ['class' => 'title']) .
            Html::tag('div', 'Choose your shipping options', ['class' => 'description']),
            ['class' => 'content']
        )
    ) .
    Elements::step(
        Elements::icon('payment') .
        Html::tag(
            'div',
            Html::tag('div', 'Billing', ['class' => 'title']) .
            Html::tag('div', 'Enter billing information', ['class' => 'description']),
            ['class' => 'content']
        ),
        ['class' => 'active']
    ) .
    Elements::step(
        Elements::icon('info') .
        Html::tag(
            'div',
            Html::tag('div', 'Confirm Order', ['class' => 'title']),
            ['class' => 'content']
        ),
        ['class' => 'disabled']
    ),
    ['class' => 'vertical']
);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::steps(
        Elements::step(
            Elements::icon('truck') .
            Html::tag(
                'div',
                Html::tag('div', 'Shipping', ['class' => 'title']) .
                Html::tag('div', 'Choose your shipping options', ['class' => 'description']),
                ['class' => 'content']
            ),
            ['tag' => 'a']
        )
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::steps(
    Elements::step(
        Elements::icon('truck') .
        Html::tag(
            'div',
            Html::tag('div', 'Shipping', ['class' => 'title']) .
            Html::tag('div', 'Choose your shipping options', ['class' => 'description']),
            ['class' => 'content']
        ),
        ['tag' => 'a']
    )
);
PHP
]) ?>
