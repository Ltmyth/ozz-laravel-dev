@auth
	<hr>
        @if($chats)
            @foreach ($chats as $chat)
                <div class="pull-left">
                    <strong class="blue">{{ $chat->author }}</strong>
                </div>
                <div class="row light-bg col-lg-6 tlbr-10 trbr-10 blbr-10 pt-20  pb-20 pull-left">
                    <p class="lt-al ml-20 pl-10 white">
                        <strong>
                            {{ $chat->message }}
                        </strong>
                    </p>
                </div>
                <br>                
            @endforeach
        @endif
	<hr>	
@endauth