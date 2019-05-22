<?php
use Migrations\AbstractMigration;

class CreateBookinfo extends AbstractMigration
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
        $table = $this->table('bookinfo');
        $table->addColumn('bookinfo_isbn', 'string', [
            'default' => null,
            'limit' => 13,
            'null' => false,
        ]);
        $table->addColumn('bookinfo_bookname', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => false,
        ]);
        $table->addColumn('bookinfo_code', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('bookinfo_auther', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => false,
        ]);
        $table->addColumn('bookinfo_com', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => false,
        ]);
        $table->addColumn('bookinfo_startday', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
