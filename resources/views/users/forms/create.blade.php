 <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/home') }}"><b>Admin</b>LTE</a>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="register-box-body">
                <p class="login-box-msg">{{ trans('adminlte_lang::message.registermember') }}</p>
                <form action="{{ url('/users') }}" method="post">
                    
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.fullname') }}" name="name" value="{{ old('name') }}"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="username" class="form-control" placeholder="Ingrese el nombre de usuario" name="email" value="{{ old('email') }}"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation"/>
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-xs-push-1">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.register') }}</button>
                        </div><!-- /.col -->
                    </div>
                </form>
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->