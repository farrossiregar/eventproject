@section('title', 'Register')
        
<div class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-8">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-8">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registrasi Event Creator</h3>
                        <form class="form-auth-small" method="POST" wire:submit.prevent="register" action="" >
                            <div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label" for="firstName">First Name</label>
                                            <input type="text" id="firstName" class="form-control form-control-lg" wire:model="creator_first_name"  />
                                            <!-- <input type="text" class="form-control" wire:model="nama_supplier" /> -->
                                            
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label" for="lastName">Last Name</label>
                                            <input type="text" id="lastName" class="form-control form-control-lg" wire:model="creator_last_name" />
                                            
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="emailAddress">Email</label>
                                            <input type="email" id="emailAddress" class="form-control form-control-lg"  wire:model="creator_email"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                            <input type="tel" id="phoneNumber" class="form-control form-control-lg"  wire:model="creator_phone"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="emailAddress">Password</label>
                                            <input type="password" id="emailAddress" class="form-control form-control-lg"  wire:model="creator_password"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="phoneNumber">Confirm Password</label>
                                            <input type="password" id="phoneNumber" class="form-control form-control-lg"  wire:model="creator_confirm_password"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="firstName">Nama Perusahaan</label>
                                                            <input type="text" id="firstName" class="form-control form-control-lg"  wire:model="creator_company"/>
                                                            
                                                        </div>
                                                    </div>
                                                    

                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-outline">
                                                            <label class="form-label" for="firstName">Bergerak di Bidang</label>
                                                            <!-- <input type="text" id="firstName" class="form-control form-control-lg"  wire:model="creator_company_field"/> -->
                                                            <select class="select form-control"   wire:model="creator_company_field">
                                                                <option value="1" disabled>Choose option</option>
                                                                <option value="2">Subject 1</option>
                                                                <option value="3">Subject 2</option>
                                                                <option value="4">Subject 3</option>
                                                            </select>
                                                            <label class="form-label select-label">Choose option</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-outline">
                                                    <label class="form-label" for="firstName">Alamat Perusahaan</label>
                                                    
                                                    <textarea class="form-control form-control-lg" name="" id="" cols="30" rows="6" wire:model="creator_address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                    <div class="form-outline datepicker w-100">
                                        <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                                        <label for="birthdayDate" class="form-label">Birthday</label>
                                    </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                    <h6 class="mb-2 pb-1">Gender: </h6>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                        value="option1" checked />
                                        <label class="form-check-label" for="femaleGender">Female</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                        value="option2" />
                                        <label class="form-check-label" for="maleGender">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                        value="option3" />
                                        <label class="form-check-label" for="otherGender">Other</label>
                                    </div>

                                    </div>
                                </div>

                                

                              

                                <!-- <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div> -->

                                <div class="form-group col-md-12">
                                    <hr />
                                    <a href="/"><i class="fa fa-arrow-left"></i> {{__('Back')}}</a>
                                    
                                    <button type="submit" class="ml-3 btn btn-primary">{{ __('Submit Pendaftaran') }} <i class="fa fa-check"></i></button>
                                    
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .gradient-custom {

    background-image: url('https://images.pexels.com/photos/196652/pexels-photo-196652.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');

    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
    font-size: 1rem;
    line-height: 2.15;
    padding-left: .75em;
    padding-right: .75em;
    }
    .card-registration .select-arrow {
    top: 13px;
    }
</style>

        
        
           

