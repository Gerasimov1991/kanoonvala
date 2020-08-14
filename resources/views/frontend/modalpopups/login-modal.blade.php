<div class="modal fade" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="no-margins">Login</h2>
            </div>

            <div class="panel-body">
                <div class="col-md-6 col-md-offset-3">
                    <div class="row">
                        <div class="col-md-12">
                            {{ Form::open(['route' => 'frontend.auth.login', 'class' => 'form-horizontal']) }}
                            <div class="form-group {{$errors->first('email')?'has-error':''}}">
                                {{ Form::input('text', 'email', null, ['class' => 'form-control', 'required'=>'required', 'placeholder' => trans('validation.attributes.frontend.register-user.email')]) }}
                                @if($errors->has('email'))
                                <div class="help-block with-error">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="form-group {{$errors->first('password')?'has-error':''}}">
                                {{ Form::input('password', 'password', null, ['class' => 'form-control','required'=>'required', 'placeholder' => trans('validation.attributes.frontend.register-user.password')]) }}
                                @if($errors->has('password'))
                                <div class="help-block with-error">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                {{-- <button type="submit" class="btn btn-block btn-lg btn-danger">Login</button> --}}
                                {{ Form::submit(trans('labels.frontend.auth.login_button'), ['class' => 'btn btn-block btn-lg btn-danger']) }}
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.panel-body -->
        </div>
    </div>
</div>