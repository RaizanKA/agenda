const button = document.querySelector(".toggle-sidebar-btn");
button.addEventListener("click", function() {
    this.classList.toggle("clicked");
});
document.getElementById("toggleSidebarBtn").addEventListener("click", function(event) {
    const sidebar = document.getElementById("sidebar");
    const hamburgerButton = document.getElementById("toggleSidebarBtn");
    sidebar.classList.toggle("open");
    hamburgerButton.classList.toggle("hide-hamburger");
    event.stopPropagation(); 
});

document.addEventListener("click", function(event) {
const sidebar = document.getElementById("sidebar");
const sidebarButton = document.getElementById("toggleSidebarBtn");
if (!sidebar.contains(event.target) && !sidebarButton.contains(event.target)) {
    sidebar.classList.remove("open"); 
    sidebarButton.classList.remove("hide-hamburger"); 
}
});
document.getElementById("sidebar").addEventListener("click", function(event) {
    event.stopPropagation();
});