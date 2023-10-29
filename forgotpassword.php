<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Забыли пароль?</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <html data-theme="winter">

    </html>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Войдите в ваш аккаунт<!DOCTYPE html>
    </h2>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" method="post">
        <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Введите вашу зарегистрированную электронную почту</label>
        <div class="mt-2">
            <input id="email" name="email" type="email" placeholder="Введите электронную почту" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
        </div>
        <button class="btn btn-wide ml-20" type="submit">Войти</button>
    </form>

    <p class="mt-6 text-center text-sm text-gray-500">
        Вспомнили пароль?
        <a href="login.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Войти</a>
    </p>
    </div>

    <?php include("footer.php"); ?>
</body>

</html>