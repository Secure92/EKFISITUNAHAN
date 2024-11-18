<?php require_once('assets/layout/header.php'); ?> 



<div class="container mt-5">
    <h1>Willkommen auf meiner persönlichen Website!</h1>
    <p>Kurs: Web Programmierung by Ali Khorsandfard</p>
    <p>Informatiker Winter 2024</p>
    <p>Name: [Ihr Vorname] [Ihr Nachname]</p>
    <p>Standort: [Ihr Standort]</p>
    <form>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="message">Nachricht:</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kontaktiere mich</button>
    </form>
</div>

<?php require_once('assets/layout/footer.php'); ?> 