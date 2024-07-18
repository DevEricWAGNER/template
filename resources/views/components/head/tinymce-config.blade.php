<script src="https://cdn.tiny.cloud/1/aj3a31zi0u1xrdbz7bqomah2i57hwcris40aieu95upg2i6y/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    // tinymce.init({
    //     selector: 'textarea#siteAdress',
    //     plugins: 'code table lists',
    //     toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
    //     skin: localStorage.getItem('darkMode') === 'true' ? 'oxide-dark' : 'oxide',
    //     content_css: localStorage.getItem('darkMode') === 'true' ? 'dark' : 'default',
    // });

    // tinymce.init({
    //     selector: 'textarea#siteAdress',
    //     plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
    //     toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    //     skin: localStorage.getItem('darkMode') === 'true' ? 'oxide-dark' : 'oxide',
    //     content_css: localStorage.getItem('darkMode') === 'true' ? 'dark' : 'default',
    // });

    tinymce.init({
        branding: false,
        selector:
            "textarea#siteAdress",
        relative_urls: false,
        remove_script_host: false,
        style_formats: [
            { title: "Heading 2", format: "h2" },
            { title: "Heading 3", format: "h3" },
            { title: "Heading 4", format: "h4" },
            { title: "Heading 5", format: "h5" },
            { title: "Heading 6", format: "h6" },
            { title: "Paragraph", block: "p" }
        ],
        block_formats: 'Paragraph=p; Heading 2=h2; Heading 3=h3; Heading 4=h4; Heading 5=h5; Heading 6=h6',
        content_css: localStorage.getItem('darkMode') === 'true' ? 'dark, /css/frontOffice/festival-du-houblon/style_copy.css' : 'default, /css/frontOffice/festival-du-houblon/style_copy.css',
        skin: localStorage.getItem('darkMode') === 'true' ? 'oxide-dark' : 'oxide',
        height: "480",
        language: "fr_FR",
        link_list: "/controlpanel/plugin/internal-link",
        plugins: 'advlist autolink link image lists charmap preview hr anchor pagebreak searchreplace wordcount visualblocks visualchars insertdatetime media nonbreakin table directionality emoticons paste responsivefilemanager code template',
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        toolbar2: "| forecolor backcolor | blocks fontfamily fontsize",
        toolbar3: "| link unlink anchor | image media | preview code | template | styleselect",
        link_assume_external_targets: true,
        image_advtab: true,
    });
</script>
