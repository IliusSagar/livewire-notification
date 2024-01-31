<?php

namespace App\Livewire;

use Livewire\Component;

class NotificationDemo extends Component
{
    public function render()
    {
        return view('livewire.notification-demo')->extends('components.layouts.admin');
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('alert',['type' => 'success',  'message' => 'User Created Successfully!']);
    }

    public function alertError()
    {
        $this->dispatchBrowserEvent('alert',['type' => 'error',  'message' => 'Something is Wrong!']);
    }

    public function alertInfo()
    {
        $this->dispatchBrowserEvent('alert',['type' => 'info',  'message' => 'Going Well!']);
    }

}
