<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingTransactionResource\Pages;
use App\Filament\Resources\BookingTransactionResource\RelationManagers;
use App\Models\BookingTransaction;
use App\Models\Ticket;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingTransactionResource extends Resource
{
    protected static ?string $model = BookingTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-m-archive-box';

    protected static ?string $navigationGroup = 'Customer';

    public static function getNavigationBadge(): ?string
    {
        return BookingTransaction::where('is_paid', 0)->count();
    }

    public static function getNavigationBadgeColor(): string
    {
        return 'warning'; // Warna kuning
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //

                Wizard::make([
                    Step::make('Product and price')
                        ->schema([
                            Select::make('ticket_id')
                                ->relationship('ticket', 'name')
                                ->searchable()
                                ->preload()
                                ->required()
                                ->reactive()
                                ->afterStateUpdated(function ($state, callable $set) {
                                    $ticket = Ticket::find($state);
                                    $set('price', $ticket ? $ticket->price : 0);
                                }),

                            TextInput::make('total_participant')
                                ->required()
                                ->numeric()
                                ->prefix('people')
                                ->reactive()
                                ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                    $price = $get('price');
                                    $subtotal = $price * $state;
                                    $totalPpn = $subtotal * 0.11;
                                    $totalAmount = $subtotal + $totalPpn;

                                    $set('total_amount', $totalAmount);
                                }),

                            TextInput::make('total_amount')
                                ->required()
                                ->numeric()
                                ->prefix('IDR')
                                ->readOnly()
                                ->helperText('Harga sudah include PPN 11%')
                        ]),

                    Step::make('Customer Information')
                        ->schema([
                            TextInput::make('name')
                                ->required()
                                ->maxLength(255),

                            TextInput::make('phone_number')
                                ->required()
                                ->maxLength(255),

                            TextInput::make('email')
                                ->required()
                                ->maxLength(255),

                            TextInput::make('booking_trx_id')
                                ->required()
                                ->maxLength(255)
                        ]),

                    Step::make('Payment Information')
                        ->schema([
                            ToggleButtons::make('is_paid')
                                ->label('Apakah sudah membayar')
                                ->boolean()
                                ->grouped()
                                ->icons([
                                    true => 'heroicon-o-pencil',
                                    false => 'heroicon-o-clock'
                                ])
                                ->required(),

                            FileUpload::make('proof')
                                ->image()
                                ->required(),

                            DatePicker::make('started_at')
                                ->required()

                        ])
                ])

                    ->columnSpan('full')
                    ->columns(1)
                    ->skippable()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                ImageColumn::make('ticket.thumbnail')
                    ->label('Image'),

                TextColumn::make('name')
                    ->searchable(),

                TextColumn::make('ticket.name')
                    ->searchable(),

                TextColumn::make('total_amount')
                    ->money('IDR'),

                TextColumn::make('booking_trx_id')
                    ->searchable(),

                // TextColumn::make('is_paid')
                //     ->badge()
                //     ->color(fn(string $state): string => match ($state) {
                //         0 => 'warning',
                //         1 => 'success',
                //         // 'failed' => 'danger'
                //     })

            ])
            ->filters([
                //
                SelectFilter::make('ticket_id')
                    ->label('ticket')
                    ->relationship('ticket', 'name')
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListBookingTransactions::route('/'),
            'create' => Pages\CreateBookingTransaction::route('/create'),
            'edit' => Pages\EditBookingTransaction::route('/{record}/edit'),
        ];
    }
}