 
<x-header/>
<main class="float-start w-100 body-sections spn-pading">
 <h2>Hello {{ $contractorName }},</h2>
    <p>You just sent a message:</p>
    <blockquote style="background: #f4f4f4; padding: 10px; border-left: 5px solid #333;">
        {{ $messageContent }}
    </blockquote>
    <p>You can check your messages in your account.</p>
    </main>
<x-footer/>