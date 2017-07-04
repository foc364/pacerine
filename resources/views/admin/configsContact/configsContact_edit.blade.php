@extends('templates.admin.layout')

@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{ $title }} do contato</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="{{ route('configuracoes-contato.update', ['id' => 1]) }}" data-parsley-validate class="form-horizontal form-label-left">

                       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="email">E-mail <span class="required"><i class="glyphicon glyphicon-question-sign"  data-toggle="tooltip" data-placement="top" title="E-mail pelo qual os clientes vão entrar em contato."></i> * :</span>
                            </label>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <input type="email" value="{{ Request::old('email') ?: $contact->email }}" id="email" name="email" class="form-control" required>
                                @if ($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="phone">Tel. <span class="required"> :</span>
                            </label>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('phone') ?: $contact->phone }}" id="phone" name="phone" class="form-control" required>
                                @if ($errors->has('phone'))
                                <span class="help-block">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_2') ? ' has-error' : '' }}">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="phone_2">Tel. <span class="required"> :</span>
                            </label>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('phone_2') ?: $contact->phone_2 }}" id="phone_2" name="phone_2" class="form-control" required>
                                @if ($errors->has('phone_2'))
                                <span class="help-block">{{ $errors->first('phone_2') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <input name="_method" type="hidden" value="PUT">
                                <button type="submit" class="btn btn-success">Alterar {{ $title }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop