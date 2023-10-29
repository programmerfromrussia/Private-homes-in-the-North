<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Покупка недвижимости на Севере России</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <html data-theme="winter"></html>
</head>
<body>
<?php include("header.php");?>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Зарегистрируйте ваш аккаунт<!DOCTYPE html>
</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" method="post">
      <label for="profile-image" class="block text-sm font-medium leading-6 text-gray-900">Profile Picture</label>
      <div class="mt-1">
        <input id="profile-image" name="profile-image" type="file" accept="image/*" class="w-full">
      </div>
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Имя</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" placeholder="Введите ваше имя" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
    <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Электронная почта</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" placeholder="Введите электронную почту" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Номер телефона</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" placeholder="Введите ваш номер" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Пароль</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" placeholder="Введите ваш пароль" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="mt-2">
      <label for="usertype" class="block text-sm font-medium leading-6 text-gray-900">Вид пользователя</label>
      <div class="relative">
        <select id="usertype" name="usertype" class="block w-full rounded-md border border-gray-300 py-2 text-gray-900 shadow-sm focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm sm:leading-6">
          <option value="buyer">Покупатель</option>
          <option value="agent">Риелтор</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
      </div>
    </div>
    <button class="btn btn-wide ml-20" type="submit">Войти</button>
    <p class="mt-10 text-center text-sm text-gray-500">
      У вас уже есть аккаунт?
      <a href="login.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Войти в свой аккаунт</a>
    </p>
</div><br><br><br>
</form>



<?php include("footer.php");?>
</body>
</html>