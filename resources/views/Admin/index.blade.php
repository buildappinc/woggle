@extends('Admin.app')

@section('content')
 
    <div class="container">
        <div class="table-responsive-md">
            <table class="table table-striped table-responsive-md table-borderless table-hover">
                <thead>
                    <tr>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student First Name</th>
                        <th scope="col">Student Last Name</th>
                        <th scope="col">Courses</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($registeredStudents as $students)
                            <tr>
                                <td> {{$students->id}}</td>
                        
                                <td> {{$students->fname}} </td>
                        
                                <td> {{$students->email}} </td>
                        
                                <td>
                                    @foreach ($students->courses as $item)
                                     <li>{{$item->name}}</li>   
                                    @endforeach 
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div> 
  
@endsection

