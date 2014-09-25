<?php

class m140916_070547_create_user_table extends CDbMigration {
    const TABLE_NAME = 'user';

    public function safeUp() {
        $this->createTable(self::TABLE_NAME, array(
            'id' => 'pk',
            'username' => 'string',
            'fullname' => 'string',
            'password' => 'CHAR(64)',
            'email' => 'string',
            'data' => 'text',
            'active' => 'boolean',
        ));
    }

    public function safeDown() {
        $this->dropTable(self::TABLE_NAME);
    }
}