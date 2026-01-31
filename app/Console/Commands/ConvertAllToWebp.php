<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ConvertAllToWebp extends Command
{
    protected $signature = 'convert:all-webp {directory=public/img/portfolio}';
    protected $description = 'Convertir todas las imágenes JPG/PNG a WebP en un directorio';

    public function handle()
    {
        $directory = base_path($this->argument('directory'));

        if (!File::exists($directory)) {
            $this->error("El directorio no existe: {$directory}");
            return 1;
        }

        $files = File::allFiles($directory);
        $converted = 0;
        $failed = 0;

        $this->info("Iniciando conversión en: {$directory}");

        foreach ($files as $file) {
            if (in_array($file->getExtension(), ['jpg', 'jpeg', 'png'])) {
                $webpPath = $file->getPathname() . '.webp';

                if (File::exists($webpPath)) {
                    $this->line("Ya existe: {$file->getFilename()} -> skip");
                    continue;
                }

                try {
                    $image = Image::make($file->getPathname());
                    $image->save($webpPath, 85, 'webp');

                    $this->info("Convertido: {$file->getFilename()}");
                    $converted++;
                } catch (\Exception $e) {
                    $this->error("Error en {$file->getFilename()}: {$e->getMessage()}");
                    $failed++;
                }
            }
        }

        $this->info("\nResumen:");
        $this->info("Convertidas: {$converted}");
        $this->info("Fallidas: {$failed}");

        return 0;
    }
}