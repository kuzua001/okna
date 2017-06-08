<?php

use yii\db\Migration;
use frontend\components\AppHelper;

class m170608_150721_texts extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m170608_150721_texts cannot be reverted.\n";
//
//        return false;
//    }

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('texts', [
            'id' => $this->primaryKey(),
            'key' => $this->string(255)->notNull(),
            'lang' => $this->string(255)->notNull()->defaultValue(AppHelper::LANG_RU),
            'value' => $this->string(8000),
            'created_at' => $this->timestamp()->notNull()->defaultValue(new \yii\db\Expression('now()')),
            'updated_at' => $this->timestamp()->notNull()->defaultValue(new \yii\db\Expression('now()')),
            'is_html' => $this->boolean()->defaultValue(false)
        ], $tableOptions);

        $this->createIndex(
            'idx-unique-texts-key-lang',
            'texts',
            'key, lang'
        );
    }

    public function down()
    {
        $this->dropTable('texts');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
