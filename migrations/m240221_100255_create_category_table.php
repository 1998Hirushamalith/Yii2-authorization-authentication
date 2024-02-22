<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m240221_100255_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //Database Migrations Add Table
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name' =>$this->string(255),
            'status'=>$this->tinyInteger(2)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
