<!DOCTYPE html>
<html lang="en">
<head>


  <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Show</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png" />
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css"
    />
    <link rel="stylesheet" href="{{URL::asset('assets/css/cs-skin-elastic.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}" />

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800"
      rel="stylesheet"
      type="text/css"
    />


</head>
<body>
   <!-- Left Panel -->
   @include('admin.layout.aside') 
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
      <!-- Header-->
      @include('admin.layout.header')
      <!-- /header -->
      <!-- title-->

      <div class="content">
        <div class="animated fadeIn">
         
            <div class="col-lg-12">
              <div class="card">


              <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{$student['name']}}</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr style="text-align:center;">
                                      <th scope="col">Student ID</th>
                                      <th  scope="col">Name</th>   
                                      <th scope="col">Gender</th>
                                      <th scope="col">Phone</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Password</th>
                                      <th scope="col">Department</th>
                                  
                                  </tr>
                              </thead>
                              <tbody>

                                <tr style="text-align:start;">
                               
                                <td style="border: 1px solid black; padding: 10px;"> {{$student['id']}} </td>

                                <td style="border: 1px solid black; padding: 10px;"> {{$student['name']}} </td>


                                <td style="border: 1px solid black; padding: 10px;">{{$student['gender']}}</td>

                                <td style="border: 1px solid black; padding: 10px;">{{$student['phone_number']}}</td>
                                
                                <td style="border: 1px solid black; padding: 10px;">{{$student['email']}}</td>

                                <td style="border: 1px solid black; padding: 10px;">{{$student['password']}}</td>

                                <td style="border: 1px solid black; padding: 10px;">{{$student['department_number']}}</td>

                              
                                </tr>
                              

                            </tbody>
                        </table>

<!-- Footer -->
@include('admin.layout.footer')
<!-- footer -->



    <!-- Scripts -->
    @include('admin.layout.script')
  
</body>
</html>