<?php

if(session('access_token')) {
  $user = apiRequest($APIRequestUser);
  $guilds = apiRequest($APIRequestAllGuilds);
  $avatar = "https://cdn.discordapp.com/avatars/" . $user->id . "/" . $user->avatar . ".png";
  $username = $user->username;
  $discriminator = $user->discriminator;
  $email = $user->email;
} else {
  header('Location: https://www.mythigame.net/dashboard?action=login');
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NanoBot | Dashboard</title>
  <meta name="description" content="Site du bot discord NanoBot" />
  <meta name="author" content="Stellaros" />
  <meta name="keywords" content="nanobot, mgc, mythigame, community, discord, java, bot, robot, association, outil, administration, modération, panel, admin, dashboard">
  <meta property="og:title" content="NanoBot | Dashboard"/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content="https://www.mythigame.net/dashboard"/>
  <meta property="og:site_name" content="NanoBot | Dashboard"/>
  <meta property="og:description" content="Site du bot discord NanoBot"/>
  <meta name="twitter:title" content="NanoBot | Dashboard" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="https://www.mythigame.net/dashboard" />
  <meta name="twitter:card" content="" />
  
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="<?= $avatar ?>" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Se déconnecter
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profil</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Paramètres</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="https://www.mythigame.net/dashboard?action=logout" class="nav-item dropdown-item">Se déconnecter</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
            <div class="col-md-12">
            <div class="card  card-plain">
              <div class="card-header">
                <h4 class="card-title"> SÉLECTIONNEZ UN SERVEUR</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th class="text-center">
                          Icon
                        </th>
                        <th class="text-center">
                          Nom
                        </th>
                        <th class="text-center">
                          Gestion
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($guilds as $guild){
                          if(($guild->permissions & 0x8) == 0x8 || ($guild->permissions & 0x20) == 0x20){
                            if($guild->icon == null){
                              $guildIcon = "https://www.mythigame.net/img/discorddefaultlogo.png";
                            }else{
                              $guildIcon = "https://cdn.discordapp.com/icons/" . $guild->id . "/" . $guild->icon . ".png";
                            }

                            $getDbGuild = $bdd->query("SELECT * FROM servers WHERE idserver= " . $guild->id);
                            $res = $getDbGuild->fetch(PDO::FETCH_OBJ);
                            if($res != null){
                              $button = "Gérer le serveur";
                              ?>
                                <tr>
                                  <td>
                                    <div class="photo">
                                    <img src="<?= $guildIcon ?>">
                                    </div>
                                  </td>
                                  <td>
                                    <?= $guild->name ?>
                                  </td>
                                  <td class="text-center">
                                    <a href="https://www.mythigame.net/dashboard?select=<?= $guild->id ?>"><?= $button ?></a>
                                  </td>
                                </tr>
                              <?php
                            }
                          }
                        }

                        foreach($guilds as $guild){
                          if(($guild->permissions & 0x8) == 0x8 || ($guild->permissions & 0x20) == 0x20){
                            if($guild->icon == null){
                              $guildIcon = "https://www.mythigame.net/img/discorddefaultlogo.png";
                            }else{
                              $guildIcon = "https://cdn.discordapp.com/icons/" . $guild->id . "/" . $guild->icon . ".png";
                            }

                            $getDbGuild = $bdd->query("SELECT * FROM servers WHERE idserver= " . $guild->id);
                            $res = $getDbGuild->fetch(PDO::FETCH_OBJ);
                            if($res == null){
                              $button = "Installer NanoBot";
                              ?>
                                <tr>
                                  <td>
                                    <div class="photo">
                                    <img src="<?= $guildIcon ?>">
                                    </div>
                                  </td>
                                  <td>
                                    <?= $guild->name ?>
                                  </td>
                                  <td class="text-center">
                                    <a href="https://discord.com/oauth2/authorize?client_id=337135791140765700&scope=bot&permissions=8"><?= $button ?></a>
                                  </td>
                                </tr>
                              <?php
                            }
                          }
                        }
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
</body>

</html>