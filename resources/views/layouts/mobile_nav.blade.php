<nav class="navbar navbar-expand-md navbar-dark blue-bg brbr-10 blbr-10">
    @guest
        <a class="navbar-brand" href="/" onclick="javascript:document.getElementById('preloader').style.display='block';">
    @endguest

    @auth
        <a class="navbar-brand" href="/home" onclick="javascript:document.getElementById('preloader').style.display='block';">
    @endauth
    <!-- 
        <img src="/imgs/ozz-app.png" class="w-10" alt="" title="" /> -->
        <strong class="white"><h3>the<b class="orange">oh</b><b><i>z</i></b></i></h3></strong>
    </a>
    <button class="btn btn-sm btn-outline-warning" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @auth 
            <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="search" placeholder="Search theohz" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" disabled>
                    <i class="lnr lnr-magnifier orange"></i> Search
                </button>
            </form>

            <div class="container">
                <a  href="/messages/{{Auth::user()->name}}" onclick="javascript:document.getElementById('preloader').style.display='block';close_nav();">
                    <button class="btn btn-md btn-outline-warning white">
                        <i class="lnr lnr-envelope orange"></i> Messages
                        <span class="badge badge-danger"></span>
                    </button>
                </a>   

                <a  href="/wallet" onclick="javascript:document.getElementById('preloader').style.display='block';close_nav();">
                    <button class="btn btn-md btn-outline-warning white">
                        <i class="lnr lnr-briefcase orange"></i> Wallet
                        <span class="badge badge-danger"></span>
                    </button>
                </a>
                

                <a class="btn btn-md btn-outline-warning white" href="/home" onclick="javascript:document.getElementById('preloader').style.display='block';close_nav();">
                    <i class="lnr lnr-users orange"></i> <b class="white">People</b> <span class="badge badge-danger"></span>
                </a>


                <a class="btn btn-md btn-outline-warning white" href="/airtime" onclick="javascript:document.getElementById('preloader').style.display='block';close_nav();">
                    <i class="lnr lnr-tablet orange"></i> <b class="white">Airtime</b>
                </a>

                
                <a class="btn btn-md btn-outline-warning white" href="/accommodation" onclick="javascript:document.getElementById('preloader').style.display='block';close_nav();">
                    <b class="white">Accommodation</b>
                </a>

                <a class="btn btn-md btn-outline-warning white" href="/food" onclick="javascript:document.getElementById('preloader').style.display='block';close_nav();">
                    <b class="white">Food</b>
                </a>
                

                <a class="btn btn-md btn-outline-warning white" href="/notification" onclick="javascript:document.getElementById('preloader').style.display='block';">
                    <i class="lnr lnr-alarm orange"></i> 
                    <strong class="white" >Notifications</strong>
                </a>

                <a  href="/profile" onclick="javascript:document.getElementById('preloader').style.display='block';close_nav();">
                    <button class="btn btn-md btn-outline-warning px100 white mb-20">
                        <i class="lnr lnr-user orange"></i> Settings
                        <span class="badge badge-danger"></span>
                    </button>
                </a>           
                
                <a  href="/logout" onclick="javascript:document.getElementById('preloader').style.display='block';close_nav();">
                    <button class="btn btn-sm btn-outline-danger white px100 mb-20 rt">
                        <i class="lnr lnr-cog orange"></i> Logout
                    </button>
                </a>
            </div>
            
            <button class="btn btn-md btn-outline-warning col-lg-8" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="lnr lnr-chevron-up"></span>
            </button>                                         
        @endauth

        @guest
            <!-- <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search theohz" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        @endguest

        <ul class="navbar-nav mr-auto">
            <script type="text/javascript">
                function close_nav(){
                    var link = document.createElement("a");
                    link.setAttribute("data-toggle", "collapse");
                    link.setAttribute("data-target", "#navbarSupportedContent");
                    link.setAttribute("aria-controls", "navbarSupportedContent");
                    link.setAttribute("aria-expanded", "false");
                    link.setAttribute("aria-label", "Toggle navigation");
                    document.body.appendChild(link); // Required for FF

                    link.click(); 
                }
            </script>
            @guest
                <li class="nav-item active">
                    <a class="nav-link" href="/#about" >
                        <button class="btn btn-md btn-outline-warning white col-lg-8 mb-10" onclick="close_nav()" >
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
                    <a class="nav-link" href="/#how">
                        <button class="btn btn-md btn-outline-warning white col-lg-8 mb-10" onclick="close_nav()">
                            Setup
                        </button>
                    </a>
                </li> 

                <li class="nav-item">
                    <a class="nav-link" href="/#pricing" >
                        <button class="btn btn-md btn-outline-warning white col-lg-8 mb-10" onclick="close_nav()">
                            Pricing
                        </button>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/#packs">
                        <button class="btn btn-md btn-outline-warning white col-lg-8 mb-10" onclick="close_nav()">
                            Packages
                        </button>
                    </a>
                </li>                               
            @endguest
        </ul>
    </div>
</nav>