<?php 
require_once '../config.php'; 
$root_path = '../';
require_once '../header.php'; 
?>

<section class="section">
    <div class="container">
        <h1 class="section-title">Бизнес-направления</h1>
        <p class="section-subtitle">Основные направления деятельности компании</p>
        
        <div class="business-grid">
            <?php foreach ($business_areas as $area): ?>
            <div class="business-card">
                <div class="business-icon">
                    <img src="../images/icons/<?php echo $area['icon']; ?>" alt="<?php echo $area['name']; ?>">
                </div>
                <h3><?php echo $area['name']; ?></h3>
                <p style="margin-top: 10px; font-size: 14px; color: #666;">Подробное описание направления</p>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="../index.php" class="btn-link">← Вернуться на главную</a>
        </div>
    </div>
</section>

<?php require_once '../footer.php'; ?>