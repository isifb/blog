<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Blog Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Inicio<span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-right">
              <li class="navbar-item">
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#crearPost">Crear entrada</a>
              </li>
          </ul>
        </div>
    </div>
</nav>