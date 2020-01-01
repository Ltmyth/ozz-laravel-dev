@auth
	@if($chats)
        <div class="col-lg-12 col-sm-12">
            <hr>
            @foreach ($chats as $chat)
                <div class="row">
                    @if($user)
                        @if($chat->author == $user)
                            <div class="row col-lg-8 pull-left">
                                <h4>                        
                                    <strong class="blue">
                                        {{ 'You' }}                                
                                    </strong>                        
                                    &nbsp;
                                    <small>
                                        <i class="black fz-8">
                                            {{ $chat->created_at->diffForHumans() }}
                                        </i>
                                    </small>
                                </h4>
                            </div>
                            <div class="row light-bg col-lg-6 brbr-10 trbr-10 blbr-10 pt-20  pb-20 pull-left">
                                <p class="lt-al ml-20 pl-10 white">
                                    <strong>
                                        {{ $chat->message }}
                                    </strong>
                                </p>
                            </div>
                        @else 
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div class="row">  
                                    <h4>                
                                        <strong class="blue">
                                            {{$chat->author}}                              
                                        </strong>                        
                                        &nbsp;
                                        <small>
                                            <i class="black fz-8">
                                                {{ $chat->created_at->diffForHumans() }}
                                            </i>
                                        </small>
                                    </h4>
                                </div>
                                <div class="row blue-bg brbr-10 tlbr-10 blbr-10 pt-20  pb-20">
                                    <p class="lt-al ml-20 pl-10 white">
                                        <strong>
                                            {{ $chat->message }}
                                        </strong>
                                    </p>
                                </div>
                            </div>                            
                        @endif
                    @endif 
                </div> 
                <hr>               
            @endforeach            
        </div>
    @endif		
@endauth