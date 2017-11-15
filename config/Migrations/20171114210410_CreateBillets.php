<?php
use Migrations\AbstractMigration;

class CreateBillets extends AbstractMigration
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
        $table = $this->table('billets');
        $table->addColumn('id_billet', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('date', 'timestamp', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('titre', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('contenu', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex([
            'id_billet',
        ], [
            'name' => 'UNIQUE_ID_BILLET',
            'unique' => true,
        ]);
        $table->create();
    }
}
