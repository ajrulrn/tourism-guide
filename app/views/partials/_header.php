<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon icon-->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon/favicon.ico">
        <!-- Libs CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/prismjs/themes/prism.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/prismjs/plugins/toolbar/prism-toolbar.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/bootstrap-icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/dropzone/dist/dropzone.css" >
        <link href="<?= base_url(); ?>assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">
        
        
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/theme.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/timeline.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/chat.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/payment.css">
        
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
        <?php if ($this->router->class == 'transaction' && $this->router->method == 'detail') : ?>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/rating.css">
        <?php endif; ?>
        <title>Wamanra | </title>
    </head>
<body>