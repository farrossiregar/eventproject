<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Event;

use Livewire\WithFileUploads;
use Illuminate\Validation\Rule; 
use Illuminate\Support\Facades\Hash;

use Auth;

class Detail extends Component
{
    use WithFileUploads;

    public $data, $event_name, $event_cat, $event_desc, $event_date_start, $event_date_end, $event_link, $event_loc, $event_price;
    

    // protected $listeners = ['reload-page'=>'$refresh'];
    public function render()
    {
        return view('livewire.event.detail');
    }

    public function mount(Event $data)
    {
        $this->data = $data;
        
        // $this->penjualan = PurchaseOrderDetail::where('product_id',$this->data->id)->get();
        // $this->setting_harga = @SettingHarga::where('product_id',$this->data->id)->get();
        // // dd($this->setting_harga);
        // // dd($this->penjualan);
        // // if($this->data->ppn==0) {
        // //     $this->data->ppn = @$this->data->harga_jual * 0.11;
        // //     $this->data->save();
        // // }
        // // $this->pembelian = ProductStock::where('product_id',$this->data->id)->get();
        // $this->is_ppn = $this->data->is_ppn;
        // $this->price = $this->data->price;
        // $this->desc_product = $this->data->desc_product;
        // // $this->harga_jual = $this->data->harga_jual;
        // $this->diskon = $this->disc;

        // if($this->qty){
        //     $this->disc = ceil(($this->price*$this->disc_p)/100);
        // }

        // if($this->is_ppn==1 and $this->harga){
        //     $this->ppn = $this->harga * 0.11;
        // }
        // // Harga Produksi
        // if($this->harga>0) $this->harga_produksi = $this->harga + $this->ppn;
        // // Margin
        // if($this->harga_jual>0 && $this->harga_produksi>0) $this->margin = $this->harga_jual  - $this->harga_produksi; 
        // if($this->diskon>0 and $this->margin>0) $this->margin = $this->margin - $this->diskon;
    }

    

    public function submit()
    {
        // dd('test insert');
        // $this->save();
        // $this->validate([
        //     'price' => 'required'
        // ]);

        $data = Event::where('id', $id)->first();
        $data->no_po = "PO/".date('ymd')."/".str_pad((PurchaseOrder::count()+1),4, '0', STR_PAD_LEFT);
        $this->data->event_name = $this->event_name;
        $this->data->event_desc = $this->event_desc;
        
        $this->data->status = 1;
        $this->data->save();

        // $this->emit('message-success','Event berhasil dibuat.');
        session()->flash('message-success',"Event berhasil dibuat");

        return redirect()->route('event.index');
    }

    public function updateSettingHarga()
    {
        $data = new SettingHarga();
        
        $data->supplier_id  = $this->data->id_supplier;
        $data->product_id   = $this->data->id;
        $data->qty          = $this->qty;
        $data->disc         = $this->disc_p;
        $data->disc_harga   = $this->disc;
        $data->save();

        $this->reset(['qty','disc_p','disc']);
        $this->insert = false;

        $this->emit('message-success','Data berhasil diupdate.');
        return redirect()->to('product-supplier/detail/'.$this->data->id);
    }

    public function delete($id)
    {
        SettingHarga::find($id)->delete();
        $this->emit('message-success','Data berhasil dihapus.');
    }
}