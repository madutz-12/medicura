<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MédicoAdm</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('src/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('src/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('src/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('src/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('src/assets/images/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('src/datatables/dataTables.bootstrap4.min.css') }}">
  
  <style>
    .table td {
      max-width: 200px;
      word-wrap: break-word;
      white-space: normal;
    }
    th {
      color: white;
      background: #4B49AC;
    }
    .btn-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }
  </style>
  
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- DataTables -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
  
  <script>
    var $jq = jQuery.noConflict();
    $jq(document).ready(function () {
      $jq('#dataTable').DataTable({
        "pageLength": 5,
        "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "Todos"]],
        "language": {
          "lengthMenu": "Mostrar _MENU_ registros por página",
          "zeroRecords": "No se encontraron registros",
          "info": "Mostrando página _PAGE_ de _PAGES_",
          "infoEmpty": "No hay registros disponibles",
          "infoFiltered": "(filtrado de _MAX_ registros totales)",
          "paginate": {
            "previous": "Anterior",
            "next": "Siguiente"
          }
        }
      });
    });
  </script>
</head>
<body>
  <div class="container-scroller">
    <?php //include '../src/components/_navbar.php'; ?>
    <div class="container-fluid page-body-wrapper">
      <?php //include '../src/components/_sidebar.php'; ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Médicos registrados</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nombre</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>
                      <th>Cédula</th>
                      <th>Especialidad</th>
                      <th>Email</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($doctores as $doctore)
                      <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $doctore->nombre }}</td>
                        <td>{{ $doctore->apellidoPaterno }}</td>
                        <td>{{ $doctore->apellidoMaterno }}</td>
                        <td>{{ $doctore->Cedula }}</td>
                        <td>{{ $doctore->especialidad }}</td>
                        <td>{{ $doctore->email }}</td>
                        <td>
                          <form action="{{ route('doctores.destroy', $doctore->id) }}" method="POST">
                            <a class="btn btn-sm btn-primary" href="{{ route('doctores.show', $doctore->id) }}">
                              <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                            </a>
                            <a class="btn btn-sm btn-success" href="{{ route('doctores.edit', $doctore->id) }}">
                              <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                            </a>
                            <a class="btn btn-sm btn-danger" href="{{ route('doctores.destroy', $doctore->id) }}">
                              <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                            </a>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <?php //include '../src/components/_footer.php' ?>
      </div>
    </div>
  </div>
  
  <!-- scripts -->
  <script src="{{ asset('src/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('src/off-canvas.js') }}"></script>
  <script src="{{ asset('src/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('src/template.js') }}"></script>
  <script src="{{ asset('src/settings.js') }}"></script>
  <script src="{{ asset('src/todolist.js') }}"></script>
</body>
</html>