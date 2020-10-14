
@extends('layout.master')

@section('content')
 <form class="form-horizontal" method="post" action="{{ action('UserController@UpdateProfile') }}" enctype="multipart/form-data">
                        {{-- <input type="hidden" name="_method" value="PUT"> --}}
                        {{-- {{ csrf_field() }} --}}
                        @csrf

                    <div class="row">
                        <div class="form-group col-md-6 col-12">
                          <label>Name</label>
                          <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
                          <div class="invalid-feedback">
                            Please fill in the first name
                          </div>
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}">
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6 col-12">
                          <label>Old Password</label>
                          <input type="password" class="form-control" name="old_password">
                          <div class="invalid-feedback">
                            Please fill in the first name
                          </div>
                        </div>
                        <div class="form-group col-md-6 col-12">
                          <label>New Password</label>
                          <input type="password" class="form-control" name="password">
                          <div class="invalid-feedback">
                            Please fill in the first name
                          </div>
                        </div>
                      </div>

                    <div class="row">
                      <div class="form-group col-md-6 col-12">
                          <label>Photo</label>
                          <input type="file" class="form-control" name="photo" value="{{ auth()->user()->photo }}">
                          <div class="invalid-feedback">
                            Please fill in the first name
                          </div>
                        </div>
                      </div>
                     
                     
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </form>


                  @endsection  