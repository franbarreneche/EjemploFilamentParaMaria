<?php

namespace App\Livewire;

use App\Actions\SendIoTMessageAction;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class IoTMessageForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    // public function __construct(private readonly SendIoTMessageAction $sendIoTMessageAction)
    // {
    // }

    public function mount()
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nombre')->integer()->required(),
                TextInput::make('surname')->label('Apellido')->integer()->required(),
            ])
            ->statePath('data');
    }

    public function submit(SendIoTMessageAction $sendIoTMessageAction): void
    {
        $data = $this->form->getState();

        $sendIoTMessageAction->execute($data);
    }

    public function render(): View
    {
        return view('livewire.io-t-message-form');
    }
}
