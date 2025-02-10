import './bootstrap';
import Pusher from "pusher-js";

window.Pusher = Pusher;

// Initialize Pusher
const pusher = new Pusher(process.env.MIX_PUSHER_APP_KEY, {
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true
});

// Get user ID from meta tag
const userId = document.head.querySelector('meta[name="user-id"]').content;

if (userId) {
    console.log("User ID:", userId);
    // Use userId for your chat logic (fetch messages, subscribe to updates, etc.)
} else {
    console.log("No user logged in.");
}


if (userId) {  // Only subscribe if userId exists
    const channel = pusher.subscribe("private-chat." + userId);

    channel.bind("MessageSent", (e) => {
        console.log("New message received:", e);

        // Show browser notification
        if (Notification.permission === "granted") {
            new Notification("New Message", {
                body: `New message from ${e.sender_id}: ${e.message}`
            });
        }

        // Display message in chat box
        let messagesDiv = document.getElementById('messages');
        messagesDiv.innerHTML += `<p><strong>${e.sender_id}:</strong> ${e.message}</p>`;

        // Show alert notification
        alert("New message received!");
    });
}

// Request notification permission
if (Notification.permission !== "granted") {
    Notification.requestPermission();
}
