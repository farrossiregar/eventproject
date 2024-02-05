<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Event;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule; 
use Illuminate\Support\Facades\Hash;
use Auth;

class Insert extends Component
{
    use WithFileUploads;
    public $event_name, $event_desc, $event_cat;

    public function render()
    {
        $data = new Event();
        $data->event_name = $this->event_name;
        $data->event_desc = $this->event_desc;
        $data->save();


        return view('livewire.event.insert');
    }

    // public function save()
    // {
    //     // $this->validate([
    //     //     'barcode' => 'required',
    //     //     'desc_product' => 'required',
    //     //     'nama_product' => 'required'
    //     // ]);

    //     dd('insert');
    //     $data = new Event();
    //     $data->event_name = $this->event_name;
    //     $data->event_desc = $this->event_desc;
    //     // $data->barcode = $this->barcode;
    //     // $data->desc_product = $this->desc_product;
    //     // $data->nama_product = $this->nama_product;
    //     // $data->qty = $this->price;
    //     // $data->id_supplier = Auth::user()->id;
    //     // $data->image_source = $this->file;

        

    //     // if($this->file!=""){
    //         // $image = strtolower(str_replace(" ", "", $this->nama_product)).'.'.$this->file->extension();
    //         $image = strtolower(str_replace(" ", "-", $this->file->getClientOriginalName()));
    //         // $this->file->storePubliclyAs('public/assets/images/',$image);

    //         // $this->file->store('images/product', ['disk' => 'product']);
    //         $this->file->storeAs('images/product', $image, 'product');

    //         // $this->file($image)->storeAs('images', $image, 'product');

    //         // Storage::disk('assets_public')->put('filename', $image);

    //         // $path = base_path() . '/public/assets/images/product';
    //         // $request->file('image')->move($path, $image);
            
    //         // $data->image_source = $image;
    //     // }

    //     $data->save();

    //     session()->flash('message-success',"Event berhasil dibuat!!!");

    //     // return redirect()->route('event.index',$data->id);
    //     return redirect()->route('event.index');
    // }




    public function create_event()
    {
        

        session()->flash('message-success',"Product berhasil di simpan, selanjutnya kamu harus tentukan harga jual produk");

        // return redirect()->route('event.index');

        return redirect()->to('event.index');
    }
}
