<?php

namespace frontend\models;

use yii\base\Model;

class FeedbackForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'] , 'required'],
            ['email' , 'email', 'message' => 'Некорректный e-mail адрес']
        ];
    }


}