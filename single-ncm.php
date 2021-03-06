<?php get_header(); ?>
<?php get_template_part('templates/header') ?>


<?php while (have_posts()): the_post(); ?>
<section class="row expanded">
	<section id="content" class="large-8 float-left single single-id-<?php the_ID(); ?>">
		<?php get_template_part("templates/breadcrumbs" ); ?>

	
		<section class="tree">
		<h6>Essa NCM está em: </h6>
		<ul class="accordion hierarquia" data-accordion>
			<?php echo getHierarquiaTitulo(get_the_ID()); ?>
		</ul>
		<br>
		
		</section>

		<?php get_template_part("templates/cests_eans"); ?>
		
		<header>
			<h3><?php the_title() ?></h3>
		</header>

		<main>
			<?php $observacao_id = get_post_meta(get_the_ID(), 'observacao')[0] ?>
			<?php $observacao = get_post($observacao_id); ?>
			<?php conteudo($observacao->post_content); ?>
		</main>
	</section>
	<?php get_sidebar(); ?>
</section>
<?php endwhile;?>

<?php #get_template_part("templates/noticias"); ?>
<?php #get_template_part("templates/depoimentos"); ?>
<?php #get_template_part("templates/parceiros"); ?>
<?php get_footer(); ?>	