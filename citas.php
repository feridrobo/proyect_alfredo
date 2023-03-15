<!-- Sección de Agendar Cita -->
<section id="appointment" class="section pt-5">
  <div class="container">
    <h2 class="section-title text-center">Agenda tu cita con nosotros</h2>
    <p class="section-subtitle text-center mt-3 mb-5">Selecciona una fecha y hora en el calendario para programar una cita con nuestro abogado especializado en derecho penal.</p>
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="calendar" id="calendar"></div>
      </div>
    </div>
    <div class="text-center mt-5">
      <button class="btn btn-primary btn-lg">Agendar Cita</button>
    </div>
  </div>
</section>
<!-- Fin de la Sección de Agendar Cita -->

<!-- Biblioteca FullCalendar -->
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>

<!-- Script para inicializar el calendario -->
<script>
  $(document).ready(function() {
    $('#calendar').fullCalendar({
      // opciones de configuración del calendario
    });
  });
</script>
