<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ConvertAllToWebpFixed extends Command
{
    protected $signature = 'convert:webp-fixed';
    protected $description = 'Convertir todas las imágenes JPG/PNG a WebP en todo el directorio public/img';

    public function handle()
    {
        $directory = base_path('public/img');

        if (!File::exists($directory)) {
            $this->error("El directorio no existe: {$directory}");
            return 1;
        }

        $files = File::allFiles($directory);
        $converted = 0;
        $failed = 0;

        $this->info("Buscando imágenes para convertir en: {$directory}");

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

                    $this->info("✅ Convertido: {$file->getFilename()}");
                    $converted++;
                } catch (\Exception $e) {
                    $this->error("❌ Error en {$file->getFilename()}: {$e->getMessage()}");
                    $failed++;
                }
            }
        }

        $this->info("\n📊 Resumen:");
        $this->info("Convertidas: {$converted}");
        $this->info("Fallidas: {$failed}");

        if ($converted > 0) {
            $this->info("\n🎉 ¡Conversiones completadas! Las imágenes ahora están en formato WebP.");
        } else {
            $this->info("\nℹ️  No se encontraron imágenes JPG/PNG para convertir.");
        }

        return 0;
    }
}