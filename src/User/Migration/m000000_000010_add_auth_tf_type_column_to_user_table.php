<?php

namespace Da\User\Migration;

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m000000_000010_add_auth_tf_type_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'auth_tf_type', $this->string(20)->after('auth_tf_enabled'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'auth_tf_type');
    }
}
