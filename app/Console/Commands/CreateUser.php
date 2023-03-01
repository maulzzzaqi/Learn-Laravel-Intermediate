<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:adduser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Default User';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $name = $this->ask("Input your name");
        $email = $this->ask("Input your email");
        $password = $this->secret("Input your password");

        $this->line("Name: ($name) <($email)>");
        if ($this->confirm('Are you sure?')) {
            $user = new User();

            $user->name = $name;
            $user->email = $email;
            $user->password = Hash::make($password);

            $user->save();
            $this->info("User successfully created");
        } else {
            $this->error("WHY???? :((((( \n ok then...");
        }

        $this->line('Done!');
    }
}
