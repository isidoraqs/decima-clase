<?php include('header.php');?>
<section>
<h2>Todo sobre flora y fauna Chilena</h2>
<?php
$blog = array_map('str_getcsv', file('data/blog.csv'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
$all = count($blog);
;?>
  <h4><?php echo($blog[$n]["Flora Chilena"])?></h4>

  <h6>Especies nativas de Chile </h6>
    <h8>En este link podrás obtener más información del ministerio de medio ambiente </h8>
  <p><?php echo($blog[$n]["post_excerpt"])?> [<a href=http://especies.mma.gob.cl/CNMWeb/Web/WebCiudadana/especies_nativas.aspx">Ver más</a>]</p>

  <h6>Existen diferentes especies que estan actualmente amenzadas en Chile </h6>
    <h8>En este link podrás obtener más información del ministerio de medio ambiente </h8>
<p><?php echo($blog[$n]["post_excerpt"])?> [<a href="http://especies.mma.gob.cl/CNMWeb/Web/WebCiudadana/especies_amenazadas.aspx">Ver más</a>]</p>

<h6>Fauna silvestre de zonas afectadas huye de los incendios hacia sectores poblados </h6>
  <h8>Animales como zorros, chingues y güiñas llegan heridos en busca de refugio y comida. Según expertos, es probable que en el futuro las poblaciones de estas especies se vean afectadas por el fuego.</h8>
<p><?php echo($blog[$n]["post_excerpt"])?> [<a href=http://www.emol.com/noticias/Nacional/2017/01/24/841467/Fauna-silvestre-de-zonas-afectadas-huyen-de-los-incendios-hacia-sectores-poblados.html">Ver más</a>]</p>
</section>
<?php include('footer.php');?>
