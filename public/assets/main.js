const messages = document.getElementById('messages');

if (messages) {
  setTimeout(() => {
    messages.remove()
  }, 5000);
}

