<style type="text/css">
    
    #hostel_btn_list{
        list-style:none;
    }

    #apts_btn_list{
        list-style:none;
    }

    #service_btn_list{
        list-style:none;
        text-align:left;
        padding-left:10px;
    }

    #accoms_list{
        list-style:none;
    }

    /* Sidebar links */
   

    /*icons*/
    .sidebar i {
        color: black;
    }


    .sidebar button {
        width:145px;
    }
    /* Active/current link */
    #active {
      background-color: #34ace0;
      color: white;
    }


    .sidebar button:hover:not(.active) {
      background-color:  black;
      color: white;
    }

    /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }

   #colapse-1{
        width: 100px;
    }
    #colapse-2{
        width: 100px;
    }

    

    /* On screens that are less than 700px wide, make the sidebar into a topbar */
    @media screen and (max-width: 700px) {
        #nav-well div {
            margin-left:0%;
            padding-left:1%;
        }  

    }

    /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }

        #nav-well div button {
            margin-left:0%;
        }

        #nav-well div {
            margin-left:0%;
        }

        #colapse-1{
            margin-top:2%;
        }
    }
</style>

<script type="text/javascript">
    function side_toggle(){
        if(document.getElementById('sidebar').style.display == 'inline-block'){ 
            var x = document.getElementById('sidebar');
            x.setAttribute("style", "display:none");

            var y = document.getElementById('colapse-2');
            y.setAttribute("style", "display:none");

        }else{
            var x = document.getElementById('sidebar');
            x.setAttribute("style", "display:inline-block"); 

            var y = document.getElementById('colapse-2');
            y.setAttribute("style", "display:inline-block");
        }   
    }
   
    function hostel_toggle(){
        if(document.getElementById('hostel_btn_list').style.display == 'inline-block'){ 
            var x = document.getElementById('hostel_btn_list');
            x.setAttribute("style", "display:none");

            var y = document.getElementById('hostel_btn');
            y.setAttribute("style", "display:inline-block");

        }else{
            var x = document.getElementById('hostel_btn_list');
            x.setAttribute("style", "display:inline-block"); 

            var y = document.getElementById('hostel_btn');
            y.setAttribute("style", "display:none");
        }
    }

    function apts_toggle(){
        if(document.getElementById('apts_btn_list').style.display == 'inline-block'){ 
            var x = document.getElementById('apts_btn_list');
            x.setAttribute("style", "display:none");

            var y = document.getElementById('apts_btn');
            y.setAttribute("style", "display:inline-block");

        }else{
            var x = document.getElementById('apts_btn_list');
            x.setAttribute("style", "display:inline-block"); 

            var y = document.getElementById('apts_btn');
            y.setAttribute("style", "display:none");
        }
    }

    function service_toggle(){
        if(document.getElementById('service_btn_list').style.display == 'inline-block'){ 
            var x = document.getElementById('service_btn_list');
            x.setAttribute("style", "display:none");

            var y = document.getElementById('service_btn');
            y.setAttribute("style", "display:inline-block");

        }else{
            var x = document.getElementById('service_btn_list');
            x.setAttribute("style", "display:inline-block"); 

            var y = document.getElementById('service_btn');
            y.setAttribute("style", "display:none");
        }
    }

</script>


<div class="row">
    @auth
    <!-- <div class="row">
        <button id="colapse-1" style="width:100px;display:none;" onclick="side_toggle()" class="btn btn-md btn-default">
            <i class="glyphicon glyphicon-align-justify"></i>
        </button>
    </div> -->

    <div id="sidebar" class="sidebar d-flex justify-content-center contain" style="display:inline-block;">
        <div id="theme" style="margin-left:15%;"  class="col-lg-8 well theme">
            <div id="nav-well"class="container center">
                <!-- <div class="col-md-2">
                    <a href="/home">
                        <button id="home_btn" class="btn btn-md btn-default">
                            <i class="glyphicon glyphicon-house"></i>
                            <strong>  
                                People
                            </strong>
                        </button>
                    </a>    
                </div> -->

               
                <div id="accoms_div" class="col-md-2">
                    <a href="/accommodation/">
                        <button id="accoms_btn" class="btn btn-md btn-default">
                            <strong>  
                                Accommodation
                            </strong>
                        </button>
                    </a>
                </div>
                
                <div class="col-md-2">
                    <a href="/food/">
                        <button id="food_btn" class="btn btn-md btn-default">
                           <strong>Food</strong>
                        </button>
                    </a>
                </div>


                <div class="col-md-2">
                    <a href="/airtime/">
                       <button id="at_btn" class="btn btn-md btn-default">
                           <strong>Airtime</strong>
                       </button>
                    </a>
                </div>

                
                <!-- <div class="col-md-2">
                    <a href="/transport/">
                        <button id="transport_btn" class="btn btn-md btn-default">
                           <strong>Transport</strong>
                        </button>
                    </a> 
                </div> -->

                <!-- <div class="col-md-2">
                    <a href="/cleaning/">
                        <button id="cleaning_btn" class="btn btn-md btn-default">
                           <strong>Cleaning</strong>
                        </button>
                    </a>
                </div> 
                -->
            </div>
        </div>
    </div>
        
            <!-- 
                       <hr>
            <h3>Connect</h3>
            
             -->

        <!-- <div class="row center">
            <button id="colapse-2" style="width:100px;display:none;" onclick="side_toggle()" class="btn btn-md btn-default">
                <i class="glyphicon glyphicon-align-justify"></i>
            </button>
        </div> -->
        @endauth
    </div>
</div>

   