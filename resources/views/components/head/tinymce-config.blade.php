<script src="https://cdn.tiny.cloud/1/aj3a31zi0u1xrdbz7bqomah2i57hwcris40aieu95upg2i6y/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#siteAdress',
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
        skin: localStorage.getItem('darkMode') === 'true' ? 'oxide-dark' : 'oxide',
        content_css: localStorage.getItem('darkMode') === 'true' ? 'dark' : 'default',
    });
</script>
