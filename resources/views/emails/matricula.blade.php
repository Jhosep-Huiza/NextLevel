<h2>Nueva Matrícula</h2>

<h3>Datos del Alumno</h3>
<p><b>Nombres:</b> {{ $datos['nombres'] ?? '' }}</p>
<p><b>Apellido Paterno:</b> {{ $datos['apellido_paterno'] ?? '' }}</p>
<p><b>Apellido Materno:</b> {{ $datos['apellido_materno'] ?? '' }}</p>
<p><b>DNI:</b> {{ $datos['dni'] ?? '' }}</p>
<p><b>Correo:</b> {{ $datos['correo'] ?? 'No especificado' }}</p>
<p><b>Edad:</b> {{ $datos['edad'] ?? '' }}</p>
<p><b>Sexo:</b> {{ $datos['sexo'] ?? '' }}</p>
<p><b>Celular:</b> {{ $datos['celular'] ?? '' }}</p>
<p><b>Fecha de nacimiento:</b> {{ $datos['fecha_nacimiento'] ?? '' }}</p>


<h3>Datos del Padre o Apoderado</h3>
<p><b>Nombres:</b> {{ $datos['padre_nombres'] ?? '' }}</p>
<p><b>Apellido Paterno:</b> {{ $datos['padre_apellido_paterno'] ?? '' }}</p>
<p><b>Apellido Materno:</b> {{ $datos['padre_apellido_materno'] ?? '' }}</p>
<p><b>DNI:</b> {{ $datos['padre_dni'] ?? '' }}</p>
<p><b>Correo:</b> {{ $datos['padre_correo'] ?? '' }}</p>
<p><b>Edad:</b> {{ $datos['padre_edad'] ?? '' }}</p>
<p><b>Sexo:</b> {{ $datos['padre_sexo'] ?? '' }}</p>
<p><b>Celular:</b> {{ $datos['padre_celular'] ?? '' }}</p>

<h3>Datos de Matrícula</h3>
<p><b>Nivel:</b> {{ $datos['nivel'] ?? '' }}</p>
<p><b>Grado:</b> {{ $datos['grado'] ?? '' }}</p>
<p><b>Dirección:</b> {{ $datos['direccion'] ?? '' }}</p>
<p><b>Tipo Pago:</b> {{ $datos['tipo_pago'] ?? '' }}</p>
