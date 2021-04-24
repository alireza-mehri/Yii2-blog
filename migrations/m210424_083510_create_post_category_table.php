<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post_category}}`.
 */
class m210424_083510_create_post_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post_category}}', [
            'id' => $this->primaryKey(),
            'post_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),

        ]);
        $this->addForeignKey(
            'FK_post',
            'post_category',
            'post_id',
            'post',
            'id',
            'CASCADE', 'CASCADE');
        $this->addForeignKey(
            'FK_categories',
            'post_category',
            'category_id',
            'categories',
            'id',
            'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post_category}}');
        $this->dropForeignKey(
            'FK_post',
            'post_category'
        );
        $this->dropForeignKey(
            'FK_categories',
            'post_category'
        );
    }
}
