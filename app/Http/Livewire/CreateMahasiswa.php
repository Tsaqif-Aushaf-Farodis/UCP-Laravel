<?php

namespace App\Http\Livewire;

use App\Models\Mahasiswa;
use Livewire\Component;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Http\Request;

class CreateMahasiswa extends Component
{
    public $selectedid;
    public $nama;
    public $nim;
    public $alamat;

    public function render()
    {
        return view('livewire.create-mahasiswa', ['datamahasiswa'=>Mahasiswa::all()]);
    }

    public function createMahasiswa(){
        Mahasiswa::create([
            'nama'   => $this->nama,
            'nim'    => $this-> nim,
            'alamat' => $this->alamat
        ]);

        $this->nama   = "";
        $this->nim    = "";
        $this->alamat = "";

        redirect('/dashboard');
    }

    public function deleteMahasiswa($id){
        Mahasiswa::where('id', $id)->delete();
        return redirect('/dashboard');
    }

    public function editMahasiswa($id){
        $mahasiswa = Mahasiswa::find($id);

        $this->selectedid = $id;
        $this->nama       = $mahasiswa->nama;
        $this->nim        = $mahasiswa->nim;
        $this->alamat     = $mahasiswa->alamat;
    }

    public function store(){
        $this->validate([
            'nama'   => 'required',
            'nim'    => 'required',
            'alamat' => 'required'
        ]);

        Mahasiswa::updateOrCreate(['id' => $this->selectedid], [
            'nama'   => $this->nama,
            'nim'    => $this->nim,
            'alamat' => $this->alamat
        ]);

        $this->selectedid = "";
        $this->nama       = "";
        $this->nim        = "";
        $this->alamat     = "";

        return redirect('/dashboard');
    }
}