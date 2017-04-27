<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $email;
    public $name;
    
    public function rules()
    {
        return [
            [['email','name'],'required'],
            ['email','email']
        ];
    }
}