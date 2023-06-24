@section('title', 'Purchase Order')
@section('sub-title', "#".$data->no_po)
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="form-group col-md-2">
                        <small>No Purchase Order</small> 
                        @if(Auth::user()->user_access_id == 1 || Auth::user()->user_access_id == 7)
                            @if($data->status==0)
                                <span class="badge badge-warning mr-0">Draft</span>
                            @endif
                            @if($data->status==1)
                                <span class="badge badge-success mr-0">Submitted</span>
                            @endif<br />
                            @if($data->status==2)
                                <span class="badge badge-warning mr-0">Waiting for Payment</span>
                            @endif<br />
                            @if($data->status==3)
                                <span class="badge badge-info mr-0">Payment Sent</span>
                            @endif<br />
                            @if($data->status==4)
                                <span class="badge badge-success mr-0">Payment Confirmed</span>
                            @endif
                        @else
                            @if($data->status==0)
                                <span class="badge badge-warning mr-0">Draft</span>
                            @endif

                            @if($data->status==1)
                                <span class="badge badge-warning mr-0">Waiting for Invoice</span>
                            @endif<br />

                            @if($data->status==2)
                                <span class="badge badge-warning mr-0">Invoice Sent</span>
                            @endif<br />

                            @if($data->status==3)
                                <span class="badge badge-warning mr-0">Waiting for Payment</span>
                            @endif<br />

                            @if($data->status==4)
                                <span class="badge badge-success mr-0">Paid</span>
                            @endif<br />
                        @endif
                        <br /><label>{{$data->no_po}}</label>
                        <hr class="py-0 my-0" />
                    </div>
                    <div class="form-group col-md-3">   
                        @if($data->status==0)
                            <small>Supplier</small> 
                            @if(!$data->id_supplier)
                                <select class="form-control" wire:model="id_supplier">
                                    <option value=""> -- Pilih -- </option>
                                    @foreach($suppliers as $item)
                                        <option value="{{$item->id}}">{{$item->nama_supplier}}</option>
                                    @endforeach
                                </select>
                                @error('id_supplier') <span class="text-danger">{{ $message }}</span> @enderror
                            @else
                                <!-- if(\App\Models\PurchaseOrderDetail::where('id_po', $data->id)->first()) -->
                                    <!-- <label>{{isset($data->supplier->nama_supplier) ? $data->supplier->nama_supplier : ''}}</label>
                                    <hr class="py-0 my-0" /> -->
                                <!-- else    -->
                                    <select class="form-control" wire:model="id_supplier">
                                        <option value=""> -- Pilih -- </option>
                                        @foreach($suppliers as $item)
                                            <option value="{{$item->id}}">{{$item->nama_supplier}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_supplier') <span class="text-danger">{{ $message }}</span> @enderror
                                <!-- endif -->
                            @endif
                        @else
                            <small>Supplier</small><br />
                            <label>{{isset($data->supplier->nama_supplier) ? $data->supplier->nama_supplier : ''}}</label>
                            <hr class="py-0 my-0" />
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        @if($data->status==0)
                            <small>Alamat Pengiriman</small>
                            @if(!$data->id_supplier)
                                <input type="text" class="form-control" wire:model="alamat_penagihan" />
                                @error('alamat_penagihan') <span class="text-danger">{{ $message }}</span> @enderror
                            @else
                                <small>Alamat Pengiriman</small><br />
                                <label>{{$alamat_penagihan}}</label>
                                <hr class="py-0 my-0" />
                            @endif
                        @else
                            <small>Alamat Pengiriman</small><br />
                            <label>{{$data->alamat_penagihan}}</label>
                            <hr class="py-0 my-0" />
                        @endif
                    </div>
                    <div class="form-group col-md-2">
                        @if($data->status==0)
                            <small>Purchase Date</small>
                            <!-- <input type="text" class="form-control" value="<?php echo date('d/m/Y'); ?>"/> -->
                            <input type="date" class="form-control" wire:model="purchase_order_date" />
                            @error('purchase_order_date') <span class="text-danger">{{ $message }}</span> @enderror
                        @else
                            <small>Purchase Date</small><br />
                            <label>{{$data->purchase_order_date ? date('d/M/Y',strtotime($data->purchase_order_date)) : '-'}}</label>
                            <hr class="py-0 my-0" />
                        @endif
                    </div>
                    <!-- <div class="form-group col-md-6">
                        @if($data->status==0)
                            <label>Delivery Order Number</label>
                            <input type="text" class="form-control" wire:model="delivery_order_number" />
                            @error('delivery_order_number') <span class="text-danger">{{ $message }}</span> @enderror
                        @else
                            <small>Delivery Order Number</small><br />
                            <label>{{$data->delivery_order_number}}</label>
                            <hr class="py-0 my-0" />
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        @if($data->status==0)
                            <label>Delivery Order Date</label>
                            <input type="date" class="form-control" wire:model="delivery_order_date" />
                            @error('delivery_order_date') <span class="text-danger">{{ $message }}</span> @enderror
                        @else
                            <small>Delivery Order Date</small><br />
                            <label>{{$data->delivery_order_date ? date('d/M/Y',strtotime($data->delivery_order_date)) : '-'}}</label>
                            <hr class="py-0 my-0" />
                        @endif
                    </div> -->
                </div>
                <!-- <h6>Produk</h6> -->
                <hr class="mt-0 pt-0" />
                <div class="table-responsive">
                    <table class="table c_list table-hover table-bordered">
                        <thead>
                            <tr style="background: #eee;">
                                <th>No</th>
                                <th>Barcode</th>
                                <th>Produk</th>
                                <th class="text-center">UOM</th>
                                <th class="text-center">QTY</th>
                                <th class="text-center">Harga Awal</th>
                                <th class="text-center">Diskon (%)</th>
                                <th class="text-center">Diskon (Rp)</th>
                                <th class="text-right">Harga Akhir</th>
                                <th class="text-right"></th>
                                @if($data->status==0)
                                <th></th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @if($data->status==0)
                                <tr>
                                    <td></td>
                                    <td colspan="2">
                                        <div wire:ignore>
                                            <select class="form-control select_product_po">
                                                <option value=""> -- Barcode / Produk -- </option>
                                            </select>
                                        </div>
                                        @error('product_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </td>
                                    <td>
                                        {{ $product_uom_id }}
                                        <!-- <input type="text" wire:model="product_uom_id"> -->
                                        <!-- <select class="form-control" wire:model="product_uom_id">
                                            <option value=""> --- UOM --- </option>
                                            @foreach(\App\Models\ProductUom::get() as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach 
                                        </select> -->
                                        @error('product_uom_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </td>
                                    <td>
                                        <input type="number" class="form-control text-center" wire:model="qty" min="0" />
                                        @error('qty') <span class="text-danger">{{ $message }}</span> @enderror
                                    </td>
                                    <td>
                                        {{ format_idr($price) }}
                                        @error('qty') <span class="text-danger">{{ $message }}</span> @enderror
                                    </td>
                                    <td>
                                        <b>{{ $disc_p }}%</b>
                                        <!-- <input type="number" class="form-control text-right" wire:model="disc_p" min="0" /> -->
                                        @error('diskon') <span class="text-danger">{{ $message }}</span> @enderror
                                    </td>
                                    <td>
                                        <b>Rp. {{ format_idr($disc) }}</b>
                                        <!-- <input type="number" class="form-control text-right" wire:model="disc" min="0" /> -->
                                        @error('diskon') <span class="text-danger">{{ $message }}</span> @enderror
                                    </td>
                                    <td>
                                        Rp. {{ format_idr($price_akhir) }}
                                        <!-- <input type="number" class="form-control text-right" min="0" wire:model="price" /> -->
                                        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                                    </td>
                                    <td>{{(($price_akhir && $qty) ? format_idr($price_akhir*$qty) : '')}}</td>
                                    <td>
                                        <span wire:loading wire:target="addProduct">
                                            <i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>
                                            <span class="sr-only">{{ __('Loading...') }}</span>
                                        </span>
                                        <a href="javascript:void(0)" wire:loading.remove wire:target="addProduct" class="btn btn-info btn-sm" wire:click="addProduct"><i class="fa fa-plus"></i></a>
                                    </td>
                                </tr>
                            @endif
                            @php($total=0)
                            @php($total_qty=0)
                            @php($sub_total=0)
                            @foreach($data->details as $k => $item)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{isset($item->product->barcode) ? $item->product->barcode : '-'}}</td>
                                    <td>{{isset($item->product->nama_product) ? $item->product->nama_product : '-'}}</td>
                                    <td class="text-center">
                                        @if($data->status==0)
                                            @livewire('purchase-order.editable',['field'=>'product_uom_id','data'=>(isset($item->uom->name) ? $item->uom->name : ''),'id'=>$item->id],key('product_uom_id'.$item->id))
                                        @else
                                            {{isset($item->uom->name) ? $item->uom->name : '-'}}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($data->status==0)
                                            @livewire('purchase-order.editable',['field'=>'qty','data'=>$item->qty,'id'=>$item->id],key('qty'.$item->id))
                                        @else
                                            {{$item->qty}}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        Rp. {{format_idr($item->price)}}
                                    </td>
                                    <td class="text-center">
                                        @if($data->status==0)
                                            @livewire('purchase-order.editable',['field'=>'disc','data'=>$item->disc,'id'=>$item->id],key('disc'.$item->id))
                                        @else
                                            {{$item->disc}}%
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        Rp. {{format_idr($item->disc_harga)}}
                                    </td>
                                    <td class="text-right">
                                        <!-- {{format_idr($item->price*$item->qty)}} -->
                                        Rp. {{format_idr($item->total_price)}}
                                    </td>
                                    <td class="text-center">
                                        @if($data->status==0)
                                            <a href="javascript:void(0)" class="text-danger" wire:click="deleteProduct({{$item->id}})"><i class="fa fa-close"></i></a>
                                        @endif
                                    </td>
                                </tr>
                                @php($total += $item->price)
                                @php($total_qty += $item->qty)
                                @php($sub_total += $item->qty * ($item->price-$item->disc))
                            @endforeach
                        </tbody>
                        @if($data->details->count()==0)
                            <tr>
                                <td class="text-center" colspan="7"><i>Data kosong</i></td>
                            </tr>
                        @endif
                        <tfoot style="background: #eee;">
                            <tr>
                                <th colspan="8" class="text-right">Sub Total</th>
                                <th class="text-right">{{format_idr($sub_total)}}</th>
                                <th></th>
                            </tr>
                            @if(Auth::user()->user_access_id == 7 && $data->status == 1)
                            <tr>
                                <th colspan="8" class="text-right">Biaya Pengiriman</th>
                                <th class="text-right">
                                    @if($data->status==1)
                                        <input type="text" class="form-control text-right" wire:model="biaya_pengiriman" /> 
                                    @else
                                        {{format_idr($data->biaya_pengiriman)}}
                                    @endif
                                </th>
                                <th></th>
                            </tr>
                            @endif
                            <!-- <tr>
                                <th colspan="7" class="text-right">Pajak</th>
                                <th class="text-right">
                                    @if($data->status==0)
                                        <input type="text" class="form-control  text-right" wire:model="pajak" />
                                    @else
                                        {{format_idr($data->ppn)}}
                                    @endif
                                </th>
                                <th></th>
                            </tr>
                            <tr> -->
                                <th colspan="8" class="text-right">Total</th>
                                <th class="text-right">{{format_idr($sub_total+$biaya_pengiriman+$pajak)}}</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                    @if($data->status==0)
                        <div>
                            <label>Catatan</label> 
                            <textarea class="form-control" wire:model="catatan"></textarea>
                        </div>
                    @else
                        <small>Catatan</small><br />
                        <label>{{$data->catatan}}</label>
                        <hr class="py-0 my-0" />
                    @endif
                </div>
                <hr />
                @if(Auth::user()->user_access_id == 8)
                    <div class="form-group">
                        <a href="{{route('purchase-order.index')}}" class="mr-3"><i class="fa fa-arrow-left"></i> Kembali</a>
                        @if($data->status==0)
                            <button type="button" class="btn btn-warning" wire:click="saveAsDraft"><i class="fa fa-save"></i> Save as Draft</button>
                            <button type="button" class="btn btn-info" wire:click="submit"><i class="fa fa-check-circle"></i> Issued</button>
                        @endif
                        @if($data->status==2)
                            <!-- <button type="button" class="btn btn-info" wire:click="sendpayment"><i class="fa fa-send-o"></i> Confirm Payment</button> -->
                                <a href="javascript:void(0)" class="btn btn-info" data-toggle="modal" data-target="#modal_upload_bukti_pembayaran"><i class="fa fa-upload"></i> Pay</a>
                            <!-- <button type="button" class="btn btn-info" wire:click="sendpayment"><i class="fa fa-send-o"></i> Bayar</button> -->
                        @endif

                        @if($data->status==3 || $data->status==4 || $data->status==5)
                            <a href="javascript:void(0)" class="btn btn-info" data-toggle="modal" data-target="#modal_upload_bukti_pembayaran"><i class="fa fa-eye"></i> Detail Invoice</a>
                        @endif
                    </div>
                @endif

                @if(Auth::user()->user_access_id == 7)
                    <div class="form-group">
                        @if($data->status==1)
                            <button type="button" class="btn btn-info" wire:click="sendinvoice"><i class="fa fa-send-o"></i> Send Invoice</button>
                        @endif

                        @if($data->status==1)
                            <button type="button" class="btn btn-info" wire:click="updateaspaid"><i class="fa fa-dollar"></i> Update as Paid</button>
                        @endif
                        <!-- <button type="button" class="btn btn-info" wire:click="submit"><i class="fa fa-check-circle"></i> Issued</button> -->
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="modal_upload_bukti_pembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            @if($data->status==2)
                <div class="row">
                    <div class="col-md-6">
                        <form wire:submit.prevent="sendpayment">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-upload"></i> Upload Bukti Pembayaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true close-btn">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Tanggal Pembayaran</label>
                                    <input type="text" class="form-control" wire:model="payment_date" value="<?php echo date('Y-m-d'); ?>"/>
                                    @error('payment_date') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Bayar</label> @if($sisa_bayar_inv > 0)<span style="color: red">(Sisa Bayar : Rp, {{ format_idr($sisa_bayar_inv) }})</span>@endif
                                    <input type="text" class="form-control" wire:model="payment_amount" value="{{ $sisa_bayar_inv }}" />
                                    @error('payment_amount') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label>Bukti Pembayaran</label>
                                    <input type="file" class="form-control" wire:model="file_bukti_pembayaran" />
                                    @error('file_bukti_pembayaran') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label>Metode Pembayaran</label>
                                    <select class="form-control" wire:model="metode_pembayaran">
                                        <option value=""> -- Pilih -- </option>
                                        <option value="4">Tunai</option>
                                        <option value="9">Transfer</option>
                                    </select>
                                    @error('file_bukti_pembayaran') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <span wire:loading wire:target="bayar">
                                    <i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>
                                    <span class="sr-only">{{ __('Loading...') }}</span>
                                </span>
                                <button wire:loading.remove wire:target="sendpayment" type="submit" class="btn btn-info"><i class="fa fa-check-circle"></i> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                @endif
                
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <h6>Detail Pembayaran Invoice</h6>
                            <hr />
                            <div class="table-responsive">
                                <table class="table">
                                    <tr style="background: #eee;">
                                        <th>No</th>
                                        <th>Status</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Metode Pembayaran</th>
                                        <th>Tanggal Pembayaran</th>
                                    </tr>
                                    @foreach($data_invoice as $k => $item)
                                        <tr>
                                            <td>{{$k+1}}</td>
                                            <td>
                                                @if($item->status==1)
                                                    <span class="badge badge-info mr-0">PO Request</span>
                                                @endif
                                                @if($item->status==2)
                                                    <span class="badge badge-warning mr-0">Invoice Sent</span>
                                                @endif
                                                @if($item->status==3)
                                                    <span class="badge badge-warning mr-0">Waiting for Confirmation</span>
                                                @endif
                                                @if($item->status==4)
                                                    <span class="badge badge-success mr-0">Payment Confirm</span>
                                                @endif
                                                @if($item->status==5)
                                                    <span class="badge badge-success mr-0">Deliver</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="" target="_blank"><i class="fa fa-picture-o"></i></a>
                                            </td>
                                            <td>Rp,{{format_idr($item->amount)}}</td>
                                            <td>{{ $item->metode_pembayaran == 4 ? "Tunai" : "Transfer" }}</td>
                                            <td >{{ date_format(date_create($item->created_at), 'd M Y') }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            
                
            </div>
        </div>
    </div>




</div>

@push('after-scripts')
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.min.css') }}"/>
    <script src="{{ asset('assets/vendor/select2/js/select2.min.js') }}"></script>
    <script>
        setTimeout(() => {
            select__2 = $('.select_anggota').select2();
            $('.select_anggota').on('change', function (e) {
                var data = $(this).select2("val");
                @this.set("user_member_id", data);
            });
        }, 1000);

        select_product_po = $('.select_product_po').select2({
            placeholder: " -- Barcode / Product -- ",
            data : {!!json_encode($data_product)!!},
            tokenSeparators: [',', '.','/']
        });
        $('.select_product_po').on('change', function (e) {
            var data = $(this).select2("val");
            @this.set("product_id", data);
        });
    </script>
@endpush