@extends('layouts.app')

@section('content')


    <div class="row">
        <div class="col-sm-10 ">
            <div class="panel panel-default">
                

            
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                        

                            <label class="block clearfix" style="width:373px;" >
                                <span class="block input-icon input-icon-right">
                                 <input id="email" type="email" class="form-control" placeholder="E-mail" style="width:343px;" name="email" value="{{ old('email') }}" required autofocus>
                                <i class="ace-icon fa fa-user"></i>
                                </span>
                                

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                       
                      </label>

                        </div>
                        <div class="space-6"></div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="block clearfix" style="width:373px;">

                            <div class="col-md-6">

                                <span class="block input-icon input-icon-right">
                                    
                                <input id="password" type="password" class="form-control"  placeholder="Password" style="width:343px;" name="password" required><i class="ace-icon fa fa-lock"></i>
                                </span>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                             <i class="ace-icon fa fa-key"></i>
                           <span class="bigger-110">Login</span>
                         </button>
                    </form>
               
            </div>
        </div>
   
</div>

@endsection
