<?php

use yii\db\Migration;

/**
 * Handles the creation for table `posts`.
 */
class m160717_233449_create_posts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'user' => $this->string(16)->notNull(),
            'email' => $this->string(16)->notNull(),
            'body' => $this->text()->notNull(),
            'file' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('posts');
    }
}
