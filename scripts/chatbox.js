const messageForm = document.getElementById("message-form");
const messageInput = document.getElementById("message-input");
const messages = document.getElementById("messages");

messageForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const message = messageInput.value;
  if (!message) return;

  const messageElement = document.createElement("p");
  messageElement.textContent = message;
  messageElement.classList.add("message");

  messages.appendChild(messageElement);
  messageInput.value = "";
});

const messageElement = document.createElement("p");
messageElement.classList.add("message");

messages.appendChild(messageElement);
