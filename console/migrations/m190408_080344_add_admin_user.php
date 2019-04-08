<?php

use common\models\User;
use yii\db\Migration;

/**
 * Class m190408_080344_add_admin_user
 */
class m190408_080344_add_admin_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $user = new User();
        $user->username = 'admin';
        $user->setPassword('admin');
        $user->email = 'offiedz@gmail.com';
        $user->role = User::ROLE_USER;
        $user->status = User::STATUS_ACTIVE;

        $user->save();

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190408_080344_add_admin_user cannot be reverted.\n";

        User::findByUsername('admin')->delete();

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190408_080344_add_admin_user cannot be reverted.\n";

        return false;
    }
    */
}
