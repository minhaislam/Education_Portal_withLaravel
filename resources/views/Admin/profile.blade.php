<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


</head>
<body>

    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{asset('images/myimage1.jpg')}}" width="auto" alt=""/>
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       
                                    </h5>
                                    <h6>
                                        
                                    </h6>
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                             
                            </ul>
                        </div>
                    </div>
                    @if($user->id== request()->session()->get('user')->id)
                    <div class="col-md-2">
                        <button  onclick="window.location.href = '{{route('admin.index')}}';" type="button" class="btn btn-primary">Go Home</button>
                    </div>
                    @else
                    <div class="col-md-2">
                        <button  onclick="window.location.href = '/Admin/{{$user->type}}';" type="button" class="btn btn-primary">Go Home</button>
                    </div>
                    @endif
                                        <div class="col-md-2">
                        <button  onclick="window.location.href = '{{route('admin.editprofile', $user->id)}}';" type="button" class="btn btn-primary">Edit</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p></p>
                            <a href=""></a><br/>
                            <a href=""></a><br/>
                            <a href=""></a>
                            <p></p>
                            <a href=""></a><br/>
                            <a href=""></a><br/>
                            <a href=""></a><br/>
                            <a href=""></a><br/>
                            <a href=""></a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->user_id}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->Full_Name}} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user_profile->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user_profile->phone}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user_profile->address}}</p>
                                            </div>
                                        </div>
                                        @if($user->type=='student' or $user->type=='teacher' )
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Department</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user_profile->department}}</p>
                                            </div>
                                        </div>
                                        
                                        @elseif($user->type=='student')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>CGPA</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user_profile->cgpa}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Passingyear</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user_profile->passing_year}}</p>
                                            </div>
                                        </div>
                                        
                                        @elseif($user->type=='admin' or $user->type=='teacher' )
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>education</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user_profile->eduction}}</p>
                                            </div>
                                        </div>
                                        @endif
                            </div>
                            </div>
                                        
                              
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>