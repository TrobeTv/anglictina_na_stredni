<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->label('Jméno')
                ->required(),
            Forms\Components\TextInput::make('role')
                ->label('Role (např. Studentka)')
                ->required(),
            Forms\Components\TextInput::make('heading')
                ->label('Hlavní nadpis')
                ->required(),
            Forms\Components\RichEditor::make('content')
                ->label('Obsah reference')
                ->columnSpanFull()
                ->required(),
            Forms\Components\FileUpload::make('image')
                ->label('Obrázek')
                ->image()
                ->disk('public') // Ukládání do public disku
                ->directory('testimonials') // Do složky storage/app/public/testimonials
                ->required(),
            Forms\Components\Toggle::make('is_visible')
                ->label('Zobrazit na webu')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->disk('public'),
                Tables\Columns\TextColumn::make('name')->label('Jméno')->searchable(),
                Tables\Columns\TextColumn::make('heading')->label('Nadpis'),
                Tables\Columns\IconColumn::make('is_visible')->label('Viditelné')->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
