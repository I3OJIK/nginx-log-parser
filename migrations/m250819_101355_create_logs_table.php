<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%logs}}`.
 */
class m250819_101355_create_logs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%logs}}', [
            'id' => $this->primaryKey(),
            'ip' => $this->string(45)->notNull(),
            'request_time' => $this->timestamp()->notNull(),
            'url' => $this->string(2048)->notNull(),
            'user_agent_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            'fk_logs_user_agent',
            '{{%logs}}',
            'user_agent_id',
            '{{%user_agents}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_logs_user_agent', '{{%logs}}');
        $this->dropTable('{{%logs}}');
    }
}
