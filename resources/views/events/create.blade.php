@extends('layout.main')
@section('title', 'Criar Eventos')
@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Cadastre seu mangá</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="title">Nome</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="">Data:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="title">Cidade</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
            </div>
            <div class="form-group">
                <label for="title">O evento será privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição</label>
                <textarea name="description" id="description" class="form-control" placeholder="Do que tratará o evento?"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Adicione tags:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Lançamento"> Lançamento
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Reimpressão"> Reimpressão
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Pré-venda"> Pré-venda
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Promoção"> Promoção
                </div>
            </div>
            <input type="submit" id="create-event" class="btn btn-primary" value="Cadastrar Mangá">
        </form>
    </div>

@endsection
