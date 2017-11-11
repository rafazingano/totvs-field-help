@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dashboard Videos 
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#videoModal" style="float:right;">
                      Novo Video
                    </button>
                </div>

                <div class="panel-body">
                    <table id="example" class="display datatable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>URL</th>
                                <th>Campo do formulário</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                               <th>Titulo</th>
                                <th>URL</th>
                                <th>Campo do formulário</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($videos as $video)
                            <tr>
                                <td>{{ $video->title }}</td>
                                <td>{{ $video->url }}</td>
                                <td>{{ $video->form['label'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('home.add') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                      <div class="modal-header">
                        <h5 class="modal-title" id="videoModalLabel">Novo Vídeo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                            <label for="videoInputEmail1">URL do youtube</label>
                            <input type="url" name="url" class="form-control" placeholder="URL do youtube">
                        </div>
                        <div class="form-group">
                            <label for="videoInputEmail1">Titulo vídeo</label>
                            <input type="text" name="title" class="form-control" placeholder="Titulo video">
                        </div>
                        <div class="form-group">
                            <label for="videoInputEmail1">Campo deste video?</label>
                            <select class="form-control" name="form_id">
                                @foreach($forms as $form)
                                    <option value="{{ $form->id }}">{{ $form->label }}</option>
                                @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
