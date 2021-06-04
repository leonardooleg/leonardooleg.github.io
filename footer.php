<footer class="main-footer d-flex p-2 px-3 bg-white border-top">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
        </li>
    </ul>
    <span class="copyright ml-auto my-auto mr-2">Copyright © 2018
              <a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
            </span>
</footer>
</main>
</div>
</div>
<div class="promo-popup animated">

    <div class="pp-intro-bar"> <?=$lang["contact"]?>
        <span class="close">
          <i class="material-icons">close</i>
        </span>
        <span class="up">
          <i class="material-icons">keyboard_arrow_up</i>
        </span>
    </div>
    <div class="pp-inner-content">
        <div class="col">
            <a href="http://t.me/leonardooleg" target="_blank" type="button" class="mb-2 btn btn-sm btn-primary mr-1">Telegram: leonardooleg</a>
            <a type="button" class="mb-2 btn btn-sm btn-secondary mr-1" target="_blank" href="skype:leonardooleg?chat">Skype: leonardooleg</a>

                <a type="button" class="mb-2 btn btn-sm btn-success mr-1" href="https://www.upwork.com/freelancers/~015f8fe63b1f642442?viewMode=1" target="_blank">UPwork  </a>

            <a  href="mailto:leonardooleg2@gmail.com" target="_blank" type="button" class="mb-2 btn btn-sm btn-danger mr-1">Email: leonardooleg2@gmail.com</a>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
<script src="scripts/extras.1.1.0.min.js"></script>
<script src="scripts/shards-dashboards.1.1.0.min.js"></script>
<script src="scripts/app/app-blog-overview.1.1.0.js"></script>
<script>

    const buttonRU = document.getElementById('ru');
    buttonRU.addEventListener('click', function () {
        document.cookie = "lang=ru";
        document.location.reload();
        console.log()
    });
   /* const buttonEN = document.getElementById('en');
    buttonEN.addEventListener('click', function () {
        document.cookie = "lang=en";
        document.location.reload();
    });*/
    const buttonUA = document.getElementById('ua');
    buttonUA.addEventListener('click', function () {
        document.cookie = "lang=ua";
        document.location.reload();
    });


</script>
</body>
</html>