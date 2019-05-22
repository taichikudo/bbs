<?php
use Migrations\AbstractMigration;

class CreateBookstate extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('bookstate');
        $table->addColumn('bookstate_isbn', 'string', [
            'default' => null,
            'limit' => 13,
            'null' => false,
        ]);
        $table->addColumn('bookstate_name', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => false,
        ]);
        $table->addColumn('bookstate_in', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('bookstate_out', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('bookstate_etc', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => false,
        ]);
        $table->create();
    }
}
