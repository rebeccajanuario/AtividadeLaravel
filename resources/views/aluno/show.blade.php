@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-lg-6">
                <label class="form-label">RA</label>
                <input type="text" class="form-control" name="ra" id="ra" value="{{$aluno->ra}}">
            </div>
        </div>
        <div class="col-lg-6">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control-plaintext" name="nome" id="nome" value="{{$aluno->nome}}">
        </div>
        <div class="col-lg-6">
            <label class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control-plaintext" name="dtNascto" id="dtNascto" value="{{$aluno->dtNascto}}">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <label class="form-label">Telefone</label>
            <input type="text" class="form-control-plaintext" name="telefone" id="telefone" value="{{$aluno->telefone}}">
        </div>
        <div class="col-lg-6">
            <label class="form-label">Responsável</label>
            <input type="text" class="form-control-plaintext" name="responsavel" id="responsavel" value="{{$aluno->responsavel}}">
        </div>
        <div class="col-lg-6">
            <label class="form-label">Turma</label>
            <input type="text" class="form-control-plaintext" name="turma" id="turma" value="{{$aluno->turma}}">
        </div>
    </div>
    </form>
</div>
@endsection
