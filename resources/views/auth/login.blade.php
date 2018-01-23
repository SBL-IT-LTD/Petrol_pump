@extends('auth.layout.master')

@section('content')
<div class="container">    
        
    <div id="loginbox" class="mainbox col-md-5 col-sm-4  " > 
        
         
        
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center"><img src="{{asset('assets/images/logo.png')}}"/></div>
                <hr class="colorgraph">
            </div>     

            <div class="panel-body" >

        @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <form name="form" id="form" class="form-horizontal login"  method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class=" @if ($errors->has('email')) has-error @endif">
                    <div class="input-group ">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="user" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="User ID/Email" required=""> 
                                                           
                    </div>
                     @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif 
                    </div>



                    <div class="@if ($errors->has('password')) has-error @endif">
                    <div class="input-group ">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" autocomplete="off" type="password" class="form-control" name="password" placeholder="Password" required="">
                    </div>                                                                  
                      @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif 
                    </div>                                                                  

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                             
                              <button type="submit" href="#" class="btn btn-warning pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>                          
                        </div>
                    </div>

                </form>


                 

            </div>                     
        </div>  
    </div>
</div>

<div id="particles"></div>

<style type="text/css">
    
    footer {
        float: left;
    width: 100%;
    clear: both;
    background-color: #191919;
    padding: 20px 30px;
    color: #f7f7f7;
}

a {
    color: #FFC815 ;
   
}

a:hover,a:active{
  text-decoration: none;
  color: #fff;
 }
</style>
<div class="footer">
   © Copyright 2017. All Right Reserved | Developed by <a href="http://servicebusbd.com" target="_blank"> SBL </a>.
 
</div>

<script type="text/javascript">
    $("button.register").on('click',function(){
        $('form.login').slideUp(1000);
        $('form.register').slideDown(1000);


    }); 
       $("button.login").on('click',function(){
        $('form.register').slideUp(1000);
        $('form.login').slideDown(1000);


    });
</script>
@endsection
