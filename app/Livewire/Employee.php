<?php

namespace App\Livewire;

use App\Models\Employee as ModelsEmployee;
use Doctrine\Inflector\Rules\English\Rules;
use Livewire\Component;

class Employee extends Component
{
    public $nama;
    public $email;
    public $alamat;

    public function store()
    {
        $rules = [
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ];
        $pesan = [
            'nama.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak sesuai',
            'alamat.required' => 'Alamat harus diisi',
        ];
        $validated = $this->validate($rules, $pesan);
        ModelsEmployee::create($validated);
        session()->flash('message', 'Data berhasil dimasukkan');
    }
    public function render()
    {
        return view('livewire.employee');
    }
}
