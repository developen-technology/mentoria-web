<?php

namespace app\core\form;

use app\core\field\Field;
use app\core\Model;

class Form
{
    public static function begin($action, $method)
    {
        //return sprintf('<form action="%s" method="%s">', $action, $method);

        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        //return '</form>';
        echo '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new Field($model, $attribute);
    }
}