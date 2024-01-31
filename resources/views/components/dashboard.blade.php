<div>
   
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-blank sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="alumno">
                            <i class="fas fa-graduation-cap"></i>
                            Alumno
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="maestro">
                            <i class="fas fa-chalkboard-teacher"></i>
                            Maestro
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-book-open"></i>
                            Curso
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-clipboard-check"></i>
                            Asistencia
                        </a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-award"></i>
                            Calificaciones
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-cogs"></i>
                            Configuración
                        </a>
                    </li>
                    
                </ul>
            </div>
        </nav>

        <!-- Contenido principal -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Bienvenido</h1>
          </div>
      
          <!-- Tarjeta de bienvenida -->
          <div class="card mb-3">
            
          </div>
      
          
          @yield('dashboard-content')
      </main>
      
    </div>
</div>