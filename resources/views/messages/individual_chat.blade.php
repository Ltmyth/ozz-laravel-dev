@auth
	
	<div class="container">
		<hr>
            @if($chats)
                @foreach ($chats as $chat)
                    <div class="row light-bg tlbr-10 trbr-10 blbr-10 pt-20  pb-20">
                        <p class="lt-al ml-20 pl-10 white">
                            <strong>
                                {{ $chat->message }}
                            </strong>
                        </p>
                    </div>
                    <div class="row tlbr-10 trbr-10 blbr-10 pt-20 float-sm-right">
                        <p class="mr-20 pr-10 blue"><strong>{{ $chat->author }}</strong></p>
                    </div>
                @endforeach
            @endif
    	<hr>
	</div>
@endauth