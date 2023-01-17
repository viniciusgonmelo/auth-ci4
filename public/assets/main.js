const messages = document.getElementById('messages');

if (messages) {
  setTimeout(() => {
    messages.remove()
  }, 5000);
}

// const invalid_fields = document.querySelectorAll('.input-error');
//
// if (invalid_fields) {
//   setTimeout(() => {
//     document.querySelectorAll('.validation-error').forEach((div) => {
//       div.remove();
//     });
//   }, 5000);
// }
