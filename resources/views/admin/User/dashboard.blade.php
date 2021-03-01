@extends('admin.layouts.master')

@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">UserTable</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>User Id</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>user123</td>
                                    <td>khorshed@gmail.com</td>
                                    <td>12/12/12</td>
                                    <td>12/12/12</td>
                                    <td>
                                        <button title="view" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal"><i class="fa fa-eye"></i></button>
                                        <button title="edit" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                                        <button title="delete" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" ><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->


    <div class="animated">

        <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra
                            and the mountain zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus
                            Dolichohippus. The latter resembles an ass, to which it is closely related, while the former two are more
                            horse-like. All three belong to the genus Equus, along with other living equids.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Confirm</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="name" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="name" id="name" name="name" placeholder="Enter name..." class="form-control"><span class="help-block"></span></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="user_id" class=" form-control-label">User Id</label></div>
                            <div class="col-12 col-md-9"><input type="user_id" id="user_id" user_id="user_id" placeholder="Enter user_id..." class="form-control"><span class="help-block"></span></div>
                        </div>

                        <div class="col col-md-3"><label class=" form-control-label">Role</label></div>
                        <div class="col col-md-9">
                            <div class="form-check">
                                 <div class="radio">
                                    <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
                                    </label>
                                 </div>
                                 <div class="radio">
                                    <label for="radio2" class="form-check-label ">
                                        <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
                                    </label>
                                 </div>
                                <div class="radio">
                                    <label for="radio3" class="form-check-label ">
                                        <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
                                    </label>
                                </div>
                            </div>
                         </div>

                        <div class="modal-footer">

                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-dot-circle-o"></i> Submit</button>
                            <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-ban"></i> Reset</button>

                        </div>

                        </form>

                    </div>






                </div>
            </div>
        </div>


        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticModalLabel">Static Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            User will be deleted!
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div><!-- .content -->




@endsection
