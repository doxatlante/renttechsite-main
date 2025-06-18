document.getElementById("loginForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value.trim();
  const error = document.getElementById("errorMessage");

  const user = JSON.parse(localStorage.getItem("user"));

  if (user && user.email === email && user.password === password) {
    alert("Вход выполнен успешно!");
    window.location.href = "dashboard.html"; // или главная
  } else {
    error.textContent = "Неверный email или пароль.";
  }
});
