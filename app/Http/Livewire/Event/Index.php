<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Event;
use Auth;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $keyword;
    public function render()
    {
        if(!Auth::user()) {
            // session()->flash('message-error','Access denied, you have no permission please contact your administrator.');
            $this->redirect('/');
        }

        $user = Auth::user();
        $data = Event::where('user_id', $user->id)->orderBy('id', 'desc');

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


    // public function insert(){
    //     // $insert_event = new Event();
    //     // $insert_event->user_id = Auth::user()->id;
    //     // $insert_event->save();

    //     return redirect()->route('event.add');
    // }

    public function insert()
    {
        $data = new Event();
        // $data->no_po = "PO/".date('ymd')."/".str_pad((PurchaseOrder::count()+1),4, '0', STR_PAD_LEFT);
        // $data->event_name = $this->event_name;
        // $data->event_desc = $this->event_desc;
        
        $data->status = 0;
        $data->save();

        // \LogActivity::add('Purchase Order Insert');

        return redirect()->route('event.detail',$data->id);
    }
}
