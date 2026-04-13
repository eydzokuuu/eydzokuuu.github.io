<?php 
require_once '../config.php'; 
$root_path = '../';
require_once '../header.php'; 
?>

<section class="section contacts-section">
    <div class="container">
        <h1 class="section-title">Контакты</h1>
        <p class="section-subtitle">Свяжитесь с нами удобным для вас способом</p>
        
        <div class="contacts-grid">
            <div class="contacts-info">
                <div class="contact-card">
                    <div class="contact-icon">📍</div>
                    <h3>Главный офис</h3>
                    <p>Россия, 105064, г. Москва,<br>ул. Земляной Вал, д. 9</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">📞</div>
                    <h3>Телефоны</h3>
                    <p><a href="tel:+74951234567">+7 (495) 123-45-67</a> (приемная)</p>
                    <p><a href="tel:+74951234568">+7 (495) 123-45-68</a> (отдел продаж)</p>
                    <p><a href="tel:+78001234567">8 (800) 123-45-67</a> (горячая линия)</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">✉️</div>
                    <h3>Электронная почта</h3>
                    <p><a href="mailto:info@lokotech.ru">info@lokotech.ru</a> - общие вопросы</p>
                    <p><a href="mailto:sales@lokotech.ru">sales@lokotech.ru</a> - продажи</p>
                    <p><a href="mailto:hr@lokotech.ru">hr@lokotech.ru</a> - кадровые вопросы</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">🕒</div>
                    <h3>Режим работы</h3>
                    <p>Понедельник - Четверг: 9:00 - 18:00</p>
                    <p>Пятница: 9:00 - 16:45</p>
                    <p>Суббота, Воскресенье: Выходной</p>
                </div>
            </div>
            
            <div class="contacts-form">
                <h3>Написать нам</h3>
                <form action="#" method="POST" class="feedback-form">
                    <div class="form-group">
                        <label for="name">Ваше имя *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Тема *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Выберите тему</option>
                            <option value="general">Общий вопрос</option>
                            <option value="sales">Сотрудничество</option>
                            <option value="support">Техническая поддержка</option>
                            <option value="hr">Трудоустройство</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Сообщение *</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-submit">Отправить сообщение</button>
                </form>
            </div>
        </div>
        
        <div class="map-container">
            <h3>Схема проезда</h3>
            <div class="map">
                <iframe 
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A1234567890abcdef&source=constructor" 
                    width="100%" 
                    height="400" 
                    frameborder="0" 
                    allowfullscreen>
                </iframe>
                <p class="map-note">* Интерактивная карта. Для загрузки карты требуется подключение к интернету.</p>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 50px;">
            <a href="../index.php" class="btn-link">← Вернуться на главную</a>
        </div>
    </div>
</section>

<?php require_once '../footer.php'; ?>