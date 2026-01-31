<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ConvertToWebp extends Command
{
    protected $signature = 'convert:webp {input}';
    protected $description = 'Convertir imágenes a formato WebP';

    public function handle()
    {
        $inputPath = $this->argument('input');
        $outputPath = str_replace(public_path(), public_path(), $inputPath) . '.webp';

        $image = Image::make($inputPath);
        $image->save($outputPath, 85, 'webp');

        $this->info("Convertido: {$inputPath} → {$outputPath}");
    }
}