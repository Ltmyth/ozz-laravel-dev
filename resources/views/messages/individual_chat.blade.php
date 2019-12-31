@auth
	<hr>
        @if($chats)
            @foreach ($chats as $chat)
                <div class="row col-lg-6 pull-left">
                    <div class="row light-bg tlbr-10 trbr-10 blbr-10 pt-20  pb-20">
                        <p class="lt-al ml-20 pl-10 white">
                            <strong>
                                {{ $chat->message }}
                            </strong>
                        </p>  
                    </div> 
                    <div class="row">
                        <strong>{{ $chat->author }}</strong>
                    </div>                   
                </div>
            @endforeach
        @endif
	<hr>	
@endauth