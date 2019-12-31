@auth
	@if($chats)
        @foreach ($chats as $chat)
            <hr>
            <div class="col-lg-6">
                <div class="row lt-al">
                    <strong class="blue">{{ $chat->author }}</strong>
                </div>
                <div class="row light-bg tlbr-10 trbr-10 blbr-10 pt-20  pb-20 pull-left">
                    <p class="lt-al ml-20 pl-10 white">
                        <strong>
                            {{ $chat->message }}
                        </strong>
                    </p>
                </div> 
            </div>
            <hr>              
        @endforeach
    @endif		
@endauth