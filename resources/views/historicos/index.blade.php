@extends('adminlte::default')

@section('content')
    <div class="fluid">
        <h1>Históricos</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($historicos as $hist)
                    <tr>
                        <td>{{ $hist->data }}</td>

                        <td>
                            <a href=" {{ route('historicos.edit', ['edit'=>$hist->id]) }}"
                                class="btn-sm btn-success">Editar</a>
                            <a href=" {{ route('historicos.destroy', ['edit'=>$hist->id]) }}"
                                class="btn-sm btn-danger">Remover</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        
    </div>
    @endsection
  