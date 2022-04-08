@extends('layouts.master')

@section('content')
<div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Opatix</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">

                        <div class="col-xl col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="avatar-sm float-right">
                                        <span class="avatar-title bg-soft-primary rounded-circle">
                                            <i class="bx bx-dollar-circle m-0 h3 text-primary"></i>
                                        </span>
                                    </div>
                                    <h6 class="text-muted text-uppercase mt-0">Students</h6>
                                    <h3 class="my-3">65</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="avatar-sm float-right">
                                        <span class="avatar-title bg-soft-primary rounded-circle">
                                            <i class="bx bx-analyse m-0 h3 text-primary"></i>
                                        </span>
                                    </div>
                                    <h6 class="text-muted text-uppercase mt-0">Lecturer</h6>
                                    <h3 class="my-3">$<span data-plugin="counterup">94</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="avatar-sm float-right">
                                        <span class="avatar-title bg-soft-primary rounded-circle">
                                            <i class="bx bx-basket m-0 h3 text-primary"></i>
                                        </span>
                                    </div>
                                    <h6 class="text-muted text-uppercase mt-0">Admins </h6>
                                    <h3 class="my-3" data-plugin="counterup">2</h3>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-4">
                             <div class="card card-animate">
                                <div class="card-body">
                                    <div class="dropdown float-right position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item">Action</a></li>
                                            <li><a href="#" class="dropdown-item">Another action</a></li>
                                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title d-inline-block mb-3">Lecturers</h4>

                                    <div data-simplebar style="max-height: 380px;">
                                        <a href="#" class="d-flex align-items-center border-bottom py-3">
                                            <div class="mr-3">
                                                <img src="https://myrathemes.com/opatix/layouts/vertical/assets/images/users/avatar-2.jpg" class="rounded-circle avatar-sm" alt="user">
                                            </div>
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1">Leonardo Payne</h6>
                                                    <p class="text-muted font-size-11 mb-0">12.30 PM</p>
                                                </div>
                                                <p class="text-muted font-size-13 mb-0">Hey! there I'm available...</p>
                                            </div>
                                        </a>
    
                                        <a href="#" class="d-flex align-items-center border-bottom py-3">
                                            <div class="mr-3">
                                                <img src="https://myrathemes.com/opatix/layouts/vertical/assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user">
                                            </div>
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1">Soren Drouin</h6>
                                                    <p class="text-muted font-size-11 mb-0">09.30 PM</p>
                                                </div>
                                                <p class="text-muted font-size-13 mb-0">Completed "Design new idea"....</p>
                                            </div>
                                        </a>
    
                                        <a href="#" class="d-flex align-items-center border-bottom py-3">
                                            <div class="mr-3">
                                                <img src="https://myrathemes.com/opatix/layouts/vertical/assets/images/users/avatar-4.jpg" class="rounded-circle avatar-sm" alt="user">
                                            </div>
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1">Anne Simard</h6>
                                                    <p class="text-muted font-size-11 mb-0">10.30 PM</p>
                                                </div>
                                                <p class="text-muted font-size-13 mb-0">Assigned task "Poster illustation design"...</p>
                                            </div>
                                        </a>
    
                                        <a href="#" class="d-flex align-items-center border-bottom py-3">
                                            <div class="mr-3">
                                                <img src="https://myrathemes.com/opatix/layouts/vertical/assets/images/users/avatar-5.jpg" class="rounded-circle avatar-sm" alt="user">
                                            </div>
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1">Nicolas Chartier</h6>
                                                    <p class="text-muted font-size-11 mb-0">02.00 PM</p>
                                                </div>
                                                <p class="text-muted font-size-13 mb-0">Completed "Drinking bottle graphics"...</p>
                                            </div>
                                        </a>
    
                                        <a href="#" class="d-flex align-items-center border-bottom py-3">
                                            <div class="mr-3">
                                                <img src="https://myrathemes.com/opatix/layouts/vertical/assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user">
                                            </div>
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1">Gano Cloutier</h6>
                                                    <p class="text-muted font-size-11 mb-0">05.30 PM</p>
                                                </div>
                                                <p class="text-muted font-size-13 mb-0">Assigned task "Hyper app design"...</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-8">
                             <div class="card card-animate">
                                <div class="card-body">
                                    <div class="dropdown float-right position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item">Action</a></li>
                                            <li><a href="#" class="dropdown-item">Another action</a></li>
                                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title d-inline-block">Courses</h4>

                                    <div class="table-responsive">
                                        <table class="table table-borderless table-hover mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Course Name</th>
                                                    <th>Course Code</th>
                                                    <th>Unit</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td>App design and development</td>
                                                    <td>Arthur Powell</td>
                                                    <td>Sun, 08/10</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Coffee detail page - Main Page</td>
                                                    <td>Joan Lennox</td>
                                                    <td>Fri, 17/10</td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>Poster illustation design</td>
                                                    <td>Ronald Roesler</td>
                                                    <td>Tue, 13/08</td>
                                                </tr>
                                                <tr>
                                                    <th>4</th>
                                                    <td>Drinking bottle graphics</td>
                                                    <td>Mickey Cochran</td>
                                                    <td>Mon, 10/08</td>
                                                </tr>
                                                <tr>
                                                    <th>5</th>
                                                    <td>Landing page design - Home</td>
                                                    <td>Barry Trahan</td>
                                                    <td>Thus, 03/09</td>
                                                </tr>
                                                <tr>
                                                    <th>6</th>
                                                    <td>Company logo design</td>
                                                    <td>James Grimes</td>
                                                    <td>Sat, 07/19</td>
                                                </tr>
                                                <tr>
                                                    <th>7</th>
                                                    <td>Product page redesign</td>
                                                    <td>Philip Jetton</td>
                                                    <td>Wed, 09/08</td>
                                                </tr>
                                                <tr>
                                                    <th>8</th>
                                                    <td>Hero page - Main Page</td>
                                                    <td>Amanda Salinas</td>
                                                    <td>Sun, 02/20</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col -->

                    </div>
                    <!-- end row-->

@endsection