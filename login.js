document.getElementById("loginForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value.trim();
  const errorMessage = document.getElementById("errorMessage");

  // Пример проверки
  if (email === "admin@renttech.com" && password === "123456") {
    window.location.href = "dashboard.html"; // перенаправление
  } else {
    errorMessage.textContent = "Неверный email или пароль";
  }
});
