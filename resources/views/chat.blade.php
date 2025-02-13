<x-header/>
<main class="float-start w-100 body-sections spn-pading">
    <div class="reply-div05s d-inline-block w-100">
        <div class="container">
            <div class="d-flex align-items-center w-100 justify-content-between">
                <h4 class="view-alls01"> View All Messages <span id="messageCount">({{ count($messages) }})</span></h4>
                <a href="#replymain" class="btn alli-btn reaply-btn"> Reply </a>
            </div>

            <div class="rely-alls w-100 mt-4">
                <div class="rely-alls w-100 mt-4 bg-white p-3" id="messageContainer">
                    @foreach($messages as $message)
                        <div class="comon-replys w-100">
                            <div class="tops-sctions-div d-flex align-items-start">
                                <figure class="m-0">
                                    <img src="{{ asset('images/manages-st4.jpg') }}" alt="sm"/>
                                </figure>
                                <div class="rights01 w-100 ms-3">
                                    <h5>{{ $message->sender_name }}</h5>
                                    <p class="mt-1">{{ $message->content }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="comoun05 reply-divu w-100 bg-light p-4 mt-3 rounded-2" id="replymain">
                <form id="messageForm">
                    @csrf
                    <div class="tops-sctions-div d-flex align-items-start">
                        <figure class="m-0">
                            <img src="{{ asset('images/manages-st4.jpg') }}" alt="sm"/>
                        </figure>
                        <div class="comments-div05 ms01-but05 ms-lg-auto">
                            <textarea class="texrt-div04 form-control" name="content" id="messageContent" required></textarea>
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
</main>
<x-footer/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Send message via AJAX
        $('#messageForm').submit(function(e) {
            e.preventDefault();
            let content = $('#messageContent').val();
            let url = "{{ route('chat.send', $appointment->id) }}";

            $.ajax({
                url: url,
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    content: content
                },
                success: function(response) {
                    if (response.message) {
                        let newMessage = `
                            <div class="comon-replys w-100">
                                <div class="tops-sctions-div d-flex align-items-start">
                                    <figure class="m-0">
                                        <img src="{{ asset('images/manages-st4.jpg') }}" alt="sm"/>
                                    </figure>
                                    <div class="rights01 w-100 ms-3">
                                        <h5>${response.sender_name}</h5>
                                        <p class="mt-1">${response.message.content}</p>
                                    </div>
                                </div>
                            </div>`;
                        
                        $('#messageContainer').append(newMessage);
                        $('#messageContent').val('');
                        let currentCount = parseInt($('#messageCount').text().match(/\d+/)[0]);
                        $('#messageCount').text(`(${currentCount + 1})`);
                    }
                },
                error: function(xhr) {
                    alert(xhr.responseJSON.error);
                }
            });
        });

        // Fetch new messages periodically
        function fetchMessages() {
            $.ajax({
                url: "{{ route('chat.show', $appointment->id) }}",
                type: "GET",
                success: function(response) {
                    let messagesHtml = '';
                    response.messages.forEach(function(message) {
                        messagesHtml += `
                            <div class="comon-replys w-100">
                                <div class="tops-sctions-div d-flex align-items-start">
                                    <figure class="m-0">
                                        <img src="{{ asset('images/manages-st4.jpg') }}" alt="sm"/>
                                    </figure>
                                    <div class="rights01 w-100 ms-3">
                                        <h5>${message.sender_name}</h5>
                                        <p class="mt-1">${message.content}</p>
                                    </div>
                                </div>
                            </div>`;
                    });

                    $('#messageContainer').html(messagesHtml);
                    $('#messageCount').text(`(${response.messages.length})`);
                }
            });
        }

        setInterval(fetchMessages, 3000);
    });
</script>