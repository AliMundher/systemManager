<div class="container">

    {{-- Start Section of Student --}}
    <div class="row mt-5">
        <div class="col-md-12">
            <h4 class="mb-4">Dashboard</h4>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><h4>Students</h4></h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.addstudent')}}" class="pull-right btn btn-success">Add New Student</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->code}}</td>
                                    <td>{{$student->fullname}}</td>
                                    <td>{{$student->address}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->status}}</td>
                                    <td>
                                        <a href="{{route('admin.editstudent',['student_id'=>$student->id])}}"
                                            class=" btn btn-primary" >
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a href="" onclick="confirm('Are you sure you want to remove this student') ||
                                            event.stopImmediatePropagation()"
                                            class=" btn btn-danger"
                                            wire:click.prevent="delete({{$student->id}},'student')">
                                            <i class="fa fa-remove"></i> Remove
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- End Section of Student --}}

    {{-- Start Section of Parents --}}
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><h4>Parents</h4></h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.addparent')}}" class="pull-right btn btn-success">Add New Parent</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fathers as $father)
                                <tr>
                                    <td>{{$father->id}}</td>
                                    <td>{{$father->fullname}}</td>
                                    <td>{{$father->address}}</td>
                                    <td>{{$father->email}}</td>
                                    <td>{{$father->phone}}</td>
                                    <td>
                                        <a href="{{route('admin.editparent',
                                            ['parent_id'=>$father->id])}}"
                                            class=" btn btn-primary" >
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a href="" onclick="confirm('Are you sure you want to remove this student') ||
                                            event.stopImmediatePropagation()"
                                            class=" btn btn-danger"
                                            wire:click.prevent="delete({{$father->id}},'father')">
                                            <i class="fa fa-remove"></i> Remove
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- End Section of Parents --}}
    {{-- Start Section of Class --}}
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><h4>Students</h4></h4>
                        </div>
                        <div class="col-md-6">
                            <a href="" class="pull-right btn btn-success">Add New Student</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    students
                </div>
            </div>
        </div>
    </div>
    {{-- End Section of Class --}}

</div>
