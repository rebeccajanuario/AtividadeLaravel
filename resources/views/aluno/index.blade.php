@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <a href="{{ route('aluno.create')}}" class="btn btn-outline-danger">Novo</a>
          </div>
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">RA</th>
                        <th scope="col">NOME</th>
                        <th scope="col">TURMA</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($alunos as $aluno)
                      <tr>
                        <th scope="row">{{$aluno->ra}}</th>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->turma}}</td>
                        <td><a href="{{ route('aluno.show',$aluno->id)}}" class="btn btn-outline-success">Visualizar</a>
                            &nbsp;
                            <a href="{{ route('aluno.edit',$aluno->id)}}" class="btn btn-outline-info">Editar</a>
                            &nbsp;
                            <a href="{{ route('aluno.delete',$aluno->id)}}" class="btn btn-outline-danger">Excluir</a>
                        </td>
                      </tr>
                      @endforeach
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
