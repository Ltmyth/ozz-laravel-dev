@auth
	<hr>
        @if($chats)
            @foreach ($chats as $chat)
                <div class="row light-bg col-lg-6 tlbr-10 trbr-10 blbr-10 pt-20  pb-20 pull-left">
                    <p class="lt-al ml-20 pl-10 white">
                        <strong>
                            {{ $chat->message }}
                        </strong>
                    </p>
                </div>
                <br>
                <div class="row col-lg-6 tlbr-10 trbr-10 blbr-10 pt-20 pull-left">
                    <p class="mr-20 pr-10 blue"><strong>{{ $chat->author }}</strong></p>
                </div>
            @endforeach
        @endif
	<hr>	
@endauth