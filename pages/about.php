<?php 
require_once '../config.php'; 
$root_path = '../';
require_once '../header.php'; 
?>

<section class="section about-section">
    <div class="container">
        <h1 class="section-title">О компании</h1>
        
        <div class="about-content">
            <div class="about-hero">
                <div class="about-stat">
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">лет на рынке</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">5000+</div>
                        <div class="stat-label">сотрудников</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">20+</div>
                        <div class="stat-label">регионов присутствия</div>
                    </div>
                </div>
            </div>
            
            <div class="about-text">
                <h2>История компании</h2>
                <p>Группа компаний «ЛокоТех» основана в 2010 году и на сегодняшний день является крупнейшим в Европе локомотивремонтальным холдингом. Мы управляем активами, обеспечивающими обслуживание, ремонт, модернизацию и передачу в лизинг локомотивов, производство узлов и деталей для предприятий железнодорожного машиностроения.</p>
                
                <h2>Наша миссия</h2>
                <p>Обеспечение бесперебойной работы железнодорожного транспорта России через предоставление качественных услуг по ремонту и обслуживанию локомотивов, внедрение инновационных технологий и развитие кадрового потенциала отрасли.</p>
                
                <h2>Ключевые принципы</h2>
                <div class="principles-grid">
                    <div class="principle-card">
                        <div class="principle-icon">⭐</div>
                        <h3>Качество</h3>
                        <p>Соответствие международным стандартам качества</p>
                    </div>
                    <div class="principle-card">
                        <div class="principle-icon">🔧</div>
                        <h3>Надежность</h3>
                        <p>Гарантия безопасности и долговечности</p>
                    </div>
                    <div class="principle-card">
                        <div class="principle-icon">💡</div>
                        <h3>Инновации</h3>
                        <p>Внедрение передовых технологий</p>
                    </div>
                    <div class="principle-card">
                        <div class="principle-icon">🤝</div>
                        <h3>Партнерство</h3>
                        <p>Открытость и взаимовыгодное сотрудничество</p>
                    </div>
                </div>
                
                <h2>Наши достижения</h2>
                <ul class="achievements-list">
                    <li>Лидер в области ремонта и обслуживания локомотивов в России и Европе</li>
                    <li>Сертифицированы по стандартам ISO 9001, ISO 14001, OHSAS 18001</li>
                    <li>Обслуживаем более 15 000 локомотивов ежегодно</li>
                    <li>Партнерство с ведущими производителями железнодорожной техники</li>
                    <li>Развитая сеть сервисных центров в 20+ регионах России</li>
                </ul>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 50px;">
            <a href="../index.php" class="btn-link">← Вернуться на главную</a>
        </div>
    </div>
</section>

<?php require_once '../footer.php'; ?>