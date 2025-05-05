<?php
/*
Template Name: Ve výstavbě
*/

// Zajistí, že nebude zobrazen žádný běžný obsah stránky WordPress
get_header('empty'); // Pokud nemáte empty header, použijte jen get_header();
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web ve výstavbě | Datová analytika</title>
    <!-- Google Fonts - Roboto a Roboto Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Roboto+Mono:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome pro ikony -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            text-align: center;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px; /* Přidáno padding */
        }
        
        .custom-icon {
            width: 80px; /* Upravte velikost podle vašeho PNG */
            height: auto;
            margin-bottom: 3rem;
            animation: pulse 3s infinite;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            font-family: 'Roboto Mono', sans-serif; /* Zajištění stejného fontu */
        }
        
        .subtitle {
            font-family: 'Roboto Mono', monospace;
            font-size: 1.1rem;
            margin-bottom: 3rem;
            opacity: 0.9;
        }
        
        p {
            margin-bottom: 2rem;
            font-size: 1rem;
            max-width: 600px;
        }
        
        .mono {
            font-family: 'Roboto Mono', monospace;
            background-color: #f5f5f5;
            padding: 0.2rem 0.5rem;
            border-radius: 3px;
        }
        
        .progress-container {
            width: 100%;
            max-width: 400px;
            height: 6px;
            background-color: #f1f1f1;
            border-radius: 3px;
            margin: 3rem auto;
            overflow: hidden;
        }
        
        .progress-bar {
            height: 100%;
            width: 15%;
            background-color: #333;
            border-radius: 3px;
            animation: progress 2s ease-in-out;
        }
        
        .contact {
            margin-top: 4rem;
            font-size: 0.9rem;
        }
        
        .contact a {
            color: #333;
            text-decoration: none;
            /*border-bottom: 1px solid #333;*/
            transition: opacity 0.2s;
        }
        
        .contact a:hover {
            opacity: 0.7;
            color: #c80c0f;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        @keyframes progress {
            from { width: 0; }
            to { width: 15%; }
        }
        
        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }
            
            .subtitle {
                font-size: 1rem;
            }
            
            .icon {
                font-size: 3rem;
            }
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 2rem;
        }

        .social-icon {
            font-size: 1.5rem;
            transition: transform 0.2s;
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-icon:hover {
            transform: scale(1.1);
        }

        .linkedin {
            background-color: #0077B5;
        }

        .orcid {
            background-color: #A6CE39;
        }

        .github {
            background-color: #333333;
        }

        /* Přidat na začátek stránky před container */
        .site-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .site-title {
            font-size: 2rem;
            font-weight: 700;
            text-decoration: none;
            border-bottom: none; /* Žádné podtržení */
        }

        /* Pro změnu ikony */
        /*.custom-icon {
            font-size: 3rem;
            display: block;
            margin: 20px auto;
        }*/

    </style>
</head>
<body>
    <div class="container">
        <img src="https://www.terezanehezova.cz/wp-content/uploads/2025/05/bar-graph.png" alt="Ikona" class="custom-icon">
        <h1>Webové stránky ve výstavbě</h1>
        <div class="subtitle">Datová analytika | Marketingový výzkum | Operační výzkum</div>
        
        <p>Pracuji na novém webu, který bude obsahovat portfolio mých projektů, CV a blog.</p>
        
        <p>Předpokládané spuštění: <span class="mono">Srpen 2025</span></p>
        
        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>
        
        <div class="contact">
            Pro kontakt zatím využijte email: <a href="mailto:email@terezanehezova.cz">email@terezanehezova.cz</a>
        </div>
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/tereza-nehezova/" target="_blank" class="social-icon linkedin">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://orcid.org/0000-0002-7695-6194" target="_blank" class="social-icon orcid">
                    <i class="fab fa-orcid"></i>
                </a>
                <a href="https://github.com/nehy06" target="_blank" class="social-icon github">
                    <i class="fab fa-github"></i>
                </a>
        </div>
    </div>
    
    <footer style="margin-top: 50px; font-size: 0.8rem; color: #777; text-align: center;">
    &copy; TSN 2025
    </footer>
</body>
</html>


<?php
// Zajistí, že nebude zobrazen žádný běžný obsah patičky WordPress
// get_footer('empty'); // Odkomentujte tuto řádku
?>