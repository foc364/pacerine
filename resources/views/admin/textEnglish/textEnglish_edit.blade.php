@extends('templates.admin.layout')

@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{ $title }} de texto em inglês</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="{{ route('texto-ingles.update', ['id' => 1]) }}" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="about"><p>Texto da seção 'Sobre' :</p>
                                <samp>
                                    <p>Usar as tags {{ '<p>' }} e {{ '</p>' }} para quebra de linha</p>
                                </samp>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                             {!! Form::textarea('about', Request::old('about') ?: $textEnglish->about , ['id' => 'about', 'rows' => 10, 'cols' => 54, 'style' => 'resize:yes', 'class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('about_li') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="about_li">Lista 1 <span class="required"> :</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="about_li" value="{{ Request::old('about_li') ?: $textEnglish->about_li }}" id="about_li" name="about_li" class="form-control" required>
                                @if ($errors->has('about_li'))
                                <span class="help-block">{{ $errors->first('about_li') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('about_li_2') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="about_li_2">Lista 2 <span class="required"> :</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="about_li_2" value="{{ Request::old('about_li_2') ?: $textEnglish->about_li_2 }}" id="about_li_2" name="about_li_2" class="form-control" required>
                                @if ($errors->has('about_li_2'))
                                <span class="help-block">{{ $errors->first('about_li_2') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('about_li_3') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="about_li_3">Lista 3 <span class="required"> :</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="about_li_3" value="{{ Request::old('about_li_3') ?: $textEnglish->about_li_3 }}" id="about_li_3" name="about_li_3" class="form-control" required>
                                @if ($errors->has('about_li_3'))
                                <span class="help-block">{{ $errors->first('about_li_3') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('about_experience') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="about_experience"><p>Texto da seção 'Sobre' :</p>
                                <samp>
                                    <p>Usar as tags {{ '<p>' }} e {{ '</p>' }} para quebra de linha</p>
                                </samp>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                             {!! Form::textarea('about_experience', Request::old('about_experience') ?: $textEnglish->about_experience , ['id' => 'about_experience', 'rows' => 10, 'cols' => 54, 'style' => 'resize:yes', 'class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('about_conclusion') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="about_conclusion"><p>Texto da seção 'Sobre' :</p>
                                <samp>
                                    <p>Usar as tags {{ '<p>' }} e {{ '</p>' }} para quebra de linha</p>
                                </samp>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                             {!! Form::textarea('about_conclusion', Request::old('about_conclusion') ?: $textEnglish->about_conclusion , ['id' => 'about_conclusion', 'rows' => 10, 'cols' => 54, 'style' => 'resize:yes', 'class'=>'form-control']) !!}
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('service_1') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="service_1"><p>Texto da seção 'Serviços' :</p>
                                <samp>
                                    <p>Usar as tags {{ '<p>' }} e {{ '</p>' }} para quebra de linha</p>
                                </samp>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                             {!! Form::textarea('service_1', Request::old('service_1') ?: $textEnglish->service_1 , ['id' => 'service_1', 'rows' => 7, 'cols' => 54, 'style' => 'resize:yes', 'class'=>'form-control']) !!}
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('service_2') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="service_2"><p>Texto da seção 'Serviços' :</p>
                                <samp>
                                    <p>Usar as tags {{ '<p>' }} e {{ '</p>' }} para quebra de linha</p>
                                </samp>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                             {!! Form::textarea('service_2', Request::old('service_2') ?: $textEnglish->service_2 , ['id' => 'service_2', 'rows' => 7, 'cols' => 54, 'style' => 'resize:yes', 'class'=>'form-control']) !!}
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('service_3') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="service_3"><p>Texto da seção 'Serviços' :</p>
                                <samp>
                                    <p>Usar as tags {{ '<p>' }} e {{ '</p>' }} para quebra de linha</p>
                                </samp>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                             {!! Form::textarea('service_3', Request::old('service_3') ?: $textEnglish->service_3 , ['id' => 'service_3', 'rows' => 7, 'cols' => 54, 'style' => 'resize:yes', 'class'=>'form-control']) !!}
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('service_4') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="service_4"><p>Texto da seção 'Serviços' :</p>
                                <samp>
                                    <p>Usar as tags {{ '<p>' }} e {{ '</p>' }} para quebra de linha</p>
                                </samp>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                             {!! Form::textarea('service_4', Request::old('service_4') ?: $textEnglish->service_4 , ['id' => 'service_4', 'rows' => 7, 'cols' => 54, 'style' => 'resize:yes', 'class'=>'form-control']) !!}
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('service_5') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="service_5"><p>Texto da seção 'Serviços' :</p>
                                <samp>
                                    <p>Usar as tags {{ '<p>' }} e {{ '</p>' }} para quebra de linha</p>
                                </samp>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                             {!! Form::textarea('service_5', Request::old('service_5') ?: $textEnglish->service_5 , ['id' => 'service_5', 'rows' => 7, 'cols' => 54, 'style' => 'resize:yes', 'class'=>'form-control']) !!}
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('service_6') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="service_6"><p>Texto da seção 'Serviços' :</p>
                                <samp>
                                    <p>Usar as tags {{ '<p>' }} e {{ '</p>' }} para quebra de linha</p>
                                </samp>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                             {!! Form::textarea('service_6', Request::old('service_6') ?: $textEnglish->service_6 , ['id' => 'service_6', 'rows' => 7, 'cols' => 54, 'style' => 'resize:yes', 'class'=>'form-control']) !!}
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('service_7') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="service_7"><p>Texto da seção 'Serviços' :</p>
                                <samp>
                                    <p>Usar as tags {{ '<p>' }} e {{ '</p>' }} para quebra de linha</p>
                                </samp>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                             {!! Form::textarea('service_7', Request::old('service_7') ?: $textEnglish->service_7 , ['id' => 'service_7', 'rows' => 7, 'cols' => 54, 'style' => 'resize:yes', 'class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('schedule') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-6" for="schedule">Contato <span class="required"> :</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="schedule" value="{{ Request::old('schedule') ?: $textEnglish->schedule }}" id="schedule" name="schedule" class="form-control" required>
                                @if ($errors->has('schedule'))
                                <span class="help-block">{{ $errors->first('schedule') }}</span>
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