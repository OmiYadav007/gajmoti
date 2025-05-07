importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-auth.js');

firebase.initializeApp({
    apiKey: "AIzaSyAI6VUiMb8e5Z7zHgkDvg5jB9RwOWVteQM",
    authDomain: "akshayanidhi-jewels-llp.firebaseapp.com",
    projectId: "akshayanidhi-jewels-llp",
    storageBucket: "akshayanidhi-jewels-llp.firebasestorage.app",
    messagingSenderId: "92604339266",
    appId: "1:92604339266:web:cdf98469edc7126b9689db",
    measurementId: "G-TBN5Y67945"
});

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
    return self.registration.showNotification(payload.data.title, {
        body: payload.data.body || '',
        icon: payload.data.icon || ''
    });
});