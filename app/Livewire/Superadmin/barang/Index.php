<?php

namespace App\Livewire\Superadmin\Barang;

use Livewire\Component;
use App\Models\barang;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $paginate='10';
    public $search='';

    public $nama_barang, $barang_id;

    public function render()
    {
        $data = array(
            'title' => 'Data Obat', 
            'barang' => Barang::where('nama_barang','like','%'.$this->search.'%')
            ->orderBy('nama_barang','asc')->paginate($this->paginate), 
        );
        return view('livewire.superadmin.barang.index', $data);
    }

    public function create(){
        $this->resetValidation();
        $this->reset([
            'nama_barang',
        ]);
    }

    public function store(){
        $this->validate([
            'nama_barang'                       => 'required|unique:barangs,nama_barang',
        ],
        [
            'nama_barang.required'              => 'Nama Barang Tidak Boleh Kosong',
            'nama_barang.unique'                => 'Nama Barang Sudah Terdaftar',
        ]);

        $barang = new barang;
        $barang->nama_barang= $this->nama_barang;
        $barang->save();

        $this->dispatch('closeCreateModal');
    }

    public function edit($id){
        $this->resetValidation();
        $barang = barang::findOrFail($id);
        $this->nama_barang                    = $barang->nama_barang;
        $this->barang_id                      = $barang->id;
    }

    public function update($id){
        $barang = barang::findOrFail($id);

        $this->validate([
            'nama_barang'                       => 'required|unique:barangs,nama_barang,'.$id,
        ],
        [
            'nama_barang.required'              => 'Nama Barang Tidak Boleh Kosong',
            'nama_barang.unique'                => 'Nama Barang Sudah Terdaftar',
        ]);

        $barang->nama_barang         = $this->nama_barang;
        $barang->save();

        $this->dispatch('closeEditModal');
    }

    public function confirm($id){
        $barang                   = barang::findOrFail($id);
        $this->nama_barang        = $barang->nama_barang;;
        $this->barang_id          = $barang->id;
    }

    public function destroy($id){
        $barang           = barang::findOrFail($id);
        $barang->delete();
        $this->dispatch('closeDeleteModal');
    }
}