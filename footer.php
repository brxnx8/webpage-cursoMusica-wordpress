<?php wp_footer(); 



    ?>
    <footer class="footer">
        <section class="informations">
            <div class="informations-footer">
                <p class="p-footer"><img src="<?= get_template_directory_uri() ?>/assets/images/instagramiconfooter.png" width="30px" alt="" class="icone-footer"><?php the_field('instagram', $homepage_id) ?></p>
                <p class="p-footer"><img src="<?= get_template_directory_uri() ?>/assets/images/whatsappiconfooter.png" width="30px" alt="" class="icone-footer"><?php the_field('numero_whatsapp', $homepage_id) ?></p>
                <p class="p-footer"><img src="<?= get_template_directory_uri() ?>/assets/images/e-mailiconfooter.png" width="30px" alt="" class="icone-footer"><?php the_field('e-mail', $homepage_id) ?></p>
            </div>
            <div class="logo-footer">
                <img src="<?= get_template_directory_uri() ?>/assets/images/Logo.png" width="90px" height="70px" alt="" >
                <p>CNPJ: 00000/0001</p>
            </div>
        </section>
        <section class="copyright">
            <div class="copyright-footer">copyright PROJETO 2022 - todos os direitos reservados</div>
        </section>
    </footer>
</body>
</html>