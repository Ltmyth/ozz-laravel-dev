@auth
	@if($chats)
        <div class="col-lg-12 col-sm-12">
            <hr>
            @foreach ($chats as $chat)
                <div class="row">
                    <div class="row">
                        <strong class="blue">{{ $chat->author }}</strong>
                    </div>
                    <div class="row">
                        <div class="light-bg col-lg-6 tlbr-10 trbr-10 blbr-10 pt-20  pb-20 pull-left">
                            <p class="lt-al ml-20 pl-10 white">
                                <strong>
                                    {{ $chat->message }}
                                </strong>
                            </p>
                        </div>
                    </div> 
                </div> 
                <hr>               
            @endforeach            
        </div>
    @endif		
@endauth