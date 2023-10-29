<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <html data-theme="winter"></html>
</head>
<body>
<?php include("header.php");?>
<section class="bg-gray-100">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">О нас</h2>
                <p class="mt-4 text-gray-600 text-lg">Добро пожаловать в NORTHERNHOMES, где ваши мечты о недвижимости становятся реальностью. Мы - не просто компания по недвижимости, мы - ваши партнеры в поиске идеального места, которое можно назвать домом.</p>
                <p class="mt-4 text-gray-600 text-lg">В NORTHERNHOMES мы понимаем, что покупка или продажа жилья - одно из самых значимых решений в вашей жизни. Поэтому наша компания строится на основе доверия, честности и непоколебимого стремления предоставлять высококачественные услуги по недвижимости.</p>
                <div class="mt-8">
                    <a href="contact.php" class="text-blue-500 hover:text-blue-600 font-medium">Напишите нам
                        <span class="ml-2">&#8594;</span></a>
                </div>
            </div>
            <div class="mt-12 md:mt-0">
                <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image" class="object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>
</section>
<?php include("footer.php");?> 
</body>
</html>