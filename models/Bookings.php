<?php

namespace app\models;

use DateTime;
use Yii;

/**
 * This is the model class for table "bookings".
 *
 * @property int $id
 * @property int $user_id
 * @property int $table_id
 * @property string $date
 * @property string $time
 * @property int $status_id
 *
 * @property Status $status
 * @property Tables $table
 * @property User $user
 */
class Bookings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'table_id', 'date', 'time', 'status_id'], 'required', 'message' => 'Поле не заполнено'],
            [['user_id', 'table_id', 'status_id'], 'integer'],
            [['date', 'time'], 'safe'],
            [['date'], 'date', 'min' => (new DateTime())->format("d.m.Y") ],
            [['table_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tables::class, 'targetAttribute' => ['table_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::class, 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Пользователь',
            'table_id' => 'Стол',
            'date' => 'Дата',
            'time' => 'Время',
            'status_id' => 'Статус',
            'user' => 'Пользователь',
            'table' => 'Стол',
            'status' => 'Статус',
        ];
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::class, ['id' => 'status_id']);
    }

    /**
     * Gets query for [[Table]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTable()
    {
        return $this->hasOne(Tables::class, ['id' => 'table_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
