<!-- navbar-->
<nav class="navbar navbar-inverse margembtm">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Estoque de Carteiras</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/produtos">Carteiras <span class="sr-only">(current)</span></a></li>
        <li><a href="/referencias">Referencias</a></li>
        <li><a href="/tipodecouros">Tipo De Couros</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/produtos/novo">Carteiras</a></li>
            <li><a href="/referencias/novo">Referencias</a></li>
            <li><a href="/tipodecouros/novo">Couros</a></li>
          
          </ul>
        </li>

      </ul>

      
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
           
            <li><a href="/auth/logout">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- fim Navbar -->

@yield('menu')
