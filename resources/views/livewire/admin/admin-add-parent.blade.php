<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Add New Parent</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.dashboard')}}"
                                class="pull-right btn btn-success">To Dasboard</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 offset-3">
                            <form wire:submit.prevent="addStudent()">
                                <div class="form-group row">
                                    <label class="col-md-2 control-label">Parent Full Name</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-md"
                                            placeholder="Type Full Name" name="fullname"
                                            wire:model="fullname">
                                        @error('fullname') <p class="text-danger text-capitalize">{{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 control-label">Address of Parent</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-md"
                                            placeholder="Address of Parent" name="address"
                                            wire:model="address">
                                        @error('address') <p class="text-danger text-capitalize">{{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 control-label">Email of Student</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-md"
                                            placeholder="Email of Student" name="email"
                                            wire:model="email">
                                        @error('email') <p class="text-danger text-capitalize">{{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 control-label">Phone of Student</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-md"
                                            placeholder="Phone of Student" name="phone"
                                            wire:model="phone">
                                        @error('phone') <p class="text-danger text-capitalize">{{$message}} @enderror</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 control-label">Gender</label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="gender">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        @error('gender') <p class="text-danger text-capitalize">{{$message}} @enderror</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 control-label">Description</label>
                                    <div class="col-md-4">
                                        <textarea wire:model="description" class="description form-control"></textarea>
                                        @error('description') <p class="text-danger text-capitalize">{{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary"
                                            type="submit">Create Parent</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
