<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%province}}`.
 */
class m180303_085756_create_province_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%province}}', [
            'id' => $this->primaryKey(),
            `name` varchar(100) NOT NULL,
            `type` varchar(30) NOT NULL,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%province}}');
    }
}
