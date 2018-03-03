<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%district}}`.
 */
class m180303_085646_create_district_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%district}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'type' => $this->string(30)->notNull(),
            'location' => $this->string(30)->notNull(),
            'province_id' => $this->string(5)->notNull(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%district}}');
    }
}
