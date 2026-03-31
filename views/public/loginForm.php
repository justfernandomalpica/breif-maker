<div class="identify-container">
    <header class="identify-header container">
        <div class="papersheet"><h1 class="title">Breif</h1></div>
        <p class="text">Por favor, llena la siguiente información para comenzar.</p>
    </header>

    <form action="/form" class="form identify-form" method="POST">
        <fieldset>
            <div class="form-field">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-field">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email">
            </div>
        </fieldset>
        <input class="btn btn-primary" type="submit" value="Iniciar Sesión">
    </form>
</div>