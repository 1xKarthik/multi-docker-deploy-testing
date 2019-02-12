<?php
	
	namespace App\Console\Commands;
	
	use Illuminate\Console\Command;
	use Illuminate\Support\Facades\DB;
	
	class seedDB extends Command {
		/**
		 * The name and signature of the console command.
		 *
		 * @var string
		 */
		protected $signature = 'db:seedAll';
		
		/**
		 * The console command description.
		 *
		 * @var string
		 */
		protected $description = 'Seed all the data in the existing database.';
		
		/**
		 * Create a new command instance.
		 *
		 * @return void
		 */
		public function __construct() {
			parent::__construct();
		}
		
		/**
		 * Execute the console command.
		 *
		 * @return mixed
		 */
		public function handle() {
			$this->comment( '++++++++++++++++' );
			$this->comment( 'Seeding existing data' );
			$this->comment( '++++++++++++++++' );
			$tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();
			$table  = implode( ',', $tables );
			
			try {
				$this->call( 'iseed', [
					'tables'  => $table,
					'--clean' => true,
					'--force' => true
				] );
			} catch ( \Exception $exception ) {
				$this->comment( $exception );
			}
			
			$this->line( '' );
			$this->comment( 'Seeding Complete...' );
			$this->line( '------------------' );
			
		}
	}
