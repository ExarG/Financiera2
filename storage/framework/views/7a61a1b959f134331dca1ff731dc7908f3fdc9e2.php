<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="<?php echo e(csrf_token()); ?>"/>
    <title>Laravel & Vue CRUD Single Page Application (SPA) Tutorial - MyNotePaper</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="<?php echo e(mix('css/app.css')); ?>" type="text/css" rel="stylesheet"/>
    <style>
        .bg-light {
            background-color: #eae9e9 !important;
        }
    </style>
</head>
<body>
<div id="app">
</div>
<script src="<?php echo e(mix('js/app.js')); ?>" type="text/javascript"></script>
</body>
</html><?php /**PATH C:\Users\Exar\Desktop\Proyectos\libros\laravel-vue-crud-spa\resources\views/app.blade.php ENDPATH**/ ?>