<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('gambar')
                    ->label('Foto')
                    ->image()
                    ->directory('galeri')
                    ->imagePreviewHeight('200')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('judul')
                    ->label('Judul / Keterangan')
                    ->placeholder('Contoh: Area Camping'),
            ]);
    }
}
