<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo view('components/dashboard/header'); 
    echo view('components/dashboard/navbar'); 
    echo view('components/dashboard/sidebar'); 
    echo view('contents/landing');
    echo view('components/dashboard/footer'); 
    ?>
</body>
</html>