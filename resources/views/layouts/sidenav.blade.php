   
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


    @auth
    <!-- <div class="row">
        <button id="colapse-1" style="width:100px;display:none;" onclick="side_toggle()" class="btn btn-md btn-default">
            <i class="glyphicon glyphicon-align-justify"></i>
        </button>
    </div> -->

        <a href="/home">
            <button id="home_btn" class="btn btn-md btn-outline-primary col-lg-2">
                <span class="lnr lnr-users"></span>
                <strong>  
                    People
                </strong>
            </button>
        </a>

       <a href="/accommodation/">
            <button id="accoms_btn" class="btn btn-md btn-outline-primary col-lg-2">
                <span class="lnr lnr-apartment"></span>
                <strong>  
                    Accommodation
                </strong>
            </button>
        </a>

        <a href="/food/">
            <button id="food_btn" class="btn btn-md btn-outline-primary col-lg-2">
                 <span class="lnr lnr-dinner"></span>
               <strong>Food</strong>
            </button>
        </a>

        <a href="/airtime/">
           <button id="at_btn" class="btn btn-md btn-outline-primary col-lg-2">
                <span class="lnr lnr-tablet"></span>
               <strong>Airtime</strong>
           </button>
        </a>

        
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
    <br> 
        