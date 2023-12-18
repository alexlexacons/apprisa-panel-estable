@extends('layouts.master')
@section('activacionDesactivacionCliente')
@include('layouts.head')
@include('layouts.sidebar')
<!-- Modal de Confirmación de Rechazo -->
<div class="modal fade" id="confirmacionRechazoModal" tabindex="-1" role="dialog" aria-labelledby="confirmacionRechazoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmacionRechazoModalLabel">Confirmar Desactivacion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Estás seguro de que quieres desactivar este cliente?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger">Desactivar</button>
        </div>
      </div>
    </div>
  </div>


<!-- Modal de Confirmación de Aprobación -->
<div class="modal fade" id="confirmacionAprobacionModal" tabindex="-1" role="dialog" aria-labelledby="confirmacionAprobacionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmacionAprobacionModalLabel">Confirmar Activacion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Estás seguro de que quieres activar este cliente?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Activar</button>
        </div>
      </div>
    </div>
  </div>


<!-- Modal de Detalles -->
<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="detallesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detallesModalLabel">Detalles del cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Ejemplos de información detallada -->
          <div class="form-group">
            <label for="detalle1">Detalle 1:</label>
            <input type="text" class="form-control" id="detalle1" value="Información del Detalle 1">
          </div>
          <div class="form-group">
            <label for="detalle2">Detalle 2:</label>
            <input type="text" class="form-control" id="detalle2" value="Información del Detalle 2">
          </div>
          <div class="form-group">
            <label for="detalle3">Detalle 3:</label>
            <textarea class="form-control" id="detalle3">Información adicional del Detalle 3</textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>



<section id="content">
    @include('layouts.nav')

    <main>
        <div class="head-title">
            <div class="left">
                <h1>Activar cuentas de clientes</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Panel</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Activar una cuenta de cliente</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download' ></i>
                <span class="text">Descargar PDF</span>
            </a>
        </div>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Tablas de datos</h3>
                    <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Localizacion</th>
                            <th>Documentacion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Ejemplo</p>
                            </td>
                            <td>01-10-2021</td>
                            <td>Ejemplo de localizacion</td>
                            <td>Documentacion</td>
                            <td>
                                <a href="#" class="status completed" data-toggle="modal" data-target="#confirmacionAprobacionModal">Activar</a>
                                <a href="#" class="status process" data-toggle="modal" data-target="#detallesModal">Ver detalles</a>
                                <a href="#" class="status pending" data-toggle="modal" data-target="#confirmacionRechazoModal">Desactivar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</section>
@endsection
