document.addEventListener('DOMContentLoaded', function() {
    const modalContent = document.getElementById('modal-content');
    const daysContainer = document.querySelector('.calendario');

    const dateForm = document.getElementById('dateForm');
    dateForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(dateForm);
        const month = formData.get('month');
        const year = formData.get('year');

        fetch(`calendar.php?month=${month}&year=${year}`)
            .then(response => response.text())
            .then(data => {
                daysContainer.innerHTML = data;
                setupDayClickHandlers(); // Vuelve a configurar los manejadores de clic
            });
    });

    function setupDayClickHandlers() {
        const days = document.querySelectorAll('.calendario-day');

        days.forEach(day => {
            day.addEventListener('click', function() {
                const selectedDay = this.getAttribute('data-day');
                modalContent.innerHTML = `Información del día ${selectedDay}`;
                $('#myModal').modal('show');
            });

            day.style.cursor = 'pointer';
        });
    }

    // Configura los manejadores de clic al cargar la página
    setupDayClickHandlers();
});
