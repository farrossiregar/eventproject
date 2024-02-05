@section('title', __('Create Event'))
<style>
    .border-group{
        border: 1px solid lightgrey; border-radius: 5px; padding: 10px 0; width: 95%; margin: auto; margin-bottom: 5px;
    }
</style>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <form id="basic-form" wire:submit.prevent="submit" enctype="multipart/form-data">
                <!-- <form id="basic-form" method="POST" action="{{ route('event.save') }}" enctype="multipart/form-data"> -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row form-group border-group">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ __('Nama Event') }}</label>
                                        <input type="text" class="form-control" wire:model="event_name" >
                                        @error('event_name')
                                            <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required">{{ $message }}</li></ul>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <script src="https://cdn.tiny.cloud/1/bg7o7vohhlnriabhaypa6mlhi7mijsw1c8zc4l89y9fb116t/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                                        <script>
                                        tinymce.init({
                                            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
                                            plugins: 'code table lists',
                                            toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
                                        });
                                        </script>

                                        
                                        <label>{{ __('Deskripsi Event') }}</label>
                                        <textarea name="" id="myeditorinstance" cols="30" rows="20" class="form-control" wire:model="event_desc"></textarea>
                                        @error('event_desc')
                                            <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required">{{ $message }}</li></ul>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori Event</label>
                                        <select class="form-control" wire:model="event_cat">
                                            <option value="1">Event1</option>
                                            <option value="2">Event2</option>
                                        </select>
                                        @error('harga')
                                            <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required">{{ $message }}</li></ul>
                                        @enderror
                                    </div>

                                    <!-- <div class="form-group">
                                        <label>{{ __('Tanggal Event') }}</label>
                                        <input type="date" class="form-control"  wire:model="harga" >
                                        @error('harga')
                                            <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required">{{ $message }}</li></ul>
                                        @enderror
                                    </div> -->


                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>{{ __('Tanggal Event Dimulai') }}</label>
                                                <input type="date" class="form-control" wire:model="event_date_start" >
                                                @error('description')
                                                    <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required">{{ $message }}</li></ul>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label>{{ __('Tanggal Event Selesai') }}</label>
                                                <input type="date" class="form-control" wire:model="event_date_end" >
                                                @error('description')
                                                    <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required">{{ $message }}</li></ul>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                    </div>


                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="row form-group border-group">
                                <div class="col-md-12">    
                                    <div class="form-group">
                                        <label>Venue</label>
                                        <select class="form-control">
                                            <option value="1">Online</option>
                                            <option value="2">Offline</option>
                                        </select>
                                        @error('harga')
                                            <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required">{{ $message }}</li></ul>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('Link') }}</label>
                                        <input type="text" class="form-control" wire:model="description" >
                                        @error('description')
                                            <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required">{{ $message }}</li></ul>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label>{{ __('Lokasi') }}</label>
                                        <input type="text" class="form-control" wire:model="description" >
                                        @error('description')
                                            <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required">{{ $message }}</li></ul>
                                        @enderror
                                    </div>
                                                                
                                    <div class="form-group">
                                        <label>Tipe Event</label>
                                        <select class="form-control">
                                            <option value="1">Gratis</option>
                                            <option value="2">Berbayar</option>
                                        </select>
                                        @error('harga')
                                            <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required">{{ $message }}</li></ul>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('Harga') }}</label>
                                        <input type="text" class="form-control" wire:model="description" >
                                        @error('description')
                                            <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required">{{ $message }}</li></ul>
                                        @enderror
                                    </div>
                                
                                </div>
                            </div>


                            <div class="row form-group border-group">
                                <div class="col-md-12">    
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control">
                                        @error('image')
                                            <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required">{{ $message }}</li></ul>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <hr>
                    <a href="javascript:void(0)" onclick="history.back();"><i class="fa fa-arrow-left"></i> {{ __('Kembali') }}</a>
                    <!-- <button  wire:loading.remove wire:target="save" type="submit" class="btn btn-primary ml-3"><i class="fa fa-save"></i> {{ __('Simpan Event') }}</button> -->
                    <button type="submit" class="btn btn-info" wire:target="submit"><i class="fa fa-check-circle"></i> {{ __('Publish Event') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>