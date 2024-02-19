<?php

namespace App\Http\Livewire\EventTransaksi;

use Livewire\Component;
use App\Models\Transaksi;
use App\Models\TransaksiItem;

class Items extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.eventtransaksi.items');
    }

    public function mount(Transaksi $data)
    {
        $this->data = $data;
    }
}
