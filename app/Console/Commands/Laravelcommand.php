<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Laravelcommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:basic
    {argument : test argument}
    {--o|opsi= : opsi 1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'laravel basic command';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info("dikasih info mas e");
        $this->error("raiso");
        $this->line("hi!");

        $this->line(print_r($this->options()) . '' . print_r($this->arguments()));

        $this->line($this->argument('argument') . " " . $this->option('opsi'));

        $name = $this->ask("What is your name");
        $password = $this->secret("Input your instagram password please :)");

        if ($this->confirm("Are you sure?")){
            $this->line($name . "\n" . $password);
            $this->line("Thanks! I'll be back in a minute:)");
        }
    }
}
