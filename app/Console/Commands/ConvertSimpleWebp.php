<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ConvertSimpleWebp extends Command
{
    protected $signature = 'convert:simple-webp';
    protected $description = 'Convertir imágenes a WebP usando GD extension';

    public function handle()
    {
        $directory = base_path('public/img');
        $files = File::allFiles($directory);
        $converted = 0;

        $this->info("Buscando imágenes para convertir en: {$directory}");

        foreach ($files as $file) {
            if (in_array($file->getExtension(), ['jpg', 'jpeg', 'png'])) {
                $webpPath = $file->getPathname() . '.webp';

                if (File::exists($webpPath)) {
                    $this->line("Ya existe: {$file->getFilename()} -> skip");
                    continue;
                }

                if ($this->convertToWebp($file->getPathname(), $webpPath)) {
                    $this->info("✅ Convertido: {$file->getFilename()}");
                    $converted++;
                } else {
                    $this->error("❌ Error: {$file->getFilename()}");
                }
            }
        }

        $this->info("\n📊 Resumen:");
        $this->info("Convertidas: {$converted}");

        if ($converted > 0) {
            $this->info("\n🎉 ¡Conversiones completadas!");
        } else {
            $this->info("\nℹ️  No se encontraron imágenes o ya están convertidas.");
        }

        return 0;
    }

    private function convertToWebp($inputPath, $outputPath)
    {
        try {
            if (function_exists('imagewebp')) {
                $imageInfo = getimagesize($inputPath);
                $mimeType = $imageInfo['mime'];

                if ($mimeType == 'image/jpeg') {
                    $img = imagecreatefromjpeg($inputPath);
                } elseif ($mimeType == 'image/png') {
                    $img = imagecreatefrompng($inputPath);
                } else {
                    return false;
                }

                // Guardar como WebP
                $quality = 85;
                imagewebp($img, $outputPath, $quality);
                imagedestroy($img);
                return true;
            }
            return false;
        } catch (\Exception $e) {
            $this->error("Error: {$e->getMessage()}");
            return false;
        }
    }
}