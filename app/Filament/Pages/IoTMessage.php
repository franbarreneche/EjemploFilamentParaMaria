<?php

namespace App\Filament\Pages;

use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Pages\Page;

class IoTMessage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.io-t-message';

    // use InteractsWithForms;
    // use InteractsWithActions;

    // public ?array $data = [];

    // public function mount()
    // {
    //     $this->form->fill();
    // }

    // public function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             Actions::make([
    //                 Action::make('submit')->label('Enviar')->button()->action(fn () => $this->submit()),
    //             ]),
    //             TextInput::make('name')->label('Nombre')->integer()->required(),
    //             TextInput::make('surname')->label('Apellido')->required(),
    //         ])
    //         ->statePath('data');
    // }

    // public function submit(): void
    // {
    //     $data = $this->form->getState();

    //     dd($data);
    // }
}
