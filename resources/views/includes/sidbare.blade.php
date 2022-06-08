
<aside class="main-sidebar sidebar-dark-primary elevation-3 ">


    <img src="{{asset('images/logo2.jpg')}}"  class="im">
    <style>

       .im  {

    border-radius: 50%;
    border-left: 5px solid #efefef;
    border-right: 5px solid #efefef;
    border-bottom: 5px solid #efefef;
    border-top: 5px solid transparent;

          }
    </style>

    <div class="sidebar pb-4 mb-4 ">

      <nav class="mt-0" >
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item dropdown">
                <a href="{{route('dashbord')}}" class="nav-link nav-home">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Accueil
                  </p>
                </a>
              </li>
            <li class="nav-item">
            <a href="#" class="nav-link nav-edit_user">
              <i class="fa fa-users"></i>
              <p>
                Patients
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('patient.store')}}" class="nav-link nav-new_user tree-item">
                    <i class="fa fa-list"></i>
                  <p>Liste des patients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('patient.create')}}" class="nav-link nav-user_list tree-item">
                  <i class="fa fa-plus"></i>
                  <p>Ajouter un patient</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_user">
                <i class="fa-brands fa-servicestack"></i>
              <p>
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('service.store')}}" class="nav-link nav-user_list tree-item">
                    <i class="fa fa-solid fa fa-bars-staggered"></i>
                  <p>List  services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('service.create')}}" class="nav-link nav-new_user tree-item">
                    <i class="fa fa-plus"></i>
                  <p>ajouter service</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_user">
                <i class="fa-solid fa-stethoscope"></i>
              <p>
                Médecin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('medecin.store')}}" class="nav-link nav-user_list tree-item">
                    <i class="fa fa-list"></i>
                  <p>List  médecin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('medecin.create')}}" class="nav-link nav-new_user tree-item">
                    <i class="fa fa-plus"></i>
                  <p>ajouter médecin</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_user">
                <i class="fa-solid fa-location-dot"></i>
              <p>
                Rendez vous
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('rendevou.store')}}" class="nav-link nav-user_list tree-item">
                    <i class="fa fa-list"></i>
                  <p>List rendez vous</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('rendevou.create')}}" class="nav-link nav-new_user tree-item">
                    <i class="fa fa-plus"></i>
                  <p>ajouter rendez vous</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_user">
                <i class="fa-solid fa-viruses"></i>
              <p>
                Pathologie
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('patologie.store')}}" class="nav-link nav-user_list tree-item">
                    <i class="fa fa-list"></i>
                  <p>List  pathologie</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('patologie.create')}}" class="nav-link nav-new_user tree-item">
                    <i class="fa fa-plus"></i>
                  <p>ajouter  pathologie</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_user">
                <i class="fa-solid fa-microscope"></i>
              <p>
                Examen
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('examen.store')}}" class="nav-link nav-user_list tree-item">
                    <i class="fa fa-list"></i>
                  <p>List examen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('examen.create')}}" class="nav-link nav-new_user tree-item">
                    <i class="fa fa-plus"></i>
                  <p>ajouter examen</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_user">
                <i class="fa-solid fa-paste"></i>
              <p>
                Ordonnance
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link nav-user_list tree-item">
                    <i class="fa fa-list"></i>
                  <p>List ordenance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link nav-new_user tree-item">
                    <i class="fa fa-plus"></i>
                  <p>ajouter oredenance</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_user">
                <i class="fa-solid fa-capsules"></i>
              <p>
                Médicament
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('medicament.store') }}" class="nav-link nav-user_list tree-item">
                    <i class="fa fa-list"></i>
                  <p>List  medicament</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('medicament.create') }}" class="nav-link nav-new_user tree-item">
                    <i class="fa fa-plus"></i>
                  <p>ajouter medicament</p>
                </a>
              </li>

            </ul>
          </li>
        </ul>
      
      </nav>
    </div>
  </aside>


  <script>

  	$(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      if(s!='')
        page = page+'_'+s;
  		if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}

  	})

</script>





