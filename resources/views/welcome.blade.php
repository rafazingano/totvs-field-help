<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Totvs</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Admin</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="title">Formulário teste</h1>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container form_welcome">
                <div class="row">
                    <form>
                        @foreach($forms as $form)
                            <div class="col-sm-6 form-input">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ $form->label }}</label>
                                    <input type="{{ $form->type }}" class="form-control" name="{{ $form->name }}"  id="{{ $form->name }}"  placeholder="{{ $form->label }}">
                                    @if($form->video)
                                    <small id="emailHelp" class="form-text text-muted float-right" style="float: right;">
                                        <a href="#" data-toggle="modal" style="font-weight: 500;" data-target="#exampleModal" data-whatever="{{ $form->video['url'] }}" data-whatevertitle="{{ $form->video['title'] }}">Saiba mais</a>
                                    </small>
                                    @endif
                                </div>
                            </div>
                      @endforeach
                      <div class="col-sm-12">
                          <button type="submit" class="btn btn-primary float-right">Submit</button>
                      </div>
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Video</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2Qyd13E2jW0" allowfullscreen></iframe>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/welcome.js') }}"></script>
    </body>
</html>
