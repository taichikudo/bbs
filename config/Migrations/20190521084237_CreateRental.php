<?php
use Migrations\AbstractMigration;

class CreateRental extends AbstractMigration
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
        $table = $this->table('rental');
        $table->addColumn('rental_user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('rental_book_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('rental_date', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('rental_return', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('rental_etc', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => false,
        ]);
        $table->create();
    }
}
