<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Edit Students</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.dashboard')}}"
                                class="pull-right btn btn-success">All Student</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 offset-3">
                            <form wire:submit.prevent="updateStudent()">
                                <div class="form-group row">
                                    <label class="col-md-2 control-label">Student Full Name</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-md"
                                            placeholder="Type Full Name" name="fullname"
                                            wire:model="fullname">
                                        @error('name') <p class="text-danger text-capitalize">{{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 control-label">Code of Student</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-md"
                                            placeholder="Type the Code" name="code"
                                            wire:model="code">
                                        @error('code') <p class="text-danger text-capitalize">{{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 control-label">Addres of Student</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-md"
                                            placeholder="Addres Of Student" name="address"
                                            wire:model="address">
                                        @error('address') <p class="text-danger text-capitalize">{{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 control-label">Email of Student</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-md"
                                            placeholder="Email Of Student" name="email"
                                            wire:model="email">
                                        @error('email') <p class="text-danger text-capitalize">{{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 control-label">Phone of Student</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-md"
                                            placeholder="Phone Of Student" name="phone"
                                            wire:model="phone">
                                        @error('phone') <p class="text-danger text-capitalize">{{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 control-label">Status of Student</label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="status">
                                            <option value="">Select</option>
                                            <option value="success">Success</option>
                                            <option value="failure">Failure</option>
                                        </select>
                                        @error('status') <p class="text-danger text-capitalize">{{$message}} @enderror</p>
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
                                    <label class="col-md-2 control-label">Hall of Student</label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="hall_id">
                                            <option value="">Select</option>
                                            @foreach ($halls as $hall)
                                                <option value="{{$hall->id}}">{{$hall->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('hall') <p class="text-danger text-capitalize">{{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary" type="submit">Update</button>
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
