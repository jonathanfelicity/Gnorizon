@extends('layouts.master')

@section('content')
<div class="row">
                        <div class="col-12">
                             <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">Create User</h4>
                                    <p class="card-subtitle mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias modi ab natus atque, quibusdam necessitatibus numquam voluptates possimus pariatur iusto?</p>
                                    <form method="post" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="form-row">
                                          <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Name</label>
                                            <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="John" required>
                                            <div class="valid-feedback">
                                              Looks good!
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <label for="validationCustomUsername">Email</label>
                                            <div class="input-group">
                                              <input type="text" class="form-control" id="validationCustomUsername"post name="email" placeholder="johndoe@mail.com" aria-describedby="inputGroupPrepend" required>
                                              <div class="invalid-feedback">
                                                Email.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Role</label>
                                            <select class="form-select form-control" name="role" aria-label="Default select example">
                                                <option selected value="1">Student</option>
                                                <option value="2">Staff</option>
                                                <option value="3">Admin</option>
                                            </select>
                                            <div class="valid-feedback">
                                              Looks good!
                                            </div>
                                          </div>
                                        </div>
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Add user</button>
                                    </form>
                    
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->
@endsection