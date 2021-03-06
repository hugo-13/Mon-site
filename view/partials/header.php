<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="../#header"><img src="../images/logo_blc.png" alt="" width="50px" height="50px" class="logo" id="image0"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" id="nav-but" aria-label="Toggle navigation" onclick="navChange()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link line-anim" aria-current="page" href="../#header">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../#presentation">Qui suis-je ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../#parcours">Mon parcours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../#xp">Mes compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../#contact">Me contacter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    function navChange() {
        verif = document.getElementById("nav-but").getAttribute("aria-expanded");
        if (verif == "false") {
            document.getElementById("navbar").style.background = "#a8a8a862";
        } else {
            document.getElementById("navbar").style.background = "#4a4a4a";
        }
    }
</script>