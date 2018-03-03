<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ward}}`.
 */
class m180303_085707_create_ward_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ward}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'type' => $this->string(30)->notNull(),
            'location' => $this->string(30)->notNull(),
            'district_id' => $this->string(5)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ward}}');
    }
}
