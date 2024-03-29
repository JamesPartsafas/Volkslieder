<header class="sticky-top">
    <div class="row heading">
        <div class="col-6 col-head">
            <p class="header-name">
                <a class="dynamic-content changing" href="home?dc=<?php echo $_GET['dc']; ?>">Volkslieder</a>
            </p>
        </div>
        <div class="col-6 lang col-head">
            
            <!-- Language menu on desktop view -->
            <div class="lang-menu">
                <div class="en dynamic-content">
                    <div class="selected-lang english">
                        English
                    </div>
                </div>
                <div class="fr dynamic-content">
                    <div class="selected-lang french">
                        Français
                    </div>
                </div>
                <div class="de dynamic-content">
                    <div class="selected-lang german">
                        Deutsch
                    </div>
                </div>
                <ul>
                    <li>
                        <a class="-en">English</a>
                    </li>
                    <li>
                        <a class="-fr">Français</a>
                    </li>
                    <li>
                        <a class="-de">Deutsch</a>
                    </li>
                </ul>
            </div>
            
            <!-- Language menu on mobile view -->
            <div class="dropdown show">
                <a class="btn btn-secondary" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="en dynamic-content select"><img src="https://flagcdn.com/32x24/gb.png"> English</div>
                    <div class="fr dynamic-content select"><img src="https://flagcdn.com/32x24/fr.png"> Français</div>
                    <div class="de dynamic-content select"><img src="https://flagcdn.com/32x24/de.png"> Deutsch</div>
                </a>
                
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item"><img src="https://flagcdn.com/32x24/gb.png"> English</a>
                    <a class="dropdown-item"><img src="https://flagcdn.com/32x24/fr.png"> Français</a>
                    <a class="dropdown-item"><img src="https://flagcdn.com/32x24/de.png"> Deutsch</a>
                </div>
            </div>

        </div>
    </div>
</header>