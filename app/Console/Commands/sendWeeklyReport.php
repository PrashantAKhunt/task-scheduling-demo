<?php
 
namespace App\Console\Commands;
 
use Illuminate\Console\Command;
use App\Models\AddTask;
use App\Mail\WeeklyReport;
use Mail;
class sendWeeklyReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weekly:mail_report';
 
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Weekly report send to Manager';
 
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
 
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $emp = AddTask::all();
 
        $email = 'prashantkhunt1999@gmail.com';
 
        $body = $emp;
 
        Mail::to($email)->send(new WeeklyReport($body));
 
        $this->info('Weekly report has been send successfully');
    }
}
