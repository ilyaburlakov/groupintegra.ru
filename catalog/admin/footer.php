    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    <script>
        // Инициализация CKEditor для текстовых полей
        document.querySelectorAll('.editor').forEach(el => {
            ClassicEditor.create(el).catch(error => {
                console.error(error);
            });
        });
    </script>
</body>
</html>