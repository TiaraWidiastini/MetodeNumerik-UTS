<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
           
            <span class="ms-1 font-weight-bold text-white">METODE NUMERIK</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
           
            <li class="nav-item">
                <a class="{{(request()->routeIs('bagidua'))? 'active bg-gradient-warning' : ''}} nav-link text-white" href="{{route('bagidua')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                       
                    </div>
                    <span class="nav-link-text ms-1">Metode Bagi Dua</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="{{(request()->routeIs('regulafalsi'))? 'active bg-gradient-warning' : ''}} nav-link text-white" href="{{route('regulafalsi')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                       
                    </div>
                    <span class="nav-link-text ms-1">Metode Regula Falsi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="{{(request()->routeIs('titiktetap'))? 'active bg-gradient-warning' : ''}} nav-link text-white" href="{{route('titiktetap')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        
                    </div>
                    <span class="nav-link-text ms-1">Metode Titik Tetap</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="{{(request()->routeIs('newtonrapshon'))? 'active bg-gradient-warning' : ''}} nav-link text-white" href="{{route('newtonrapshon')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                       
                    </div>
                    <span class="nav-link-text ms-1">Metode Newton Rapshon</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="{{(request()->routeIs('secant'))? 'active bg-gradient-warning' : ''}} nav-link text-white" href="{{route('secant')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        
                    </div>
                    <span class="nav-link-text ms-1">Metode Secant</span>
                </a>
            </li>
          
           
        </ul>
    </div>
    
</aside>