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
