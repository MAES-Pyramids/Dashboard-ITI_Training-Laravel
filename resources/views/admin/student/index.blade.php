<?php use  App\Models\student; ?>
@extends("admin.layout.master")

@section("title","Dashboard")


@section("content")
<div class="content">
    <div class="animated fadeIn">
     
        <div class="col-lg-12">
          <div class="card">


          <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Table Head</strong>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr style="text-align:center;">
                                  <th  scope="col">Name</th>
                                  <th scope="col">phone Number</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">department_number</th>
                                  <th scope="col">Controls</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($students as $student)
                           <?php 
                            $student = student::find($student->id); 
                            $departmentName = $student->department->name;
                           ?>
                            
                            
                            <tr style="text-align:start;">
                           
                            <td style="border: 1px solid black; padding: 10px;">{{$student['name'] }}  </td>

                            <td style="border: 1px solid black; padding: 10px;"> {{$student['phone_number']}} </td>
                            
                            <td style="border: 1px solid black; padding: 10px;">{{$student['email']}} </td>

                            <td style="border: 1px solid black; padding: 10px;">{{$departmentName}} </td>
                               
 


                            <td style="border: 1px solid black; padding: 10px; display: flex;justify-content: space-between;align-items: center;">
                                <a href="{{route('student.show',['student' => $student->id])}}" style="width: calc(100% / 3.8); background-color: #4CAF50; border: none; color: white; padding: 5px 10px; text-align: center; text-decoration: none; display: inline-block; margin-right: 10px;"> Show</a>
                                <a href="{{route('student.edit',['student' => $student->id])}}" style="width: calc(100% / 3.8); background-color: #FFC107; border: none; color: white; padding: 5px 10px; text-align: center; text-decoration: none; display: inline-block; margin-right: 10px;">Edit</a>
                                <a href="{{route('student.destroy',['student' => $student->id])}}" style="width: calc(100% / 3.5); background-color: #F44336; border: none; color: white; padding: 5px 10px; text-align: center; text-decoration: none; display: inline-block;">Delete</a>
                              </td>
  
                          
                        </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
           



          </div>
        </div>
      </div>
  
    </div>
@endsection('content')
