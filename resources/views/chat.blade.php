<x-header/>
<div class="container">
    <h3>Chat Panel</h3>
    <div class="row">
        <!-- User List -->
        <div class="col-md-4">
            <ul class="list-group" id="userList">
                @foreach($appointments as $appointment)
                    <li class="list-group-item user-item" data-user-id="{{ $appointment->user_id }}"
                    data-appointment-id="{{ $appointment->id }}" >
                        {{ $appointment->user_name }}
                    </li>
                @endforeach
            </ul>
        </div>
        
        <!-- Chat Box -->
        <div class="col-md-8">
            <div class="chat-box" id="chatBox">
                <div id="messages"></div>
            </div>
            <form id="chatForm" action="{{ route('chat.send', ['appointment_id' => $appointment->id]) }}" method="POST">
                @csrf
                 <input type="hidden" name="appointment_id" id="appointmentId">
                 <input type="hidden" name="receiver_id" id="receiverId">
                <input type="text" name="message" id="message" required>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</div>
<x-footer/>

<script>
   document.querySelectorAll('.user-item').forEach(item => {
    item.addEventListener('click', function() {
        let userId = this.getAttribute('data-user-id');
        let appointmentId = this.getAttribute('data-appointment-id');

        document.getElementById('receiverId').value = userId;
        document.getElementById('appointmentId').value = appointmentId;

        // Dynamically update form action
        document.getElementById('chatForm').action = `/chat/${appointmentId}/send`;

        fetchMessages(userId);
    });
});


    function fetchMessages(userId) {
        fetch(`/chat/messages/${userId}`)
            .then(response => response.json())
            .then(data => {
                let messagesDiv = document.getElementById('messages');
                messagesDiv.innerHTML = '';
                data.forEach(msg => {
                    messagesDiv.innerHTML += `<p><strong>${msg.sender}:</strong> ${msg.message}</p>`;
                });
            });
    }
</script>
