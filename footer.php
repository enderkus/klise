<?php wp_footer(); ?>
<footer class="footer">
<?php get_template_part('template-parts/menu', 'footer'); ?>
    <span class="footer_item"><?= get_theme_mod('copyright_text'); ?></span>
    <small class="footer_copyright">
        <a href="https://github.com/enderkus/klise" target="_blank" rel="noreferrer noopener">klisé</a>
        theme on
        <a href="https://wordpress.org" target="_blank" rel="noreferrer noopener">Wordpress</a>
    </small>
</footer>
<script src="<?= get_template_directory_uri(); ?>/assets/js/main.js" defer="defer"></script>