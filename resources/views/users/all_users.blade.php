@extends('layouts.system')


@section('main_section')
<div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">


            <button class="btn btn-sm btn-primary my-3"  data-bs-toggle="modal" data-bs-target="#largeModal">+ add user</button>

              <div class="modal fade" id="largeModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Large Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row justify-content-center">
                           <div class="col-sm-10 col-md-10 col-lg-10">
                               <span style="font-size: 1.4em;" class="text-center">Register User Here</span>
                           </div>

                            <div class="col-sm-5">

                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Your Full Name</label>
                              </div>

                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Your Email</label>
                              </div>

                              <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="User Role">
                                  <option selected>Choose Your Role</option>
                                  <option value="1">Admin</option>
                                  <option value="2">Pharmacist</option>
                                  <option value="3">Cashier</option>
                                </select>
                                <label for="floatingSelect"></label>
                              </div>

                            </div>

                            <div class="col-sm-5">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control input-sm" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Phone Number</label>
                                </div>
                                <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                </div>
                            </div>    

                          </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Large Modal-->


          <h5 class="card-title">Datatables</h5>
            <p>List  of all Users In our System..</p>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Age</th>
                <th scope="col">Start Date</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Brandon Jacob</td>
                <td>Designer</td>
                <td>28</td>
                <td>2016-05-25</td>
                <td>
                    <button class="btn btn-success btn-sm"><i class="bi bi-card-text"></i> view</button>
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal"> <i class="bi bi-trash-fill"></i> delete</button>

                    <div class="modal fade" id="basicModal" tabindex="-1">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title">Delete User Model</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <span class="font-weight-bold">Are you sure you want to delete this..?</span>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">cancel</button>
                            <button type="button" class="btn btn-primary btn-sm">yes</button>
                            </div>
                        </div>
                        </div>
                    </div><!-- End Basic Modal-->

                </td>


              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Bridie Kessler</td>
                <td>Developer</td>
                <td>35</td>
                <td>2014-12-05</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Ashleigh Langosh</td>
                <td>Finance</td>
                <td>45</td>
                <td>2011-08-12</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Angus Grady</td>
                <td>HR</td>
                <td>34</td>
                <td>2012-06-11</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Raheem Lehner</td>
                <td>Dynamic Division Officer</td>
                <td>47</td>
                <td>2011-04-19</td>
              </tr>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
@endsection
