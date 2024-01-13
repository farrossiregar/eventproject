<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use Livewire\WithPagination;
use Auth;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $keyword;
    public function render()
    {
        $user = Auth::user();
        $data = [];

        // if($this->keyword){
        //     $data->where('nama_product','LIKE',"%{$this->keyword}%")
        //         ->orWhere('barcode','LIKE',"%{$this->keyword}%");
        // }

        return view('livewire.event.index')->with(['data'=>$data->get()]);
    }


    public function delete($id){
        $delete = SupplierProduct::where('id', $id)->first();
        $delete->delete();
    }
}
