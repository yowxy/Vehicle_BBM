<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehicleResource\Pages;
use App\Filament\Resources\VehicleResource\RelationManagers;
use App\Models\Vehicles;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VehicleResource extends Resource
{
    protected static ?string $model = Vehicles::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->helperText('tolong harap di isi'),



                Forms\Components\Select::make('type')
                    ->label('Vehicle Type')
                    ->options([
                        'mobil' => 'Mobil',
                        'motor' => 'Motor',
                        'truck' => 'Truck',
                    ])
                    ->required()
                    ->helperText('Pilih tipe kendaraan'),




                Forms\Components\FileUpload::make('image')
                    ->label('Upload Image')
                    ->image() // This ensures that only image files are allowed
                    ->directory('images') // Set the directory where images will be uploaded
                    ->required(), // Mark the field as required



                Forms\Components\TextInput::make('is_company_owned')
                    ->required()
                    ->maxLength(255),

                    Forms\Components\Select::make('is_company_owned')
                    ->label(' Company')
                    ->options([
                        true => 'Yes',
                        false => 'No',
                    ])
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->searchable(),
                Tables\Columns\TextColumn::make('type')
                ->searchable(),


                Tables\Columns\BooleanColumn::make('is_company_owned')
                ->label('Company Owned')
                ->trueIcon('heroicon-o-check-circle')
                 ->falseIcon('heroicon-o-x-circle'),



                ImageColumn::make('avatar')
                ->label('Vehicle Image')
                ->size(60), // Optional: Set the image size

            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVehicles::route('/'),
            'create' => Pages\CreateVehicle::route('/create'),
            'edit' => Pages\EditVehicle::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
