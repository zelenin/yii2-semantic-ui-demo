<?php

namespace app\modules\demo\models;

use yii\db\ActiveRecord;

class Model extends ActiveRecord
{
    public $id;
    public $name;
    public $total;

    public function rules()
    {
        return [
            ['id', 'required'],
            ['name', 'required'],
            ['total', 'required']
        ];
    }

    public static function getTotalList()
    {
        $array = [];
        for ($i = 1; $i <= 50; $i++) {
            $name = 'Total ' . $i;
            $array[$name] = $name;
        }
        return $array;
    }

    public static function getTitleList()
    {
        $array = [];
        for ($i = 1; $i <= 2; $i++) {
            $name = 'Title ' . $i;
            $array[$name] = $name;
        }
        return $array;
    }
}
