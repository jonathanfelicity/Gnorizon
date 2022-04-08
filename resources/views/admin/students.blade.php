@extends('layouts.master')

@section('content')
                    <div class="row">
                        <div class="col-12">
                             <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">List of all students</h4>
                                    <p class="card-subtitle mb-4">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse ad maxime dicta dolore nulla id expedita recusandae obcaecati sint nemo.
                                    </p>

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>email</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                            </tr>
                                        </thead>
                                    
                                    
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->
            <!-- End Page-content -->
@endsection