<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_agents}}`.
 */
class m250819_100556_create_user_agents_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_agents}}', [
            'id' => $this->primaryKey(),
            'os' => $this->string(50)->notNull(),
            'architecture' => $this->string(10)->notNull(),
            'browser' => $this->string(50)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_agents}}');
    }
}
