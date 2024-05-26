<header>
    <nav class="navbar">
        <ul class="nav-links">
            <li class="nav-item  logo"><a href="#">CALORIES</a></li>
            <li class="nav-item active"><a href="#">Calendario</a></li>
            <li class="nav-item"><a href="#">Imc</a></li>
            <li class="nav-item dropdown">
                <a href="#">Relatórios <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-content">
                    <li><a href="">Relatório 1</a></li>
                </ul>
            </li>
        </ul>
        <ul class="login">
            <li class="login-item"><a href="#">William</a></li>
            <li class="login-item "><img class="box-img" src="./assets/img/perfil.png" alt=""></li>
        </ul>
    </nav>
</header>

<section id="days-section">
    <div class="container">
        <div class="day">

            <?php foreach($days as $day):?>

            <div class="box-day">
                <a href="#">
                    <div class="informations">
                        <div class="date">
                            <h2>
                                <?= $day['data']?>
                            </h2>
                        </div>
                        <div class="infos">
                            <p>Refeições feitas:
                                <?= $day['refeicoes']?>
                            </p>
                            <p>Calorias:
                                <?= $day['calorias']?>kcal
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach;?>

            <a id="button">
                <div class="box-day-add">
                    <div class="circle">
                        <i class="icon fa-solid fa-plus"></i>
                    </div>
                </div>
            </a>
            <div class="popup visible">
            <div class="popup-content">
                    <h1>Inicie seu dia:</h1>
                    <i class="close fa-2xl fa-solid fa-xmark"></i>
                <form action="">
                    <div class="box-group">
                        <div class="box-input">
                            <label for="">Dia:</label>
                            <input type="date"  placeholder="Ex.: 2024-07-05">
                        </div>
                    </div>
                    <button class="btn-login">Criar Dia</button>
                </form>
            </div>
        </div>
        </div>
</section>


<footer>

</footer>