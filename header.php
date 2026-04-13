<?php
// Определяем корневой путь для корректной работы ссылок
$root_path = '';
if (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) {
    $root_path = '../';
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> - Корпоративный промо-сайт</title>
    <meta name="description" content="ЛокоТех - крупнейший в Европе локомотивремонтальный холдинг">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $root_path; ?>css/style.css">
</head>
<body>
    <!-- Прилипающий header -->
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <div class="logo">
                    <a href="<?php echo $root_path; ?>index.php">
                        <img src="<?php echo $root_path; ?>images/logo.svg" alt="ЛокоТех" class="logo-img">
                        <span class="logo-text">ЛокоТех</span>
                    </a>
                </div>
                
                <!-- Десктопная навигация -->
                <nav class="nav">
                    <ul class="nav-menu">
                        <li><a href="<?php echo $root_path; ?>pages/business.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'business.php') ? 'active' : ''; ?>">БИЗНЕС</a></li>
                        <li><a href="<?php echo $root_path; ?>pages/press-center.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'press-center.php') ? 'active' : ''; ?>">ПРЕСС-ЦЕНТР</a></li>
                        <li><a href="<?php echo $root_path; ?>pages/about.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>">О КОМПАНИИ</a></li>
                        <li><a href="<?php echo $root_path; ?>pages/our-people.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'our-people.php') ? 'active' : ''; ?>">КАРЬЕРА</a></li>
                        <li><a href="<?php echo $root_path; ?>pages/contacts.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contacts.php') ? 'active' : ''; ?>">КОНТАКТЫ</a></li>
                    </ul>
                </nav>
                
                <!-- Мобильное меню (бургер) -->
                <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Открыть меню">
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                </button>
            </div>
        </div>
        
        <!-- Мобильная навигация (выпадающее меню) -->
        <div class="mobile-nav" id="mobileNav">
            <div class="container">
                <ul class="mobile-nav-menu">
                    <li><a href="<?php echo $root_path; ?>index.php" class="mobile-nav-link">ГЛАВНАЯ</a></li>
                    <li><a href="<?php echo $root_path; ?>pages/business.php" class="mobile-nav-link">БИЗНЕС</a></li>
                    <li><a href="<?php echo $root_path; ?>pages/press-center.php" class="mobile-nav-link">ПРЕСС-ЦЕНТР</a></li>
                    <li><a href="<?php echo $root_path; ?>pages/about.php" class="mobile-nav-link">О КОМПАНИИ</a></li>
                    <li><a href="<?php echo $root_path; ?>pages/our-people.php" class="mobile-nav-link">КАРЬЕРА</a></li>
                    <li><a href="<?php echo $root_path; ?>pages/contacts.php" class="mobile-nav-link">КОНТАКТЫ</a></li>
                    <li><a href="<?php echo $root_path; ?>pages/procurement.php" class="mobile-nav-link">ЗАКУПКИ</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <main class="main-content">