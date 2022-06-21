<h5 class="pb-3">Datos de reserva</h5>
<label for="days" class="form-label">Día</label>
<select disabled name="days" class="form-select days" aria-label="days" style="width: 100%">
    <option value="-1" disabled selected>Elige un día...</option>
    <option value="Lunes">Lunes</option>
    <option value="Martes">Martes</option>
    <option value="Miércoles">Miércoles</option>
    <option value="Jueves">Jueves</option>
    <option value="Viernes">Viernes</option>
    <option value="Sábado">Sábado</option>
</select>
<div class="row mt-4">

    {{-- Aula --}}
    <div class="mb-3 col">
        <label for="classroom_id" class="form-label">Seleccione el aula</label>
        <select disabled class="form-select classrooms" name="classroom_id">
            <option value="" selected disabled>Aula...</option>
        </select>
    </div>
</div>

<div class="row mt-4">
    {{-- horas disponibles (inicio) --}}
    <div class="mb-3 col">
        <label for="startTime" class="form-label">Hora de inicio</label>
        <select disabled name="start_time" class="form-select start_time">
            <option disabled selected>Elija una opción
            </option>
        </select>
        {{-- <small id="errorCreateBookingStartTime"></small> --}}
    </div>

    {{-- horas disponibles (fin) --}}
    <div class="mb-3 col">
        <label for="finishTime" class="form-label">Hora de fin</label>
        <select disabled name="finish_time" class="form-select finish_time">
            <option disabled selected>Elija una opción
            </option>
        </select>
        {{-- <small id="errorCreateBookingStartTime"></small> --}}
    </div>
</div>
