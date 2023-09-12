@section('title', 'Compare')
<div class="clearfix row">
   
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
              
                <div class="col-md-12">
                    <div class="row">
                        
                        <div class="card-deck" style="padding: 30px;">
                            @for($i = 1; $i < 4; $i++)
                            <div class="card">
                                <img class="card-img-top" src="https://mmc.tirto.id/image/otf/880x495/2019/04/25/avengers-endgame-marvel-studios_ratio-16x9.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: left; font-size: 18px;">Sari Roti Roti Tawar Choco Chip</h5>
                                    <h5 class="card-title" style="text-align: left; font-size: 12px;">PT Kartika Mandiri Sejahtera</h5>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center; font-size: 30px;">Rp, 10.000,00</h5>
                                    <!-- <p class="card-text">This is a wider card with.</p> -->
                                </div>
                                
                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">Stok 20 Pcs</p>
                                    <!-- <h5 class="card-title" style="text-align: center;">20/Pcs</h5> -->
                                    
                                </div>
                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">Tangerang Selatan</p>
                                    <!-- <h5 class="card-title" style="text-align: center;">20/Pcs</h5> -->
                                </div>

                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">Terjual 150 Pcs</p>
                                    <!-- <h5 class="card-title" style="text-align: center;">20/Pcs</h5> -->
                                    
                                </div>
                            
                                <div class="card-footer">
                                    <small class="text-muted">
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <div class="btn btn-info">
                                                    <i class="fa fa-shopping-cart"></i> &nbsp; <b> BELI</b>
                                                </div>
                                            </div>
                                            <div class="col-md-4"></div>
                                        </div>
                                    </small>
                                </div>
                            </div>
                            @endfor

                            <div class="card">
                                <img class="card-img-top">
                                <div class="card-body">
                                    <div class="container h-100">
                                        <div class="row align-items-center h-100">
                                            <div class="col-6 mx-auto">
                                                <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-4">
                                                        <i style="font-size: 75px; align:center; color: lightblue;" class="fa fa-plus fa-8x"></i>
                                                    </div>
                                                    <div class="col-md-4"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>


                            <div class="card">
                                <div class="card-body">
                                    <input type="text" class="form-control" placeholder="Cari Produk...">
                                </div>
                            </div>
                        </div>
                        
<!--                         
                            <a href="javascript:void(0)" wire:click="$emit('modal_detail_product',$item->id)">
                                <div class="card" style="width: 16rem; border: 1px solid lightgrey; margin: 4px;">
                                    <div style="height: 180px; overflow: hidden;">
                                        <img class="card-img-top" src=" asset('assets/images/'.$item->image_source) " alt="Card image cap">
                                    </div>
                                
                                    <div class="card-body">
                                        <a href=" route('user-supplier.produk',$item->id_supplier) " class="card-text"> nama_supplier </a>
                                        <h6 class="card-title"> $item->nama_product </h6>
                                        
                                        <div>
                                            <span style="float: left;">
                                                <a href="route('catalog.detail',$item->id)"><b>Rp,  $item->price </b>/ $item->uom->name </a>
                                            </span>
                                            <span style="float: right;">
                                                <b>Stok :  $item->qty </b>
                                            </span>
                                        </div>
                                        <br><br><br>
                                    
                                        <a style="position: absolute; bottom: 10px; left: 10px;" wire:click="$emit('modal_detail_product',$item->id)" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" wire:model="qty" />
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="javascript:void(0)" wire:click="addproductpo($item->id, $item->id_supplier)" class="btn btn-info"><i class="fa fa-save"></i></a>
                                                    <a href="javascript:void(0)" wire:click="$set('insert',0)" class="btn btn-danger"><i class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </a>
                        

                        
                            <a href="javascript:void(0)" wire:click="$emit('modal_detail_product',$item->id)">
                                <div class="card" style="width: 16rem; border: 1px solid lightgrey; margin: 4px;">
                                    <div style="height: 180px; overflow: hidden;">
                                        <img class="card-img-top" src=" asset('assets/images/'.$item->image_source) " alt="Card image cap">
                                    </div>
                                
                                    <div class="card-body">
                                        <a href=" route('user-supplier.produk',$item->id_supplier) " class="card-text"> nama_supplier </a>
                                        <h6 class="card-title"> $item->nama_product </h6>
                                        
                                        <div>
                                            <span style="float: left;">
                                                <a href="route('catalog.detail',$item->id)"><b>Rp,  $item->price </b>/ $item->uom->name </a>
                                            </span>
                                            <span style="float: right;">
                                                <b>Stok :  $item->qty </b>
                                            </span>
                                        </div>
                                        <br><br><br>
                                    
                                        <a style="position: absolute; bottom: 10px; left: 10px;" wire:click="$emit('modal_detail_product',$item->id)" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" wire:model="qty" />
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="javascript:void(0)" wire:click="addproductpo($item->id, $item->id_supplier)" class="btn btn-info"><i class="fa fa-save"></i></a>
                                                    <a href="javascript:void(0)" wire:click="$set('insert',0)" class="btn btn-danger"><i class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </a> -->
                        
                    </div>
                    <!-- <div class="header row">
                        <div class="col-md-4">
                            <div class="row">
                                <label for="">Cari</label>
                                <input type="text" class="form-control" wire:model="keyword" placeholder="Pencarian Barcode, Nama, Supplier, Lokasi" />
                            </div>
                        </div>
                        
                    </div>
                    <div class="body pt-0">

                        @if(!$card)

                        <div class="table-responsive">
                            <table class="table table-hover m-b-0 c_list table-bordered">
                                <thead style="background: #eee;">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Barcode</th>
                                        <th class="text-center">Nama Produk</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-center">Stok</th>
                                        <th class="text-center">Nama Supplier</th>
                                        <th class="text-center">Lokasi Supplier</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $k => $item)
                                    <tr>
                                        <td>{{$k+1}}</td>
                                        <td>{{ $item->barcode }}</td>
                                        <td>{{ $item->nama_product }}</td>
                                        <td><b>Rp, {{ format_idr($item->price) }}</b>/{{ @strtolower($item->uom->name) }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ \App\Models\Supplier::where('id', $item->id_supplier)->first()->nama_supplier }}</td>
                                        <td>{{ \App\Models\Supplier::where('id', $item->id_supplier)->first()->provinsi }}</td>
                                        <td>
                                            
                                            <a href="javascript:void(0)" wire:click="$emit('modal_detail_product',{{$item->id}})" wire:click="" class="btn btn-primary"><b><i class="fa fa-shopping-cart"></i></b></a>
                                        </td>
                                    
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        @endif

                        @if($card)
                        <div class="row" id="card-view-catalog">
                            @foreach($data as $k => $item)
                                <a href="javascript:void(0)" wire:click="$emit('modal_detail_product',{{$item->id}})">
                                    <div class="card" style="width: 16rem; border: 1px solid lightgrey; margin: 4px;">
                                        <div style="height: 180px; overflow: hidden;">
                                            <img class="card-img-top" src="{{ asset('assets/images/'.$item->image_source) }}" alt="Card image cap">
                                        </div>
                                    
                                        <div class="card-body">
                                            <a href="{{ route('user-supplier.produk',$item->id_supplier) }}" class="card-text">{{ @\App\Models\Supplier::where('id',$item->id_supplier)->first()->nama_supplier }}</a>
                                            <h6 class="card-title">{{ $item->nama_product }}</h6>
                                            
                                            <div>
                                                <span style="float: left;">
                                                    <a href="{{route('catalog.detail',$item->id)}}"><b>Rp, {{ format_idr($item->price) }}</b>/{{ @strtolower($item->uom->name) }}</a>
                                                </span>
                                                <span style="float: right;">
                                                    <b>Stok : {{ $item->qty }}</b>
                                                </span>
                                            </div>
                                            <br><br><br>
                                            @if($insert == 0)
                                           
                                            <a style="position: absolute; bottom: 10px; left: 10px;" wire:click="$emit('modal_detail_product',{{$item->id}})" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a>
                                            @endif
                                            

                                            @if($insert == $item->id)
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" wire:model="qty" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="javascript:void(0)" wire:click="addproductpo({{$item->id}}, {{$item->id_supplier}})" class="btn btn-info"><i class="fa fa-save"></i></a>
                                                        <a href="javascript:void(0)" wire:click="$set('insert',0)" class="btn btn-danger"><i class="fa fa-close"></i></a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        @endif
                        

                        <br />
                        {{$data->links()}}
                    </div> -->
                </div>
            </div>
            
            
        </div>
    </div>



    <div wire:ignore.self class="modal fade" id="modal_detail_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                
                <div class="row" >
                    
                    <div class="col-md-12">
                        
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-eye"></i> Detail product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true close-btn">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="card-img-top" style="width: 90%;" src="{{ asset('assets/images/'.$image_detail) }}" alt="Card image cap">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-">
                                                <h5 class="card-title"><b>{{ $title_detail }}</b></h5>
                                                <h3 class="font-color: red;"><b>Rp,{{ format_idr($price_detail) }}</b></h3>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#tab_desc">{{ __('Deskripsi') }} </a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_disc">{{ __('Diskon') }} </a></li>
                                            </ul>
                                            <div class="tab-content px-0">
                                                
                                                <div class="tab-pane active show" id="tab_desc" style="width: 450px; overflow-y: scroll; overflow-x: hidden; scrollbar-width: none;">
                                                    <div class="table-responsive">
                                                        <p>
                                                            {{ $deskripsi_detail }}  
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_disc">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped m-b-0 c_list">
                                                            <thead>
                                                                <tr>
                                                                    <th>Jumlah (>)</th>   
                                                                    <th>Diskon (%)</th>                              
                                                                    <th>Potongan (Rp)</th>
                                                                    <th>Harga Jual (Rp)</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               
                                                                @foreach(@App\Models\SettingHarga::where('product_id',$this->selected_id)->get() as $k => $item)
                                                                    <tr>
                                                                        <td>{{$item->qty}}</td>
                                                                        <td>{{ $item->disc }}</td>
                                                                        <td>
                                                                            Rp. {{ @format_idr($item->disc_harga) }}
                                                                            
                                                                        </td>
                                                                        <td>
                                                                            Rp. {{ @format_idr($price_detail - $item->disc_harga) }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>

                            <div class="modal-header">
                                <form wire:submit.prevent="beliproduct" style="width: 960px;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <b>Rp, <span style="color: red;">{{ format_idr($price_akhir) }}</span> / <span style="font-size: 9px;">{{ $uom }}</span></b>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <b><h3>Rp, <span style="color: red;">{{ format_idr($price_akhir * $qty) }}</span></h3></b>
                                                </div>
                                            </div>
                                        </div>
                                        @if (session()->has('message'))
                                        <div class="col-md-6">             
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>{{ session('message') }}!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>                               
                                        </div>
                                        @else
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <span><b>Stok {{ $stock_detail }}</b></span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="number" class="form-control" wire:model.debounce.1000ms="qty" min="0" max="{{ $stock_detail }}"/>
                                                    <input type="hidden" class="form-control" wire:model="selected_id" />
                                                    <input type="hidden" class="form-control" wire:model="supplier_detail" />
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <!-- <a href="javascript:void(0)" wire:click="addproductpo($item->id, $item->id_supplier)" class="btn btn-info"><h6><b>BELI</b></h6></a> -->
                                            <button wire:target="beliproduct" type="submit" class="btn btn-info"><h6><b>BELI</b></h6></button>
                                        </div>
                                        @endif
                                        
                                    </div>
                                </form>
                            </div>

                            <!-- <div class="modal-footer">
                                <form wire:submit.prevent="beliproduct">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <b>Rp, <span style="color: red;">{{ format_idr($price_akhir) }}</span> / <span style="font-size: 9px;">{{ $uom }}</span></b>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <b><h4>Rp, <span style="color: red;">{{ format_idr($price_akhir * $qty) }}</span></h4></b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <input type="number" class="form-control" wire:model.debounce.1000ms="qty" min="0" max="{{ $stock_detail }}"/>
                                                    <input type="hidden" class="form-control" wire:model="selected_id" />
                                                    <input type="hidden" class="form-control" wire:model="supplier_detail" />
                                                </div>
                                                <div class="col-md-4">
                                                    <span><b>Stok {{ $stock_detail }}</b></span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <a href="javascript:void(0)" wire:click="addproductpo($item->id, $item->id_supplier)" class="btn btn-info"><h6><b>BELI</b></h6></a>
                                            <button wire:target="beliproduct" type="submit" class="btn btn-info"><h6><b>BELI</b></h6></button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        
                    </div>
                </div>

            </div>
        </div>
    </div>



</div>

<div class="modal fade" id="modal_upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <livewire:product-supplier.upload />
        </div>
    </div>
</div>


@push('after-scripts') 
<script>
    Livewire.on('modal_detail_product',(data)=>{
        $("#modal_detail_product").modal('show');
    });
    
    // untuk menangkap Event emit "refresh-page" yang dibuat di Component Edit.php
    // jika ada event refresh-page maka modal kita hide
    Livewire.on('refresh-page',()=>{
        $(".modal").modal("hide");
    });
</script>
@endpush

