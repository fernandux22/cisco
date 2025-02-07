<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido1
 * @property string|null $apellido2
 * @property string|null $ciudad
 * @property int|null $categoría
 *
 * @property Pedido[] $pedidos
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido1'], 'required'],
            [['categoría'], 'integer'],
            [['nombre', 'apellido1', 'apellido2', 'ciudad'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido1' => 'Apellido1',
            'apellido2' => 'Apellido2',
            'ciudad' => 'Ciudad',
            'categoría' => 'Categoría',
        ];
    }

    /**
     * Gets query for [[Pedidos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedido::class, ['id_cliente' => 'id']);
    }
}
