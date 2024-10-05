<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsuarioMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'fecha_creacion' => [
                'type' => 'DATETIME',
            ],
            'estado'=> [
                'type' => 'VARCHAR',
                'constraint' => '25',
                'default' => 'ACTIVO'
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('usuario');
    }

    public function down()
    {
        $this->forge->dropTable('usuario');
    }
}
