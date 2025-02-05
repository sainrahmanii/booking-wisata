<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TicketResource\Pages;
use App\Filament\Resources\TicketResource\RelationManagers;
use App\Models\Ticket;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Notifications\Actions\ActionGroup;
use Filament\Pages\Actions\ViewAction;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    protected static ?string $navigationIcon = 'heroicon-s-ticket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Fieldset::make('Details')
                ->schema([
                    TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                    Textarea::make('address')
                    ->required()
                    ->maxLength(255)
                    ->rows(3),

                    FileUpload::make('thumbnail')
                    ->image()
                    ->required(),

                    Repeater::make('photos')
                    ->relationship('photos')
                    ->schema([
                        FileUpload::make('photo')
                        ->required()
                    ])
                    ]),

                    Fieldset::make('Additional')
                    ->schema([
                        RichEditor::make('about')
                        ->required(),

                        TextInput::make('path_video')
                        ->required()
                        ->maxLength(255),

                        TextInput::make('price')
                        ->required()
                        ->numeric()
                        ->prefix('IDR'),

                        Select::make('is_popular')
                        ->options([
                            true => 'Popular',
                            false => 'Not Popular'
                        ])
                        ->required(),

                        Select::make('category_id')
                        ->relationship('category', 'name')
                        ->searchable()
                        ->preload(),

                        Select::make('seller_id')
                        ->relationship('seller', 'name')
                        ->searchable()
                        ->preload(),

                        TimePicker::make('open_time_at')
                        ->required(),

                        TimePicker::make('closed_time_at')
                        ->required()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->searchable(),

                TextColumn::make('price')
                ->money('IDR'),

                ImageColumn::make('thumbnail')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListTickets::route('/'),
            'create' => Pages\CreateTicket::route('/create'),
            'edit' => Pages\EditTicket::route('/{record}/edit'),
        ];
    }
}
