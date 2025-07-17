const toggleBtn = document.getElementById("toggleTheme");
const body = document.body;

function setTheme(theme) 
{
  body.className = theme;
  localStorage.setItem("theme", theme);
}

toggleBtn.addEventListener("click", () => 
{
  const newTheme = body.className === "dark" ? "light" : "dark";
  setTheme(newTheme);
});

const savedTheme = localStorage.getItem("theme") || "dark";
setTheme(savedTheme);