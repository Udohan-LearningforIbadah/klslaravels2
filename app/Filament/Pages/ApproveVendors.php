<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use BackedEnum;

class ApproveVendors extends Page
{
    protected string $view = 'filament.pages.approve-vendors';
    protected static ?string $navigationLabel = 'Vendors';
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-user';

    public static function authorization(): array
    {
        return [
            Roles\Admin::allow(),
        ];
    }


    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\BooleanColumn::make('is_vendor'),
            ])
            ->filters([
                Tables\Filters\Filter::make('pending')
                    ->query(fn ($query) => $query->where('is_vendor', false)),
            ])
            ->actions([
                Tables\Actions\Action::make('approve')
                    ->action(function (Vendor $record) {
                        $record->is_vendor = true;
                        $record->save();
                        $this->notify('success', 'Vendor approved.');
                    })
                    ->requiresConfirmation(),
            ]);
    }

    public function mount(): void
    {
        // Any initial data or logic
    }
}
