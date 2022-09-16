<?php wp_footer(); 



    ?>
    <footer class="footer">
        <section class="informations">
            <div class="informations-footer">
                <p class="p-footer"><img src="<?= get_template_directory_uri() ?>/assets/images/instagramiconfooter.png" width="30px" alt="" class="icone-footer"><?php the_field('instagram', $homepage_id) ?></p>
                <p class="p-footer"><img src="<?= get_template_directory_uri() ?>/assets/images/whatsappiconfooter.png" width="30px" alt="" class="icone-footer"><?php the_field('numero_whatsapp', $homepage_id) ?></p>
                <p class="p-footer"><img src="<?= get_template_directory_uri() ?>/assets/images/emailiconfooter.png" width="30px" alt="" class="icone-footer"><?php the_field('e-mail', $homepage_id) ?></p>
            </div>
            <div class="logo-footer">
                <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" width="90px" height="70px" alt="" >
            </div>
        </section>
        <section class="copyright">
            <div class="copyright-footer">&copy; InJunior - Todos os direitos reservados.</div>
        </section>
    </footer>
</body>
</html>