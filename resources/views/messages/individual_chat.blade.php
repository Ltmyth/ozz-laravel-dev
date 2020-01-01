@auth
	@if($chats)
        <div class="col-lg-12 col-sm-12">
            <hr>
            @foreach ($chats as $chat)
                <div class="row">
                    <div class="row col-lg-6 pull-left">
                        @if($user)
                        <strong class="blue">
                            @if($chat->author == $user)
                                {{ 'You' }}
                            @else                        
                                {{ $chat->author }}
                            @endif
                        </strong>
                        @endif
                    </div>
                    <div class="row light-bg col-lg-6 tlbr-10 trbr-10 blbr-10 pt-20  pb-20 pull-left">
                        <p class="lt-al ml-20 pl-10 white">
                            <strong>
                                {{ $chat->message }}
                            </strong>
                        </p>
                    </div> 
                </div> 
                <hr>               
            @endforeach            
        </div>
    @endif		
@endauth