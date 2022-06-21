<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AppInitiate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initiate app, clear all tables with new migrations and create admin account';

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
        Artisan::call('migrate:fresh');

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'doctor']);
        Role::create(['name' => 'receptionist']);
        Role::create(['name' => 'pharmacy']);

        User::create([
            'name' => 'Admin Dev',
            'email' => 'admin@example.dev',
            'password' => Hash::make('admin@123456')
        ])->assignRole('admin');

        User::create([
            'name' => 'Doctor Dev',
            'email' => 'doctor@example.dev',
            'password' => Hash::make('doctor@123456')
        ])->assignRole('doctor');

    }
}
