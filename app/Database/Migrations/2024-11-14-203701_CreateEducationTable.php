<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEducationTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tingkat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'institusi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tahun_mulai' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'tahun_selesai' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'urutan' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('education');
    }

    public function down()
    {
        $this->forge->dropTable('education');
    }
}

