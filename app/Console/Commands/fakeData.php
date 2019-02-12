<?php
	
	namespace App\Console\Commands;
	
	use Illuminate\Console\Command;
	
	class fakeData extends Command {
		/**
		 * The name and signature of the console command.
		 *
		 * @var string
		 */
		protected $signature = 'db:fakeData';
		
		/**
		 * The console command description.
		 *
		 * @var string
		 */
		protected $description = 'Create 10 records fake data for all models';
		
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
			$this->comment( 'Creating Fake data' );
			$this->comment( '++++++++++++++++' );
			
			try {
				$this->call( 'db:seed', [
					'--class' => 'FakeDataTableSeeder'
				] );
			} catch ( \Exception $exception ) {
				$this->comment( $exception );
			}
			
			$this->line( '' );
			$this->comment( 'Complete...' );
			$this->line( '------------------' );
		}
	}
