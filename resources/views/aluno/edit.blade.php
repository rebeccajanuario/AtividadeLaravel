@extends('layouts.default')
@section('content')
<div class="container">
<form action="{{route('aluno.update', $aluno->id)}}" method="post">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <label class="form-label">RA</label>
            <input type="text" class="form-control" name="ra" id="ra" value="{{$aluno->ra}}">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{$aluno->nome}}">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <label class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" name="dtNascto" id="dtNascto" value="{{aluno->dtNascto}}">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <label class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone" value="{{$aluno->telefone}}">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <label class="form-label">Responsável</label>
            <input type="text" class="form-control" name="responsavel" id="responsavel" value="{{$aluno->responsavel}}">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <label class="form-label">Turma</label>
            <input type="text" class="form-control" name="turma" id="turma" value="{{$aluno->turma}}">
        </div>
    </div>
    <div class="row">
        <div class="d-grid gap-2 col-6 mx-auto">
            <input type="submit" class="btn btn-success" value="Salvar">
        </div>
    </div>
    </form>
</div>
@endsection
