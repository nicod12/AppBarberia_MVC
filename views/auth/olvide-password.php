<h1 class="nombre-pagina">Restablecer Contraseña</h1>
<p class="descripcion-pagina">Reestablece tu contraseña escribiendo tu email</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form action="/olvide" class="formulario" method="POST">
    <div class="campo">
        <label for="email">E-mail</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Ingresa tu Email"
        />
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una?</a>
</div>