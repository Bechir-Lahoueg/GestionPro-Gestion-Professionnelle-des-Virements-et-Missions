<!DOCTYPE html>
<html lang="en">
<head>
    <header>
       <?php 
    include("navbar.php");
    ?>
       </header> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        main {
            font-family: 'Open Sans', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }
        
        .contact-container {
            display: flex;
            width: 80%;
            max-width: 1000px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        .form-section {
            background: linear-gradient(135deg, #FFA437 0%, #D37A10 100%);
            padding: 40px;
            color: white;
            width: 50%;
        }
        
        .form-section h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        
        .form-section input, .form-section textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .form-section button {
            background-color: #000000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .form-section button:hover {
            background-color: #ff1a75;
        }
        
        .info-section {
            padding: 40px;
            background-color: white;
            width: 50%;
        }
        
        .info-section h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        
        .info-section p {
            margin: 10px 0;
            font-size: 16px;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }
        
        .info-item i {
            font-size: 20px;
            margin-right: 10px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <main>
    <div class="contact-container">
        <div class="form-section">
            <h2>Envoyez-nous un message</h2>
            <form>
                <input type="text" placeholder="nom" required>
                <input type="email" placeholder="Email" required>
                <input type="text" placeholder="Contenue" required>
                <textarea rows="4" placeholder="Message" required></textarea>
                <button type="submit">Envoi un Message</button>
            </form>
        </div>
        <div class="info-section">
            <h2>Contactez nous</h2>
            <p>Nous sommes ouverts à toute suggestion ou simplement pour discuter</p>
            <div class="info-item">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <p>7895 rue duns</p>
            </div>
            <div class="info-item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>+ 1235 2355 98</p>
            </div>
            <div class="info-item">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <p>Consultant@gmail.com</p>
            </div>
            <div class="info-item">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <p>GestionConsultants.com</p>
            </div>
        </div>
    </div>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script></main>
</body>
</html>
