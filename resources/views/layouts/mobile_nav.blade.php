<nav class="navbar navbar-expand-md navbar-dark blue-bg brbr-10 blbr-10">
    <div class="container">
        @guest
            <a class="navbar-brand" href="/" onclick="javascript:document.getElementById('preloader').style.display='block';">
        @endguest

        @auth
            <a class="navbar-brand" href="/home" onclick="javascript:document.getElementById('preloader').style.display='block';">
        @endauth
        <!-- 
            <img src="/imgs/ozz-app.png" class="w-10" alt="" title="" /> -->
            <strong class="white"><h3>the<b class="orange">oh</b><b>z</b></h3></strong>
        </a>
        <button class="btn btn-sm btn-outline-warning" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
    </div>    
    
    <div class="collapse navbar-collapse blue-bg" id="navbarSupportedContent">
        @auth 
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search theohz" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" disabled>
                    <i class="lnr lnr-magnifier orange"></i> Search
                </button>
            </form>

            <a  href="/messages" onclick="javascript:document.getElementById('preloader').style.display='block';">
                <button class="btn btn-md btn-outline-warning white px100 mr-5 mt-20 mb-20">
                    <i class="lnr lnr-envelope orange"></i> Inbox
                </button>
            </a>   

            <a  href="/wallet" onclick="javascript:document.getElementById('preloader').style.display='block';">
                <button class="btn btn-md btn-outline-warning white px100 mr-5 mt-20 mb-20">
                    <i class="lnr lnr-briefcase orange"></i> Wallet
                </button>
            </a>
            

            <a  href="/profile" onclick="javascript:document.getElementById('preloader').style.display='block';">
                <button class="btn btn-md btn-outline-warning white px100 mr-5 mt-20 mb-20">
                    <i class="lnr lnr-user orange"></i> Settings
                </button>
            </a>           
            
            <a  href="/logout" onclick="javascript:document.getElementById('preloader').style.display='block';">
                <button class="btn btn-sm btn-outline-danger white px100 mt-10 mr-20 mb-20 rt">
                    <i class="lnr lnr-cog orange"></i> Logout
                </button>
            </a>  

            <a class="nav-link dropdown-toggle white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button class="btn btn-sm btn-outline-warning">
                    Services
                </button>
            </a>
            <div class="dropdown-menu blue-bg white" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#" onclick="javascript:document.getElementById('preloader').style.display='block';">
                    <b class="white">People</b>
                </a>

                <div class="dropdown-divider"></div>
                
                <a class="dropdown-item" href="accommodation" onclick="javascript:document.getElementById('preloader').style.display='block';">
                    <b class="white">Accommodation</b>
                </a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="food" onclick="javascript:document.getElementById('preloader').style.display='block';">
                    <b class="white">Food</b>
                </a>
                
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="airtime">
                    <b class="white">Airtime</b>
                </a>
            </div>   

            <button class="btn btn-md btn-outline-warning col-lg-8" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="lnr lnr-chevron-up"></span>
            </button>                                         
        @endauth

        @guest
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search theohz" aria-label="Search" disabled>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        @endguest

        <ul class="navbar-nav mr-auto">
            @guest
                <li class="nav-item active">
                    <a class="nav-link" href="/#about">
                        <button class="btn btn-md btn-outline-warning white col-lg-8 mb-10">
                            About Us<span class="sr-only">(current)</span>
                        </button>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/register" onclick="javascript:document.getElementById('preloader').style.display='block';">
                        <button class="btn btn-md btn-outline-info white col-lg-8 mb-10">
                            Register
                        </button>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/login" onclick="javascript:document.getElementById('preloader').style.display='block';">
                        <button class="btn btn-md btn-outline-info white col-lg-8 mb-10">
                            Login
                        </button>
                    </a> 
                </li> 

                <li class="nav-item">
                    <a class="nav-link" href="/#pricing">
                        <button class="btn btn-md btn-outline-warning white col-lg-8 mb-10">
                            Pricing
                        </button>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/#packs">
                        <button class="btn btn-md btn-outline-warning white col-lg-8 mb-10">
                            Packages
                        </button>
                    </a>
                </li> 

                <li class="nav-item">
                    <br>
                    <button class="btn btn-md btn-outline-warning col-lg-8" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="lnr lnr-chevron-up"></span>
                    </button>
                </li>               
            @endguest
        </ul>
    </div>
</nav>