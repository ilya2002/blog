<?php
namespace app\models;
use Yii;
class Blog extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'blog';
    }
    public function rules()
    {
        return [
            [['name', 'title', 'post'], 'required'],
            [['title', 'post'], 'string'],
            [['name'], 'string', 'max' => 50],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'title' => 'Заголовок',
            'post' => 'Новость',
        ];
    }

}
