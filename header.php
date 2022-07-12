<?php header("Content-Type: text/html; charset=UTF-8");
/**
 * @package Marcos Macedo
 */
?>
<!DOCTYPE html>

<meta http-equiv="Content-Language" content="pt-br"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php wp_head() ?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon.png" />

<body <?php body_class() ?>>

<header class="ekos-header"> 
  <div class="menu-toggle menu-open">
      <div class="menu-line"></div>
      <div class="menu-line"></div>
      <div class="menu-line"></div>
  </div>
  <div class="overlay"></div>
  <div class="menu-full">
      <div class="close">
          <a href="#" class="menu-close">&times;</a>
      </div>
      <div class="menu-list">
        <img class="homebg" src="/wp-content/themes/ekos-theme/assets/images/InstitutoEkosBR_Colorido_Horizontal_Preto@2x.png" alt="Logo ekos">
        <ul>
            <li><a href="/pagina-inicial">Home</a></li>
            <li><a href="/sobre-nos">Quem somos</a></li>
            <li><a href="/solucoes">Soluções</a></li>
            <!-- <li><a href="/portfolio">Portfólio</a></li> -->
            <li><a href="/blog">Publicações</a></li>
            <li><a href="/contato">Contato</a></li>
			<li class="flags-menu"><?php echo do_shortcode('[gtranslate]'); ?></li>
        </ul>
      </div>
    </div>
     <!-- Fale conosco modal -->

  <div class="overlay-modal"></div>
  <div class="menu-full-modal">
    <div class="close-modal">
        <a href="#" class="menu-close">&times;</a>
    </div>
    <div class="menu-list-modal">
      <div class="contatoForm">
        <div class="contatoFormHeader">
            <div class="headerTag">
                <span class="line"></span>
                #FaleConosco
            </div>
            <div class="TitleDescription">
                <h2 class="headerTitle">CONTATO</h2>
                <p class="TitleDescrip">Deixe sua mensagem para saber mais sobre nossos serviços, dúvidas, sugestões, solicitações de entrevistas, dentre outras. </p>
            </div>
        </div>
        <div class="form">
            <?php echo do_shortcode('[contact-form-7 id="9870" title="Contato"]');?>
        </div>
    </div>
    </div>
  </div>
</header>