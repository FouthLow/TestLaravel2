document.addEventListener('DOMContentLoaded', function () {
    function bindPreview(inputId, previewId) {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);
        if (input && preview) {
            input.addEventListener('input', function () {
                preview.textContent = this.value;
            });
        }
    }

    bindPreview('input_hero_eyebrow', 'preview_hero_eyebrow');
    bindPreview('input_hero_title_main', 'preview_hero_title_main');
    bindPreview('input_hero_title_highlight', 'preview_hero_title_highlight');
    bindPreview('input_hero_desc', 'preview_hero_desc');
    bindPreview('input_about_title_main', 'preview_about_title_main');
    bindPreview('input_about_title_highlight', 'preview_about_title_highlight');
    bindPreview('input_about_desc', 'preview_about_desc');

    const bannerInput = document.getElementById('input_hero_banner');
    const heroBg = document.getElementById('preview_hero_bg');
    if (bannerInput && heroBg) {
        bannerInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    heroBg.style.background = `linear-gradient(rgba(13, 40, 85, 0.85), rgba(16, 35, 63, 0.9)), url('${event.target.result}')`;
                    heroBg.style.backgroundSize = 'cover';
                    heroBg.style.backgroundPosition = 'center';
                };
                reader.readAsDataURL(file);
            }
        });
    }
});