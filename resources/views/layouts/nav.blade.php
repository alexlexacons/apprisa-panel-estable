<nav>
    <i class='bx bx-menu' ></i>
    <a href="#" class="nav-link">Categorias</a>
    <form action="#">
        <div class="form-input">
            <input type="search" placeholder="Buscar...">
            <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
        </div>
    </form>
    <input type="checkbox" id="switch-mode" hidden>
    <label for="switch-mode" class="switch-mode"></label>
    <a href="#" class="notification" data-toggle="modal" data-target="#notificacionesModal">
        <i class='bx bxs-bell'></i>
        <span class="num">8</span>
    </a>
    <a href="#" class="profile" data-toggle="modal" data-target="#configuracionCuentaModal">
        <img src="{{ asset('img/people.png') }}">
    </a>
</nav>

<!-- Modal de cuenta-->
<div class="modal fade" id="configuracionCuentaModal" tabindex="-1" role="dialog" aria-labelledby="configuracionCuentaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="configuracionCuentaModalLabel">Configuración de Cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Opciones de configuración de la cuenta -->
        <form>
          <!-- Nombre de usuario -->
          <div class="form-group">
            <label for="userName">Nombre de Usuario</label>
            <input type="text" class="form-control" id="userName" placeholder="Ingrese su nombre de usuario">
          </div>

          <!-- Correo electrónico -->
          <div class="form-group">
            <label for="userEmail">Correo Electrónico</label>
            <input type="email" class="form-control" id="userEmail" placeholder="Ingrese su correo electrónico">
          </div>

          <!-- Contraseña -->
          <div class="form-group">
            <label for="userPassword">Contraseña</label>
            <input type="password" class="form-control" id="userPassword" placeholder="Ingrese su nueva contraseña">
          </div>

          <!-- Preferencias -->
          <div class="form-group">
            <label for="userPreferences">Preferencias</label>
            <select class="form-control" id="userPreferences">
              <option>Preferencia 1</option>
              <option>Preferencia 2</option>
              <option>Preferencia 3</option>
            </select>
          </div>

          <!-- Notificaciones -->
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="emailNotifications">
            <label class="form-check-label" for="emailNotifications">Recibir notificaciones por correo electrónico</label>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="Cerrar" type="button" class="btn btn-secondary " data-dismiss="modal">Cerrar</button>
        <button id="Guardar" type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de Notificaciones -->
<div class="modal fade" id="notificacionesModal" tabindex="-1" role="dialog" aria-labelledby="notificacionesModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="notificacionesModalLabel">Notificaciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Aquí puedes colocar el contenido de tus notificaciones -->
        <ul class="list-group">
          <!-- Ejemplo de una notificación -->
          <li class="list-group-item">Notificación 1</li>
          <li class="list-group-item">Notificación 2</li>
          <!-- Añade más notificaciones según sea necesario -->
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


  