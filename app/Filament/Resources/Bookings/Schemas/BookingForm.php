<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('no_hp')
                    ->required(),
                Select::make('kamar_id')
                    ->label('Kamar')
                    ->relationship('kamar', 'nama')
                    ->required(),
                DatePicker::make('tanggal_masuk')
                    ->required(),
                DatePicker::make('tanggal_keluar')
                    ->required(),
                TextInput::make('jumlah_tamu')
                    ->required()
                    ->numeric(),
                Textarea::make('catatan')
                    ->default(null)
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(['pending' => 'Pending', 'konfirmasi' => 'Konfirmasi', 'batal' => 'Batal'])
                    ->default('pending')
                    ->required(),
            ]);
    }
}
