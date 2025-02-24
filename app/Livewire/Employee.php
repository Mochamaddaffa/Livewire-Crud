<?php

namespace App\Livewire;

use Livewire\Component;

class Employee extends Component
{
    public $nama = 'Muhammad';
    public $email = 'muhammad@gmail.com';
    public $alamat = 'Yogyakarta';
    public function render()
    {
        return view('livewire.employee');
    }
}
