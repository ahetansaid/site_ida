@extends('admin.layouts.templates')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des Demandes d'Adhésion</h1>
        <a href="{{ route('admin.membership_requests.statistics') }}" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
            <i class="fas fa-chart-bar fa-sm text-white-50"></i> Statistiques
        </a>
    </div>

    <!-- Alert Messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Filters -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Filtres</h6>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('admin.membership_requests.index') }}" class="row">
                <div class="col-md-3">
                    <label for="status">Statut</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">Tous les statuts</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>En attente</option>
                        <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approuvée</option>
                        <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Refusée</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="type">Type</label>
                    <select name="type" id="type" class="form-control">
                        <option value="">Tous les types</option>
                        <option value="member" {{ request('type') == 'member' ? 'selected' : '' }}>Membre</option>
                        <option value="volunteer" {{ request('type') == 'volunteer' ? 'selected' : '' }}>Volontaire</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="search">Recherche</label>
                    <input type="text" name="search" id="search" class="form-control" placeholder="Nom, email..." value="{{ request('search') }}">
                </div>
                <div class="col-md-3">
                    <label>&nbsp;</label>
                    <div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i> Filtrer
                        </button>
                        <a href="{{ route('admin.membership_requests.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Réinitialiser
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Liste des Demandes d'Adhésion</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Actions :</div>
                    <a class="dropdown-item" href="{{ route('admin.membership_requests.statistics') }}">
                        <i class="fas fa-chart-bar fa-sm fa-fw mr-2 text-gray-400"></i>Voir les statistiques
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Statut</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($requests as $request)
                        <tr>
                            <td>{{ $request->id }}</td>
                            <td>
                                <strong>{{ $request->full_name }}</strong><br>
                                <small class="text-muted">{{ $request->profession }}</small>
                            </td>
                            <td>{{ $request->email }}</td>
                            <td>
                                <span class="badge badge-{{ $request->type == 'member' ? 'primary' : 'success' }}">
                                    {{ $request->type_label }}
                                </span>
                            </td>
                            <td>
                                @if($request->status == 'pending')
                                    <span class="badge badge-warning">{{ $request->status_label }}</span>
                                @elseif($request->status == 'approved')
                                    <span class="badge badge-success">{{ $request->status_label }}</span>
                                @else
                                    <span class="badge badge-danger">{{ $request->status_label }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $request->created_at->format('d/m/Y H:i') }}<br>
                                <small class="text-muted">{{ $request->created_at->diffForHumans() }}</small>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.membership_requests.show', $request) }}" class="btn btn-sm btn-info" title="Voir">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    @if($request->status == 'pending')
                                        <button type="button" class="btn btn-sm btn-success" title="Approuver" onclick="approveRequest({{ $request->id }})">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger" title="Refuser" onclick="rejectRequest({{ $request->id }})">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    @endif
                                    <form action="{{ route('admin.membership_requests.destroy', $request) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette demande ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Supprimer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Aucune demande d'adhésion trouvée</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $requests->links() }}
            </div>
        </div>
    </div>
</div>

<!-- Modal pour approuver -->
<div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="approveModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="approveModalLabel">Approuver la demande</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="approveForm" method="POST">
                @csrf
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir approuver cette demande d'adhésion ?</p>
                    <div class="form-group">
                        <label for="admin_notes">Notes (optionnel)</label>
                        <textarea class="form-control" id="admin_notes" name="admin_notes" rows="3" placeholder="Ajoutez des notes si nécessaire..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success">Approuver</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal pour refuser -->
<div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="rejectModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rejectModalLabel">Refuser la demande</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="rejectForm" method="POST">
                @csrf
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir refuser cette demande d'adhésion ?</p>
                    <div class="form-group">
                        <label for="reject_notes">Motif du refus *</label>
                        <textarea class="form-control" id="reject_notes" name="admin_notes" rows="3" placeholder="Expliquez les raisons du refus..." required></textarea>
                        <small class="form-text text-muted">Ce message sera envoyé au candidat par email.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-danger">Refuser</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function approveRequest(id) {
    document.getElementById('approveForm').action = `/admin/membership-requests/${id}/approve`;
    $('#approveModal').modal('show');
}

function rejectRequest(id) {
    document.getElementById('rejectForm').action = `/admin/membership-requests/${id}/reject`;
    $('#rejectModal').modal('show');
}
</script>
@endsection 