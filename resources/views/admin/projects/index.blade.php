@extends('layouts.app')

@section('page-title', 'Tutti i Project')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success mb-5">
                        Tutti i Project!
                    </h1>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Creato il</th>
                            <th scope="col">Azioni</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{$project->id}} </th>
                                <td>{{$project->tile}}</td>
                                <td>{{$project->created_at->format('H:i d/m/Y')}}</td>
                                <td>
                                    <a href="{{route('admin.projects.show', ['project' => $project->id ])}}" class="btn btn-primary ">
                                        PULSANTE
                                    </a>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                    
                    
                

                </div>
            </div>
        </div>
    </div>

    
@endsection