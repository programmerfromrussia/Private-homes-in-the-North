<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <html data-theme="winter"></html>
</head>
<body>
<div class="navbar bg-base-100">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>

      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Главная</a></li>
        <li>
          <a>Недвижимость</a>
          <ul class="p-2">
            <li><a>Покупка</a></li>
            <li><a>Продажа</a></li>
          </ul>
        </li>
        <li><a>Контакты</a></li>
        <li><a>О нас</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost normal-case text-xl">NorthernHomes</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a>Главная</a></li>
      <li tabindex="0">
        <details>
          <summary>Недвижимость</summary>
          <ul class="p-2">
            <li><a>Покупка</a></li>
            <li><a>Продажа</a></li>
          </ul>
        </details>
      </li>
      <li><a>Контакты</a></li>
      <li><a>О нас</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <a class="btn">Войти</a>
  </div>
</div>



</body>
</html>