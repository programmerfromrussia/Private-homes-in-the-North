<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Покупка недвижимости на Севере России</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <html data-theme="winter"></html>
    <style>
    .overlay-white {
        background-color: rgba(255, 255, 255, 0.8); 
    }
</style>

</head>
<body>
<?php include("header.php");?>

        <div class="mt-20 lg:w-12/12 text-black">
            <h1 class="ml-40 text-4xl text-success">Выберите себе<br>нужное жильё<br></h1>
            <form method="post" action="propertygrid.php">
                <div class="ml-20 mr-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-5 pt-10 px-20">
                    <div class="form-group">
                        <select class="form-select" name="type">
                            <option value="">Выбрать вид</option>
                            <option value="apartment">Квартира</option>
                            <option value="flat">Деревянный дом</option>
                            <option value="building">Изба</option>
                            <option value="house">Землянка</option>
                            <option value="villa">Скандинавский дом</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-select" name="stype">
                            <option value="">Выбрать статус</option>
                            <option value="rent">Аренда</option>
                            <option value="sale">Продажа</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="city" placeholder="Выберите город" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="filter" class="btn btn-success w-full">Найти недвижимость</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


<?php include("footer.php");?>
</body>
</html>