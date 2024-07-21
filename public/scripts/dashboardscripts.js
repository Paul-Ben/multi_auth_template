document.getElementById('sidebarToggle').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('open');
});

// Close sidebar when clicking outside of it
document.addEventListener('click', function(event) {
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    if (!sidebar.contains(event.target) && event.target !== sidebarToggle) {
        sidebar.classList.remove('open');
    }
});

// Toggle sub-menu visibility
document.querySelectorAll('.sidebar .menu-item > a').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        this.parentElement.classList.toggle('active');
        const subMenu = this.nextElementSibling;
        if (subMenu) {
            subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
        }
    });
});
// Biodata page generate date of printing
document.getElementById('generated-date').textContent = new Date().toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });