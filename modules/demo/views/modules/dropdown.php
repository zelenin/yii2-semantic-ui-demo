<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\web\View;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\modules\Dropdown;
use Zelenin\yii\SemanticUI\modules\Select;

$this->title = 'Dropdown';

Elements::header($this->title);
?>

<?= Example::widget([
    'demo' => Select::widget([
        'name' => 'select1',
        'selection' => 3,
        'search' => false,
        'fluid' => true,
        'disabled' => false,
        'items' => [
            '' => '',
            '1' => 'Label 1',
            '2' => 'Label 2',
            '3' => 'Label 3'
        ]
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Select;
echo Select::widget([
    'name' => 'select1',
    'selection' => 3,
    'search' => false,
    'fluid' => true,
    'disabled' => false,
    'items' => [
        '' => '---',
        '1' => 'Label 1',
        '2' => 'Label 2',
        '3' => 'Label 3'
    ]
]);
PHP
]) ?>

<?= Example::widget([
    'demo' => Dropdown::widget([
        'name' => 'select2',
        'selection' => 3,
        'search' => false,
        'fluid' => true,
        'disabled' => false,
        'defaultText' => 'Select an option',
        'items' => [
            '',
            'Categories' => [
                '1' => 'Clothing',
                '2' => 'Home Goods',
                '3' => 'Bedroom'
            ],
            null,
            'Order' => [
                '4' => 'Status',
                '5' => 'Cancellations'
            ]
        ]
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Dropdown;
echo Dropdown::widget([
    'name' => 'select2',
    'selection' => 3,
    'search' => false,
    'fluid' => true,
    'disabled' => false,
    'defaultText' => 'Select an option',
    'items' => [
        '',
        'Categories' => [
            '1' => 'Clothing',
            '2' => 'Home Goods',
            '3' => 'Bedroom'
        ],
        null,
        'Order' => [
            '4' => 'Status',
            '5' => 'Cancellations'
        ]
    ]
]);
PHP
]) ?>

<?= Example::widget([
    'demo' => Select::widget([
        'name' => 'select3',
        'selection' => 3,
        'search' => false,
        'fluid' => true,
        'disabled' => false,
        'multiple' => true,
        'items' => [
            '' => '---',
            '1' => 'Label 1',
            '2' => 'Label 2',
            '3' => 'Label 3'
        ]
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Select;
echo Select::widget([
    'name' => 'select3',
    'selection' => 3,
    'search' => false,
    'fluid' => true,
    'disabled' => false,
    'multiple' => true,
    'items' => [
        '' => '---',
        '1' => 'Label 1',
        '2' => 'Label 2',
        '3' => 'Label 3'
    ]
]);
PHP
]) ?>
