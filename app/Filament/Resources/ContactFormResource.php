<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactFormResource\Pages;
use App\Filament\Resources\ContactFormResource\RelationManagers;
use App\Models\ContactForm;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactFormResource extends Resource
{
    protected static ?string $model = ContactForm::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Fieldset::make('Info')->schema([

                    Forms\Components\TextInput::make('name')->columnSpan(3),
                    Forms\Components\TextInput::make('email')->email()->columnSpan(2),
                    Forms\Components\TextInput::make('phone')->tel()->columnSpan(1),
                    Forms\Components\TextInput::make('subject')->columnSpan(3),

                    Forms\Components\Textarea::make('message')->columnSpan(3),



                ])->columns(3),




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('subject'),
                ToggleColumn::make('read')->disabled(),
                Tables\Columns\TextColumn::make('created_at')->since(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListContactForms::route('/'),
            'create' => Pages\CreateContactForm::route('/create'),
            'view' => Pages\ViewContactForm::route('/{record}'),
            'edit' => Pages\EditContactForm::route('/{record}/edit'),
        ];
    }
}
