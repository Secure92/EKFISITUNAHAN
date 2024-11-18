<?php require_once('assets/layout/header.php'); ?> 


    <div class="container">
        <h1>Login</h1>
        <form>
            <div class="form-group">
                <label for="username">Benutzername:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Passwort:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary">Einloggen</button>
        </form>
    </div>

<?php require_once('assets/layout/footer.php'); ?> 