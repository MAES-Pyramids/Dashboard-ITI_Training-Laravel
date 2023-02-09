@extends("admin.layout.master")

@section("title","Input Form")

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
      <div class="row m-0">
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
                <li><a href="#">Forms</a></li>
                <li class="active">Basic</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@section("content")
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-lg-12"></div>
        
        @if(Session::has("success") )
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif



        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <strong>Basic Form</strong> Elements
            </div>
            <div class="card-body card-block">
                
              <form
                action="{{ route('student.store') }}" 
                method="post"
                enctype="multipart/form-data"
                class="form-horizontal"
               
              >
              @csrf

                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class="form-control-label"
                      >Full Name</label
                    >
                  </div>
                  <div class="col-12 col-md-9">
                    <input
                      type="text"
                      id="text-input"
                      name="name"
                      value="{{ old('name') }}"
                      class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                    />
                     @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                      @endif
                  </div>
                </div>



              <!-- ------------------------- -->

                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class="form-control-label"
                      >Email</label
                    >
                  </div>
                  <div class="col-12 col-md-9">
                    <input
                      type="mail"
                      id="text-input"
                      name="email"
                      value="{{ old('email') }}"
                      class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                    />
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                  </div>
                </div>

              <!-- ------------------------- -->

                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class="form-control-label"
                      >Password</label
                    >
                  </div>
                  <div class="col-12 col-md-9">
                    <input
                      type="password"
                      id="text-input"
                      name="password"
                      value="{{ old('password') }}"
                      class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                    />
                    @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                      @endif
                  </div>
                </div>

              <!-- ------------------------- -->
              <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class="form-control-label"
                      >Phone</label
                    >
                  </div>
                  <div class="col-12 col-md-9">
                    <input
                      type="text"
                      id="text-input"
                      name="phone_number"
                      value="{{ old('phone_number') }}"
                      class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}"
                    />
                     @if ($errors->has('phone_number'))
                            <div class="invalid-feedback">
                                {{ $errors->first('phone_number') }}
                            </div>
                      @endif
                  </div>
                </div>

              <!-- ------------------------- -->

                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="textarea-input" class="form-control-label"
                      ><Address>why you want this scholarship</Address></label
                    >
                  </div>
                  <div class="col-12 col-md-9">
                    <textarea
                      name="essay"
                      id="textarea-input"
                      rows="5"
                      placeholder="Content..."
                      value="{{ old('essay') }}"
                      class="form-control {{ $errors->has('essay') ? 'is-invalid' : '' }}"
                    ></textarea>
                    @if ($errors->has('essay'))
                        <div class="invalid-feedback">
                            {{ $errors->first('essay') }}
                        </div>
                     @endif
                  </div>
                </div>


                
              <!-- ------------------------- -->

                <div class="row form-group">
                  <div class="col-12 col-md-12">
                    <select name="department_number" id="select" class="form-control {{ $errors->has('department_number') ? 'is-invalid' : '' }}" value="{{old('department_number')}}">
                    <option value="non">Select your department </option>
                    <option value="1">Select your department </option>
                    <option value="2">Select your department </option>
                    <option value="3">Select your department </option>

                    {{-- <?php foreach($dept_data_arr as $dept){?>
                      <option value="<?php echo $dept['number'] ?>"></option>
                    <?php } ?> --}}
                    </select>
                    @if ($errors->has('department_number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('department_number') }}
                        </div>
                     @endif
                  </div>
                </div>

              <!-- ------------------------- -->

              <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label class="form-control-label">Gender </label>
                </div>
                <div class="col-12 col-md-9">
                  <div class="form-check-inline form-check">
                    <label for="inline-radio1" class="form-check-label">
                      <input
                        type="radio"
                        id="inline-radio1"
                        name="gender"
                        value="m"  {{ old('gender') == 'm' ? 'checked' : '' }}
                        class="form-check-input"
                      />male
                    </label>
                    <label for="inline-radio2" class="form-check-label">
                      <input
                        type="radio"
                        id="inline-radio2"
                        name="gender"
                        value="f"  {{ old('gender') == 'f' ? 'checked' : '' }}
                        class="form-check-input"
                      />female
                    </label>
                  </div>
                  @if ($errors->has('gender'))
                    <br>
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                 @endif
   
                </div>
              </div>

               

              <!-- ------------------------- -->
              <div class="card-footer">
                <input  type="submit" class="btn btn-primary btn-sm" name="Submitted" value="Submit">
                </input>
                <input type="reset" class="btn btn-danger btn-sm">
                </input>
              </div>

              </form>
            </div>

          </div>

        </div>

    </div>


@endsection('content')