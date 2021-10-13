<?php

namespace App\Console\Commands;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class installador extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blogsc:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'installlation script for blog proyect';

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
        if(!$this->verificate()){
        $role = $this->createRolSuperAdmin();
        $user = $this->createUserSuperAdmin();
        $user->roles()->attach($role);
        $this->line('el rol y el usuario se instalaron satisfactoriamente');
        return Command::SUCCESS;
        } else{
            $this->error('el usuario o rol ya existen');
        }

    }
    private function verificate(){
        return $rol = Rol::find(1);
    }
    
    private function createRolSuperAdmin(){
        $role = "Super Administrador";
        return Rol::create([
            'name' => $role,
            'slug' => Str::slug($role, '-'),
        ]);
    }

    private function createUserSuperAdmin(){
        $user = "SuperUsuario";
        $email = "webmaster@scies.com.co";
        $passwd = Hash::make('1q2w3e4r');
        return User::create([
            'name' => $user,
            'email' => $email,
            'password' => $passwd,
        ]);
    }
}
