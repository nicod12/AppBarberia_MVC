<form class="formulario" method="POST" action="/">
    <h1 class="nombre-pagina">Look Babers</h1>

    <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email" 
            id="email" 
            placeholder="Ingrese su Email" 
            name="email"
         />
    </div>

    <div class="campo">
        <label for="password">Contraseña</label>
        <input 
            type="password" 
            id="passoword" 
            placeholder="Ingrese su Password" 
            name="password" />
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/olvide">¿Olvitaste tu contraseña?</a>
</div>