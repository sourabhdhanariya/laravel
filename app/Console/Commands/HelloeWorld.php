<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class HelloeWorld extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this is use for CLI';

    /**
     * Execute the console command.
     *
     * @return int
     */
     public function handle()
    {   
        
        // $this->info('Good, i am working is handle method' );
        // $this->newLine(1);
        // $this->error('Good, i am working is handle method' );
        $header=['name', 'email'];
    //     $data=[['Sourabh','kumawatsourabh65@gmail.com'],
    //             ['Shiva', 'shiva@gmail.com']
    // ];
    // $data=user::all(['name', 'email'])->toArray();
    // $this->table($header,$data);

    //     return Command::SUCCESS;
    $data=user::all(['name', 'email'])->toArray();
    $this->withProgressBar($data, function($row){
        $this->info('Good Morning !'.$row['name']);
        // return Command::SUCCESS;
   
        } );
       }
}
