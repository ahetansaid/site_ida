@extends('admin.layouts.templates')
@section('additional-css')
    <link rel="stylesheet" href="{{ asset('plugins/jquery-datatable/datatables.min.css') }}">
@endsection
@section('title')
    Fipa
@endsection
@section('content')
    <div class="row row-sm">
        <div class="col-lg-12">

            @session('error')
                <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                    {{ $value }}
                    <button aria-label="Fermer" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endsession

            @session('success')
                <div class="alert alert-success alert-dismissible fade show my-1" role="alert">
                    {{ $value }}
                    <button aria-label="Fermer" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endsession

            <div class="card custom-card">
                <div class="card-header d-flex justify-content-between align-items-center py-2">
                    <h4 class="my-auto">Liste des projets</h4>
                    <div>
                        <a href="{{ route('admin.fipa.create') }}" class="btn btn-primary mb-3">
                            <span>Ajouter</span> 
                            <i class="si si-notebook"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="notes" class="table table-striped table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center">titres</th>
                                    <th class="text-center">images</th>
                                    <th class="text-center">description</th>
                                    <th class="text-center">date de création</th>
                                    <th class="text-center">date de modification</th>
                                    <th class="text-center">Voir</th>
                                    <th class="text-center">Editer</th>
                                    <th class="text-center">Rétirer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($projets->isEmpty())
                                    <tr>
                                        <td colspan="6" class="text-center">Aucun projet trouvé</td>
                                    </tr>
                                @endif
                                @foreach ($projets as $p)
                                    <tr>
                                        <td class="text-center">{{$p->titre}}</td>
                                        <td class="text-center">{{$p->image}}</td>
                                        <td class="text-center">{{ Str::limit($p->description, 50) }}</td>
                                        <td class="text-center">{{ $p->created_at->format('d/m/Y') }}</td>
                                        <td class="text-center">{{ $p->updated_at->format('d/m/Y') }}</td>
                                        <td class="text-center">
                                            <a class="btn ripple btn-primary editBtn"
                                                href="{{route('admin.fipa.show', $p->id)}}">
                                                <span>voir</span>
                                                <i class="si si-pencil"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn ripple btn-info editBtn"
                                                href="{{route('admin.fipa.edit', $p->id)}}">
                                                <span>Modifier</span>
                                                <i class="si si-pencil"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{route('admin.fipa.destroy', $p)}}" method="POST" style="display: inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce comité ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn ripple btn-danger destroyBtn">Supprimer<i class="si si-trash"></i></button>
                                            </form>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="destroyModal" tabindex="-1" aria-labelledby="destroyModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="destroyModal">Supprimer le p</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <div style="font-size: 100px;" class="text-danger text-center">
                            <i class="si si-exclamation"></i>
                        </div>
                        <div>
                            <p class="text-center" style="font-size: 16px;">ATTENTION! Vous êtes sur le point de supprimer la publication titré <strong id="toDestroyName"></strong> de la liste des publications. Cette action est
                                irréversible.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Poursuivre la suppression</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

