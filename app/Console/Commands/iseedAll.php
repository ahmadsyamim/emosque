<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB, Artisan;

class iseedAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'iseedall';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make seeders for all tables by iseed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->connection = DB::getDoctrineConnection();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $tableNames = $this->getShortestTableNames();
        $tableNames = array_diff($tableNames, ['migrations']);
        
        Artisan::call('iseed', [
            'tables' => implode(',', $tableNames),
            '--force' => true,
        ]);
    }

    protected function getShortestTableNames(): array
    {
        $sm = $this->connection->getSchemaManager();
        $databaseName = $this->connection->getDatabase();

        $fullSchema = $sm->createSchema();
        $tableNames = $fullSchema->getTableNames();

        return str_replace("$databaseName.", '', $tableNames);
    }
}
