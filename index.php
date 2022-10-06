<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <?php require "title.php"; ?>
</head>

<body>
<div class="header">
    <div class="container">
        <div class="header-line">
            <h1>Моя страница</h1>
            
                <a class="nav-item" href="index.php">Главная</a>
                <!-- a href="<!- ?php	

                    $name='Главная'; 
                    $link='index.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><!- ?php	

                    if( $current_page )	
                        echo ' class="nav-item:hover"';
                echo $name;	
                ?></a -->

                <a class="nav-item" href="#contact">Контакты</a>
                <a class="nav-item" href="@">Достижения</a>
                <a class="autorization" href="autorization.php">Авторизация</a>
           
        </div>
    </div>    
</div>
    
<div class="header-down">
    <div class="table">
    <table bordercolor="DarkSlateGrey" style="background-color: white" border="3" align="center" cellpadding="10">
    <tr>
     <th>ФИО</th>
     <th>Возраст</th>
     <th>Университет</th>
     <th>Направление</th>
     <th>Курс</th>
    </tr>
    <tr><td align="center">Боюнова Ольга Сергеевна</td><td align="center">19</td><td align="center">Московский политехнический университет</td><td align="center">Корпоративные информационные системы</td><td align="center">2</td></tr>
    </table>
    </div>
    <div class="spisok">
        <?php require "spisok.php"; ?>
    </div>
    <div class="person">
        <?php 
            $s = date('s');
            $os = $s % 2;

            if ($os === 0)
            $name = 'foto1.jpg';
            else
            $name = 'foto3.jpg';

            echo '<img src = "'.$name.'" alt="Меняющаяся фотография" id = "body" height = 250px>';
        ?>
    </div>
</div>
    
<div class="footer">
    <div class="header-line">
        <p class="foot" id = "email">Почта: olga.boyunova@gmail.com</p>
        <p class="foot" id = "contact">Телефон: 89778010143</p>
        <a class="nav" href="feedback.php">Обратная связь</a>
        <p class="foot" id = "date"><?php require "date.php"; ?></p>
    </div>   
</div>
</body>  
</html>