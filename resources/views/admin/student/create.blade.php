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
        <!--/.col-->
        {{-- <?php 
        if(isset($errors_arr['Database_Connection_Exception'])){ ?>
        <div style="padding: 20px; background-color: #f44336; width:100% ;color: white; margin-bottom: 15px;">;
        <span style="margin-left: 15px; color: white; font-weight: bold; float: right; font-size: 22px; line-height: 20px; cursor: pointer; transition: 0.3s;" onclick="this.parentElement.style.display=\'none\';">&times;</span>
        <strong>Danger!</strong> <?php echo $errors_arr['Database_Connection_Exception'] ?>;.
        </div>';
         <?php } ?> --}}
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <strong>Basic Form</strong> Elements
            </div>

            <div class="card-body card-block">
              <form
                action="" 
                method="post"
                enctype="multipart/form-data"
                class="form-horizontal"
                @srf
              >
             

                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class="form-control-label"
                      >First Name</label
                    >
                  </div>
                  <div class="col-12 col-md-9">
                    <input
                      type="text"
                      id="text-input"
                      name="First_Name"
                      value="Mohamed"
                      class="form-control"
                    />
                    {{-- <?php if(isset($errors_arr['First-name_required'])){ ?>
                          <small class="form-text text-muted" style="color:red !important"><?php echo $errors_arr['First-name_required'] ?></small>
                    <?php } ?> --}}
             
                  </div>
                </div>

              <!-- ------------------------- -->

                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class="form-control-label"
                      >Last Name</label
                    >
                  </div>
                  <div class="col-12 col-md-9">
                    <input
                      type="text"
                      id="text-input"
                      name="Last_Name"
                      value="Abo El-Seoud"
                      class="form-control"
                    />
                    {{-- <?php if(isset($errors_arr['Last-name_required'])){ ?>
                          <small class="form-text text-muted" style="color:red !important"><?php echo $errors_arr['Last-name_required'] ?></small>
                    <?php } ?> --}}
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
                      name="Email"
                      value="@me.com"
                      class="form-control"
                    />
                    {{-- <?php if(isset($errors_arr['Email_required'])){ ?>
                          <small class="form-text text-muted" style="color:red !important"><?php echo $errors_arr['Email_required'] ?></small>
                    <?php } ?> --}}
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
                      value="Mobo124322"
                      class="form-control"
                    />
                    {{-- <?php if(isset($errors_arr['password_invalid'])){ ?>
                          <small class="form-text text-muted" style="color:red !important"><?php echo $errors_arr['password_invalid'] ?></small>
                    <?php } ?> --}}
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
                      name="phone"
                      value=""
                      class="form-control"
                    />
                    {{-- <?php if(isset($errors_arr['Phone_required'])){ ?>
                          <small class="form-text text-muted" style="color:red !important"><?php echo $errors_arr['Phone_required'] ?></small>
                    <?php } ?>
                    <?php if(isset($errors_arr['phone_int'])){ ?>
                          <small class="form-text text-muted" style="color:red !important"><?php echo $errors_arr['phone_int'] ?></small>
                    <?php } ?> --}}
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
                      class="form-control"
                    ></textarea>
                  </div>
                </div>


                
              <!-- ------------------------- -->

                <div class="row form-group">
                  <div class="col-12 col-md-12">
                    <select name="Department" id="select" class="form-control">
                    <option value="-1">Select your department </option>
                    {{-- <?php foreach($dept_data_arr as $dept){?>
                      <option value="<?php echo $dept['number'] ?>"><?php echo $dept['name'] ?></option>
                    <?php } ?>
                    </select>
                    <?php if(isset($errors_arr['Department_required'])){ ?>
                          <small class="form-text text-muted" style="color:red !important"><?php echo $errors_arr['Department_required'] ?></small>
                    <?php } ?> --}}
                  </div>
                </div>

              <!-- ------------------------- -->

                <div class="row form-group">
                  <div class="col col-md-3">
                    <label class="form-control-label">Gender </label>
                  </div>
                  <div class="col-12 col-md-9">
                    <div class="form-check-inline form-check">
                      <label for="inline-radio1" class="form-check-label">
                        <input
                          type="radio"
                          id="inline-radio1"
                          name="Gender"
                          value="m"
                          class="form-check-input"
                        />male
                      </label>
                      <label for="inline-radio2" class="form-check-label">
                        <input
                          type="radio"
                          id="inline-radio2"
                          name="Gender"
                          value="f"
                          class="form-check-input"
                        />female
                      </label>
                    </div>
                    {{-- <?php if(isset($errors_arr['gender_required'])){ ?>
                          <small class="form-text text-muted" style="color:red !important"><?php echo $errors_arr['gender_required'] ?></small>
                    <?php } ?> --}}
                  </div>
                </div>

              <!-- ------------------------- -->

               

              </form>
            </div>

          </div>

        </div>

    </div>


@endsection('content')