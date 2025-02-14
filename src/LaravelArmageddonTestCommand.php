<?php

namespace Maventama\LaravelArmageddon;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class LaravelArmageddonTestCommand extends Command
{
    protected $signature = 'app:armageddon-test';
    protected $description = 'Menghapus vendor, node_modules, composer.json, dan package.json';

    public function handle()
    {
        $filesystem = new Filesystem();

        $paths = [
            base_path('vendor'),
            base_path('node_modules'),
            base_path('composer.json'),
            base_path('composer.lock'),
            base_path('package.json'),
            base_path('package-lock.json'),
            base_path('yarn.lock'),
        ];

        foreach ($paths as $path) {
            if ($filesystem->exists($path)) {
                if ($filesystem->isDirectory($path)) {
                    // $filesystem->deleteDirectory($path);
                    $this->info("Folder $path telah dihapus.");
                } else {
                    // $filesystem->delete($path);
                    $this->info("File $path telah dihapus.");
                }
            } else {
                $this->warn("$path tidak ditemukan.");
            }
        }

        $this->info('App Armageddon selesai.');
    }
}
