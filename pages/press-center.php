<?php 
require_once '../config.php'; 
$root_path = '../';
require_once '../header.php'; 
?>

<section class="section">
    <div class="container">
        <h1 class="section-title">Пресс-центр</h1>
        <p class="section-subtitle">Новости и события компании</p>
        
        <div class="news-grid">
            <?php foreach ($news_items as $news): ?>
            <div class="news-card">
                <div class="news-date"><?php echo $news['date']; ?></div>
                <h3 class="news-title"><?php echo $news['title']; ?></h3>
                <a href="<?php echo $news['url']; ?>" class="news-link">подробнее →</a>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="../index.php" class="btn-link">← Вернуться на главную</a>
        </div>
    </div>
</section>

<?php require_once '../footer.php'; ?>