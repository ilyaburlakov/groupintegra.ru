    </main>
    
    <!-- Подвал -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5><?= SITE_NAME ?></h5>
                    <p>Каталог промышленного оборудования и инженерных решений.</p>
                </div>
                <div class="col-md-4">
                    <h5>Контакты</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt"></i> Адрес: г. Москва, ул. Промышленная, 15</li>
                        <li><i class="bi bi-telephone"></i> Телефон: +7 (495) 123-45-67</li>
                        <li><i class="bi bi-envelope"></i> Email: info@example.com</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Меню</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white">Каталог</a></li>
                        <li><a href="about.php" class="text-white">О компании</a></li>
                        <li><a href="contacts.php" class="text-white">Контакты</a></li>
                        <li><a href="admin/" class="text-white">Панель управления</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-3">
                <small>&copy; <?= date('Y') ?> <?= SITE_NAME ?>. Все права защищены.</small>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Собственные скрипты -->
    <script src="/scripts.js"></script>
</body>
</html>