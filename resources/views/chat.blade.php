
<x-header/>
<main class="float-start w-100 body-sections spn-pading">
      <div class="reply-div05s d-inline-block w-100">
            <div class="container">
                <div class="d-flex align-items-center w-100 justify-content-between">
                    <h4 class="view-alls01"> View All Message <span>(3)</span></h4>
                    <a href="#" class="btn alli-btn reaply-btn"> Reply </a>
                </div>
                
                <div class="rely-alls w-100 mt-4">
                   @if(!$messages->isEmpty())
                        <div class="rely-alls w-100 mt-4">
                            @foreach($messages as $message)
                                <div class="comon-replys w-100">
                                    <div class="tops-sctions-div d-flex align-items-center">
                                        <figure class="m-0">
                                            <img src="{{ asset('images/4128176.png') }}" alt="sm"/>
                                        </figure>
                                        <div class="rights01 d-flex align-items-center w-100 justify-content-between ms-2">
                                            <h5>{{ $message->sender_name }}</h5>
                                        </div>
                                    </div>
                                    <div class="comments-div05 ms-lg-auto">
                                        <p class="mt-1">{{ $message->content }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-muted">No messages yet. Start the conversation!</p>
                    @endif


                   <div class="comoun05 reply-divu w-100 bg-light p-4 mt-3 rounded-2">
                       <form action="{{ route('chat.send', $appointment->id) }}" method="POST">
                        @csrf
                        <div class="tops-sctions-div d-flex align-items-start">
                            <figure class="m-0">
                                <img src="{{ asset('images/4128176.png') }}" alt="sm"/>
                            </figure>
                            <div class="comments-div05 ms01-but05 ms-lg-auto">
                                <textarea class="texrt-div04 form-control" name="content" required></textarea>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <button type="submit" class="btn btn-submit"> Submit </button>
                            <button type="reset" class="btn btn-danger cancel01 ms-3"> Cancel </button>
                        </div>
                       </form>
                           
                        
                   </div>
                </div>
            </div>
      </div>
</main>
<x-footer/>