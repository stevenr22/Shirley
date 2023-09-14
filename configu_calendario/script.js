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
                setupDayClickHandlers();
            });
    });

    function setupDayClickHandlers() {
        const days = document.querySelectorAll('.calendario-day');
        days.forEach(day => {
            day.addEventListener('click', function() {
                const selectedDay = this.getAttribute('data-day');
            
                fetch(`enviar_info.php?day=${selectedDay}`)
                    .then(response => response.json())
                    .then(data => {
                        $('#myModal').modal('show'); // Mostrar el modal primero
            
                        $('#myModal').on('shown.bs.modal', function () {
                            console.log('Modal abierto');
                            document.getElementById('inom').value = data.nombre_usu;
                            console.log(document.getElementById('inom'));
                            document.getElementById('inape').value = data.apellido_usu;
                            console.log(document.getElementById('inape'));
                            document.getElementById('inced').value = data.ced;
                            console.log(document.getElementById('inced'));
                            document.getElementById('ined').value = data.edad;
                            console.log(document.getElementById('ined'));
                            document.getElementById('infech').value = data.fecha_regis_usu;
                            console.log(document.getElementById('infech'));
                        });
                    });
            });
        });
    }

    setupDayClickHandlers(); // Llamamos a la función para configurar los manejadores de clic al cargar la página
});