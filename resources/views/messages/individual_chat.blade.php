@auth
	
	<div class="container">
		<hr>
        <div class="row">
            <div  class="col-lg-6">
                @if($received_texts)
                    @foreach ($received_texts as $received)
                        <div class=" row">
                            <div class="col-lg-2">
                                <a href="#">
                                    <img 
                                        id="profile-pic" 
                                        class="theme w-50" 
                                        src="{{ asset('/imgs/ozz-app.png') }}"
                                        alt="Avator" 
                                    >
                                </a>
                            </div>

                            <div class="col-lg lt-al">
                                <h3><strong>{{ $received->author }}</strong></h3>
                            </div>
                        </div>

                        <div class="row trbr-10 brbr-10 blbr-10 pt-20  pb-20 light-bg">
                            <h4 class="ml-20 pl-10 white">{{ $received->message }}</h4>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        
        <hr>
        <div class="row">
            @if($sent_texts)
                @foreach ($sent_texts as $sent)
                    <div class="col-lg-5">               
                    </div> 
                    <div class="col-lg-7 br-10 pt-20 pb-20 pr-10">
                        <div class="row light-bg tlbr-10 trbr-10 blbr-10 pt-20  pb-20">
                            <p class="lt-al ml-20 pl-10 white">
                                <strong>
                                    {{ $sent->message }}
                                </strong>
                            </p>
                        </div>
                        <div class="row tlbr-10 trbr-10 blbr-10 pt-20 float-sm-right">
                            <p class="mr-20 pr-10 black"><strong>You</strong></p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        
    	<hr>
	</div>
@endauth