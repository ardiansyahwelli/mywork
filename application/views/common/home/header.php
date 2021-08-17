<!DOCTYPE html>
<html lang="<?php echo get_language_code();?>" dir="<?php echo language_type();?>">

<head>
  <meta charset="utf-8" />
  <title><?php if(isset($pagetitle)) echo $pagetitle;?> | <?php echo get_languageword('admin_panel');?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Conquerors Team">

  <meta name="keywords" content="<?php if(isset($this->config->item('seo_settings')->meta_keyword)) echo $this->config->item('seo_settings')->meta_keyword;?>">

  <meta name="description" content="<?php if(isset($this->config->item('seo_settings')->meta_description)) echo $this->config->item('seo_settings')->meta_description;?>">

  <link rel="icon" href="<?php echo get_fevicon();?>">
  
  <!-- Bootstrap Css -->
  <link href="<?= base_url() ?>public/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="<?= base_url() ?>public/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="<?= base_url() ?>public/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">