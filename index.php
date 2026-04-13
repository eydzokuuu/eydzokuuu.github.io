<?php require_once 'config.php'; ?>
<?php 
$root_path = '';
require_once 'header.php'; 
?>

<!-- Hero блок -->
<section class="hero">
    <div class="container">
        <div class="hero-stat">15 000</div>
        <p>суммарный объем обслуживаемых локомотивов в год</p>
    </div>
</section>

<!-- Блок БИЗНЕС -->
<section class="section">
    <div class="container">
        <h2 class="section-title">БИЗНЕС</h2>
        <div class="business-grid">
            <?php foreach ($business_areas as $area): ?>
            <a href="<?php echo $area['url']; ?>" class="business-card">
                <div class="business-icon">
                    <img src="images/icons/<?php echo $area['icon']; ?>" alt="<?php echo $area['name']; ?>">
                </div>
                <h3><?php echo $area['name']; ?></h3>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Блок ПРЕСС-ЦЕНТР -->
<section class="section">
    <div class="container">
        <h2 class="section-title">ПРЕСС-ЦЕНТР</h2>
        <div class="press-list">
            <?php foreach ($press_items as $item): ?>
            <div class="press-item"><?php echo $item; ?></div>
            <?php endforeach; ?>
        </div>
        <div class="press-link">
            <a href="pages/press-center.php" class="btn-link">...перейти в пресс-центр</a>
        </div>
    </div>
</section>

<!-- Блок НАША СИЛА - В ЛЮДЯХ -->
<section class="section people-section">
    <div class="container">
        <h2 class="section-title">НАША СИЛА – В ЛЮДЯХ!</h2>
        <a href="pages/our-people.php" class="btn-link">...перейти в раздел</a>
    </div>
</section>

<!-- Блок КЛЮЧЕВЫЕ ФАКТЫ -->
<section class="section">
    <div class="container">
        <h2 class="section-title">КЛЮЧЕВЫЕ ФАКТЫ</h2>
        <div class="facts-text">
            <p>Крупнейший в Европе локомотивовремонтальный холдинг ООО "ЛокоТех" управляет активами, обеспечивающими обслуживание, ремонт, модернизацию и передачу в лизинг локомотивов, производство узлов и деталей для предприятий железнодорожного машиностроения. <a href="pages/about.php" style="color: var(--secondary-color); text-decoration: none;">Подробнее о компании →</a></p>
        </div>
    </div>
</section>

<!-- Блок РЕГИОНАЛЬНЫЕ НОВОСТИ -->
<section class="section">
    <div class="container">
        <h2 class="section-title">РЕГИОНАЛЬНЫЕ НОВОСТИ</h2>
        <div class="news-grid">
            <?php foreach ($news_items as $news): ?>
            <div class="news-card">
                <div class="news-date"><?php echo $news['date']; ?></div>
                <h3 class="news-title"><?php echo $news['title']; ?></h3>
                <a href="<?php echo $news['url']; ?>" class="news-link">подробнее →</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Блок ЗАКУПКИ -->
<section class="section">
    <div class="container">
        <div class="procurement-content">
            <h2 class="section-title">ЗАКУПКИ</h2>
            <p class="procurement-text">Максимальная прозрачность проведения конкурсных процедур. Группа компаний "ЛокоТех" уделяет большое внимание привлечению заказчиков. Компании предлагают широкий спектр услуг, включая разработку стратегии развития, консультации, обучение персонала, а также проведение экспертизы.</p>
            <a href="pages/procurement.php" class="btn-link">Перейти в раздел →</a>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>