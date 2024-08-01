document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.role-select').forEach(function (select) {
        select.addEventListener('change', function () {
            const userId = this.getAttribute('data-user-id');
            const newRole = this.value;

            fetch(`/update-role/${userId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ role: newRole })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Role updated successfully');
                } else {
                    alert('Failed to update role');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});
