@extends('layouts.layout')

@section('content')
 <!-- ======= Page Section ======= -->
 <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
      </div>
      <div class="profile-container light-style flex-grow-1 container-p-y">
          <h4 class="font-weight-bold py-3 mb-4">
              Account settings
          </h4>
          <div class="card overflow-hidden">
              <div class="row no-gutters row-bordered row-border-light">
                  <div class="col-md-3 pt-0">
                      <div class="list-group list-group-flush account-settings-links">
                          <a class="list-group-item list-group-item-action active" data-toggle="list"
                              href="#account-general">General</a>
                          <a class="list-group-item list-group-item-action" data-toggle="list"
                              href="#account-change-password">Change password</a>
                      </div>
                  </div>
                  <div class="col-md-9">
                      <div class="tab-content">
                          <div class="tab-pane fade active show" id="account-general">
                              <div class="card-body media align-items-center">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt
                                      class="d-block ui-w-80">
                                  <div class="media-body ml-4">
                                      <label class="profile-btn3">
                                          Upload new photo
                                          <input type="file" class="account-settings-fileinput">
                                      </label> &nbsp;
                                      <button type="button" class="profile-btn btn-default md-btn-flat">Reset</button>
                                  </div>
                              </div>
                              <hr class="border-light m-0">
                              <div class="card-body">
                                  <div class="form-group">
                                      <label class="profile-form-label">Username</label>
                                      <input type="text" class="form-control mb-1" value="nmaxwell">
                                  </div>
                                  <div class="form-group">
                                      <label class="profile-form-label">Name</label>
                                      <input type="text" class="form-control" value="Nelle Maxwell">
                                  </div>
                                  <div class="form-group">
                                      <label class="profile-form-label">Company</label>
                                      <input type="text" class="form-control" value="Company Ltd.">
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="account-change-password">
                              <div class="card-body pb-2">
                                  <div class="form-group">
                                      <label class="profile-form-label">Current password</label>
                                      <input type="password" class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label class="profile-form-label">New password</label>
                                      <input type="password" class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label class="profile-form-label">Repeat new password</label>
                                      <input type="password" class="form-control">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="text-right mt-3">
              <button type="button" class="profile-btn2 ">Save changes</button>&nbsp;
              <button type="button" class="profile-btn2 ">Cancel</button>
          </div>
      </div>

  <!-- End Page -->
  @endsection
