<?php

use yii\db\Migration;

/**
 * Class m200721_080137_contacts
 */
class m200721_080137_contacts extends Migration
{
    /**
     * {@inheritdoc}
     * @throws \yii\base\Exception
     */

    public function up()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string('25')->notNull(),
            'lastname' => $this->string('25')->notNull(),
            'number' => $this->json()
        ]);
    }

    public function down()
    {
        $this->dropTable('contacts');
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200721_080137_contacts cannot be reverted.\n";

        return false;
    }
}
