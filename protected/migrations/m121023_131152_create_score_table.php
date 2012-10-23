<?php

class m121023_131152_create_score_table extends CDbMigration
{
        public $table = 'score';

	public function up()
	{
          $this->createTable( $this->table, array(
            'id'        => 'pk',
            'ik_id'     => 'varchar(100)',
            'd_id'      => 'varchar(100)',
            'username'  => 'varchar(100)',
            'score'     => 'integer default 0',
            'date'      => 'datetime'
          ) );
	}

	public function down()
	{
          $this->dropTable( $this->table );
	}
}
