document.addEventListener('DOMContentLoaded', function() {
    const modalContent = document.getElementById('modal-content');
    const daysContainer = document.querySelector('.calendario');

    const dateForm = document.getElementById('dateForm');
    dateForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(dateForm);
        const month = formData.get('month');
        const year = formData.get('year');

        fetch(`configu_calendario/calendar.php?month=${month}&year=${year}`)
            .then(response => response.json())
            .then(data => {
                daysContainer.innerHTML = data.calendar;
                let daysWithData = data.days_with_data;
                setupDayClickHandlers(daysWithData); // Pasa los días con datos como argumento
            });
    });

    function setupDayClickHandlers(daysWithData) {
        const days = document.querySelectorAll('.calendario-day');
        days.forEach(day => {
            day.addEventListener('click', function() {
                const selectedDay = this.getAttribute('data-day');

                fetch(`enviar_info.php?day=${selectedDay}`)
                    .then(response => response.json())
                    .then(data => {
                        $('#myModal').modal('show');

                        $('#myModal').on('shown.bs.modal', function () {
                            const modalBody = document.querySelector('.modal-body');

                            if (Array.isArray(data) && data.length > 0) {
                                modalBody.innerHTML = `
                                    <p>Nombre: ${data[0].nombre_usu}</p>
                                    <p>Apellido: ${data[0].apellido_usu}</p>
                                    <p>Fecha de Registro: ${data[0].fecha_regis_usu}</p>
                                    <p>Edad: ${data[0].edad}</p>
                                    <p>Cédula: ${data[0].ced}</p>
                                `;

                                // Agregar la clase 'has-data' al día seleccionado
                                day.classList.add('has-data');
                            } else {
                                modalBody.innerHTML = `<p>No se encontraron datos para el día seleccionado.</p>`;
                            }
                        });
                    });
            });
        });
    }

    setupDayClickHandlers(); // Llamamos a la función para configurar los manejadores de clic al cargar la página
});
