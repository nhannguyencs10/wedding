<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "makeupcontract".
 *
 * @property integer $id_user
 * @property integer $id_contract
 *
 * @property User $idUser
 * @property Contract $idContract
 */
class Makeupcontract extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'makeupcontract';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_contract'], 'required'],
            [['id_user', 'id_contract'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'id_contract' => 'Id Contract',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdContract()
    {
        return $this->hasOne(Contract::className(), ['id_contract' => 'id_contract']);
    }
}
