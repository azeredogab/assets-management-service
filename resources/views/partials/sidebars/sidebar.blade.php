<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Alexander Pierce</p>
      <!-- Status -->
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="/"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
    <li class="treeview">
      <a href="processments/"><i class="fa fa-link"></i> <span>Projetos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="projects/"><i class="fa fa-picture-o"></i>Listar Projetos</a></li>
        <li><a href="projects/add/"><i class="fa fa-picture-o"></i>Adicionar Projeto</a></li>
        <li><a href="projects/processments/"><i class="fa fa-picture-o"></i>Processar Imagem</a></li>
        <li><a href="projects/processments/configs/"><i class="fa fa-gears"></i>Configurações</a></li>
      </ul>
    </li>
    
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
