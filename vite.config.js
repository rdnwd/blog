import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/animate.css',
                'resources/css/bootstrap.min.css',
                'resources/css/component.css',
                'resources/css/default.css',
                'resources/css/feature_post.css',
                'resources/css/flaticon.css',
                'resources/css/font-awesome.min.css',
                'resources/css/liner_icon.css',
                'resources/css/magnific-popup.css',
                'resources/css/nice-select.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/post_style.css',
                'resources/css/search.css',
                'resources/css/slick.css',
                'resources/css/style.css',
                'resources/css/swiper.min.css',
                'resources/css/themify-icons.css',
                'resources/css/aos.css',
                'resources/js/app.js',
                'resources/js/classie.js',
                'resources/js/contact.js',
                'resources/js/custom.js',
                'resources/js/jquery.ajaxchimp.min.js',
                'resources/js/jquery.form.js',
                'resources/js/jquery.nice-select.min.js',
                'resources/js/jquery.validate.min.js',
                'resources/js/jquery-1.12.1.min.js',
                'resources/js/mail-script.js',
                'resources/js/popper.min.js',
                'resources/js/uisearch.js'
            ],
            refresh: true,
        }),
    ],
});
