<?php foreach ($config as $catego): ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#">
    <title>Titulo</title>

    <link href="<?= base_url('resources/min/plugin-min.css') ?>" type="text/css" rel="stylesheet">
    <link href="<?= base_url('resources/min/custom-min.css') ?>" type="text/css" rel="stylesheet" >
    <link href="<?= base_url('resources/js/pnotify.custom.min.css') ?>" type="text/css" rel="stylesheet" >
    <link href="<?= base_url('resources/css/style.css') ?>" type="text/css" rel="stylesheet" >
</head>

<body id="top" class="scrollspy">

<!--  Pre Loader  -->
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<!-- Navigation -->
 <div class="navbar-fixed">
  <!--  Dropdown Structure  -->



    <ul id='dropdown1' class='dropdown-content'>
        <?php foreach ($categoryParent as $key): ?>

        <li>
            <a style="font-size: 14px;" href="<?=site_url('/Frontend/categoria/'.$key->get('cat_id'))?>" class="dropdown-button" data-activates='secondDRP1'><?=$key->get('cat_name')?></a>
        </li>
          
        <?php endforeach ?>
    </ul>

    <?php foreach ($subCat as $key2):?>

    <ul id='secondDRP1' class='dropdown-content'>
        <?php if ($key2->get('cat_parent')==$key->get('cat_id')): ?>
            
        <li>
            <a style="font-size: 14px;" href="<?=site_url('/Frontend/categoria/'.$key2->get('cat_id'))?>">
                <?=$key2->get('cat_name')?>
            </a>
        </li>

        <?php endif ?>
    </ul>
        
    <?php endforeach ?>





	<ul id='dropdown2' class='dropdown-content'>
        <?php foreach ($categoryParent as $key): ?>

        <li>
            <a style="font-size: 14px;" href="<?=site_url('/Frontend/categoria/'.$key->get('cat_id'))?>" class="dropdown-button" data-activates='secondDRP2'><?=$key->get('cat_name')?></a>
        </li>
          
        <?php endforeach ?>
    </ul>

    <?php foreach ($subCat as $key2):?>

    <ul id='secondDRP2' class='dropdown-content'>
        <?php if ($key2->get('cat_parent')==$key->get('cat_id')): ?>
            
        <li>
            <a style="font-size: 14px;" href="<?=site_url('/Frontend/categoria/'.$key2->get('cat_id'))?>">
                <?=$key2->get('cat_name')?>
            </a>
        </li>

        <?php endif ?>
    </ul>
        
    <?php endforeach ?>



    <nav id="nav_f" style="background: <?= $catego->get('con_navbar') ?>" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="<?= base_url(); ?>" id="logo-container" class="brand-logo">Empresa</a>

                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="#index-banner">Inicio</a>
                    </li>

                    <li>
                        <a class='dropdown-button' href='<?= site_url('frontend/productos') ?>'>Productos</a><!--  data-activates='dropdown1' -->
                    </li>

                    <!-- <li>
                        <a href="#team">Equipo</a>
                    </li>
                    
                    <li>
                        <a href="#contacto">Contacto</a>
                    </li> -->
                </ul>


                <ul id="nav-mobile" class="side-nav">
                    <li>
                        <a href="#index-banner">Inicio</a>
                    </li>

                    <li>
                        <a href='<?= site_url('frontend/productos') ?>'>Productos</a>
                    </li>

                    <!-- <li>
                        <a href="#team">Equipo</a>
                    </li>
                    <li>
                        <a href="#contacto">Contacto</a>
                    </li> -->
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!-- Hero -->
<div class="section no-pad-bot scrollspy" id="index-banner" style="background:url(<?=base_url('resources/img/'.$catego->get('con_banner'))?>) no-repeat fixed center;background-size:100% 100%;">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
            <span>Empresa</span> 
           <span class="cd-words-wrapper waiting">
                <b class="is-visible">palabra 1</b>
                <b>palabra 2</b>
                <b>palabra 3</b>
            </span> 
        </h1>
    </div>
</div>
<!-- inicio and service -->
<?php foreach ($business as $emp): ?>
<div id="inicio" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h2 class="center header text_h2">
                    <?= $emp->get('emp_descripcion') ?>
                </h2>
            </div>
            <div  class="col s12 m4 l4 hoverable">
                <div class="center promo promo-example">
                    <i class="mdi-image-flash-on" style="color: <?= $catego->get('con_navbar') ?>"></i>
                    <h5 class="promo-caption">Misión</h5><!--mision,vision,objetivo-->
                    <p class="light center"><?= $emp->get('emp_mision') ?></p>
                </div>
            </div>
            <div  class="col s12 m4 l4 hoverable">
                <div class="center promo promo-example">
                    <i class="mdi-social-group" style="color: <?= $catego->get('con_navbar') ?>"></i>
                    <h5 class="promo-caption">Visión</h5><!--mision,vision,objetivo-->
                    <p class="light center"><?= $emp->get('emp_vision') ?></p>
                </div>
            </div>
            <div  class="col s12 m4 l4 hoverable">
                <div class="center promo promo-example">
                    <i class="mdi-hardware-desktop-windows" style="color: <?= $catego->get('con_navbar') ?>"></i>
                    <h5 class="promo-caption">Objetivo</h5><!--mision,vision,objetivo-->
                    <p class="light center"><?= $emp->get('emp_objetivo') ?></p>
                </div>
            </div>

        </div>
    </div>
</div>
<?php endforeach ?>

<!-- productos -->
<div class="section scrollspy" id="productos">
    <div class="container">
        <h2 class="header text_b center-align" style="color: <?= $catego->get('con_navbar') ?>">Productos destacados</h2>
        <div class="row">
        <?php $num=0; ?>
        <?php if ($product!=false): ?>
        <?php foreach ($product as $key0): ?>
            <?php if ($num!=3): ?><!-- cantidad de productos mostrados -->
            <div class="col s12 m4 l4">
            <a href="<?=site_url('frontend/detalle/'.$key0->get('pro_id'))?>">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                    
                        <img class="activator" src="<?= base_url('resources/img/'.$multimedia[$key0->get('pro_id')][0]->get('mul_route'));?>">
                    
                    </div>
                    <div class="card-content center-align">
                        <span class="card-title activator grey-text text-darken-4"><?= $key0->get('pro_name') ?></span>
                        <p><a>Precio: $ <?= $key0->get('pro_price') ?></a></p>
                    </div>
                </div>
            </a>
            </div>
            <?php $num++;  endif ?>
        <?php endforeach ?>
    <?php else: ?>
            <div class="col s12 m12 l12 center-align">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">No hay productos destacados.</span>
                    </div>
                </div>
            </div>

        <?php endif ?>
        </div>
    </div>
</div>

<!-- Team -->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="header text_b center-align" style="color: <?= $catego->get('con_navbar') ?>"> Nuestro equipo </h2>
        <div class="row">
            <?php foreach ($equipo as $key): ?>
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="<?= base_url('resources/img/'.$key->get('team_foto'))?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?= $key->get('team_nom') ?> <br/>
                            <small><em><a style="color: <?= $catego->get('con_footer') ?>"><?= $key->get('team_cargo') ?></a></em></small></span>
                        <p>
                            <?= $key->get('team_desc') ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<footer id="contacto" class="page-footer scrollspy" style="background: <?= $catego->get('con_footer') ?>">
    <div class="container">  
        <div class="row">
            <div class="col l4 s12">
                <h5 class="white-text">Redes sociales:</h5>
                <ul>
                <?php foreach ($redes as $key): ?>
                    <li>
                        <a class="white-text" href="https://<?= $key->get('red_url') ?>">
                            <i class="small fa <?= $key->get('red_ico') ?> white-text"></i>
                            <?= $key->get('red_nom') ?>
                        </a>
                    </li>
                <?php endforeach ?>
                </ul>
                <h5 class="white-text">Contacto:</h5>
                <ul>
                    <li>
                        <span style="color: #fff;"><?= $catego->get('con_phonenumber') ?></span>
                    </li>
                </ul>
            </div>
            <!-- <div class="col l8 s12">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-action-account-circle prefix white-text"></i>
                        <input id="form_name" name="name" type="text" class="validate white-text" required >
                        <label for="icon_prefix" class="white-text">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="mdi-communication-email prefix white-text"></i>
                        <input required id="form_email" name="email" type="email" class="validate white-text">
                        <label for="icon_email" class="white-text">Correo electrónico</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="mdi-editor-mode-edit prefix white-text"></i>
                        <textarea required id="msg_text" name="message" class="materialize-textarea white-text"></textarea>
                        <label for="icon_prefix2" class="white-text">Mensaje</label>
                    </div>
                    <div class="col offset-s7 s5">
                        <button style="background: <?= $catego->get('con_navbar') ?>" id="sendMail" class="btn waves-effect">Enviar
                            <i class="mdi-content-send right white-text"></i>
                        </button>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div title="Gracias a www.materializecss.com" class="footer-copyright center-align" style="background: <?= $catego->get('con_navbar') ?>">
        <div class="container">
            Creado por Clínica MyPE Inacap Renca<a class="white-text" href="http://www.inacap.cl"></a>.</a>
        </div>
    </div>
</footer>
<!--  Scripts-->
<script src="<?= base_url('resources/min/plugin-min.js') ?>"></script>
<script src="<?= base_url('resources/min/custom-min.js') ?>"></script>
<script src="<?= base_url('resources/js/pnotify.custom.min.js') ?>"></script>
<script type="text/javascript" charset="utf-8">
/*    $( "#perfilFalsh" ).click(function() {
        pNotify = new PNotify({
            title: 'Flash',
            text: 'Él es flash',
            type: 'error',
            hide: false,
            icon: "fa fa-bolt"
        });
        pNotify.open();
    });*/

    $(document).ready(function() {
        $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: true,
            hover: true,
            gutter: 0,
            belowOrigin: true,
            alignment: 'left'
            });
    });


    $( "#sendMail" ).click(function() {

        var name = $("#form_name").val();
        var email = $("#form_email").val();
        var message = $("#msg_text").val();

        $.ajax({
            method: "POST",
            url: "<?=site_url('/Frontend/sendMail')?>",
            data: {"namePost": name, "email": email, "message": message},
            type: 'json',
            success: function(response){
                    alert(response.msj);
                switch(response.msj) {
                    case 0:
                        pNotifyMail = new PNotify({
                            title: 'Error',
                            text: 'Su mensaje no fue enviado correctamente, intente nuevamente.',
                            type: 'error',
                            hide: false,
                            icon: "fa fa-error"
                        });
                        pNotifyMail.open();
                        break;
                    case 1:
                        pNotifyMail = new PNotify({
                            title: 'Exito !',
                            text: 'Su mensaje fue enviado correctamente!.',
                            type: 'success',
                            hide: false,
                            icon: "fa fa-error"
                        });
                        pNotifyMail.open();
                        break;
                }
            }
        });
    });
    </script>
</html>
<?php endforeach ?>