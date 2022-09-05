<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Magda Pimentel">  
        
        <?php include 'views/includes/seo.php'; ?>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $data['url']; ?>assets/images/favicon.svg">       
        <link rel="stylesheet" type="text/css" href="<?php echo $data['url']; ?>assets/css/style.css"> 
    </head>

    <body>
        <header class="header">
            <nav class="header-nav">
                <div class="header-nav-logo">
                    <a href="<?php echo $data['url']; ?>home">    
                        <img src="<?php echo $data["url"]; ?>assets/images/eu-faco-logotipo.svg" alt="Logotipo do Eu Faço">
                    </a>    
                </div>
                <div class="header-nav-hamburger">
                    <div class="hamburger-line-one"></div>
                    <div class="hamburger-line-two"></div>
                    <div class="hamburger-line-three"></div>
                </div>
                <div class="header-nav-links">
                    <ul>
                        <li>
                            <a class="<?php echo $data['page'] === 'marketing-digital' || $data['page'] === 'marketing-digital-analytics' ? 'active active-blue' : ''; ?>" href="<?php echo $data['url']; ?>marketing-digital">Marketing Digital</a> 
                        </li>
                        <li>
                            <a class="<?php echo $data['page'] === 'ux-ui-design' || $data['page'] === 'ux-ui-design-prototipos' ? 'active active-pink' : ''; ?>" href="<?php echo $data['url']; ?>ux-ui-design">UX/UI Design</a> 
                        </li>
                        <li>
                            <a class="<?php echo $data['page'] === 'web-development' || $data['page'] === 'web-development-javascript' ? 'active active-green' : ''; ?>" href="<?php echo $data['url']; ?>web-development">Web Development</a> 
                        </li>
                    </ul>
                </div>    
            </nav>
        </header>    