<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */
?>

</main><!-- #main -->

<footer id="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-copyright">
                &copy; <span id="current-year">2025</span> Tereza Nehézová
            </div>
            
            <div class="footer-social">
                <a href="https://www.linkedin.com/in/tereza-nehezova/" target="_blank" aria-label="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://github.com/nehy06" target="_blank" aria-label="GitHub">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://orcid.org/0000-0002-7695-6194" target="_blank" aria-label="ORCID">
                    <i class="fab fa-orcid"></i>
                </a>
            </div>
        </div>

        <?php if (is_single() || (is_page() && !is_front_page())) : ?>
        <div class="footer-navigation">
            <div class="back-to-home">
                <a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> Zpět na hlavní stránku</a>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <?php wp_footer(); ?>
</footer>

<script>
    // Aktualizace roku v patičce
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>
</body>
</html>