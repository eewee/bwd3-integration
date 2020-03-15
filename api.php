<?php require_once "header.php"; ?>

<div class="row">
  <div class="col-md-8">
    
    <h1>
      Utilisation d'une API
    </h1>
    
    <p>
      Utiliser la structure d'URL suivante pour afficher le "name", "created_at", "bio" et "blog" :
      <ul>
        <li>https://api.github.com/users/eewee</li>
      </ul>
    </p>
    
  </div>
  <div class="col-md-4">

    <div class="card" style="width: 18rem;">
      <img src="/images/api.jpg" class="card-img-top" alt="Logo API">
      <div class="card-body">
        <h5 class="card-title">API</h5>
        <p class="card-text">Utilisation d'une “API” dans un projet de site internet. Nous allons utiliser une API et la lecture d'un JSON depuis une URL.</p>
        <a href="https://fonts.google.com" target="_blank" class="btn btn-primary">En savoir +</a>
      </div>
    </div>

  </div>
</div>

<div class="row">
  <div class="col-md-12">
  
    <h2>
      Simple lecture d'un JSON / CSV et afficher les données.
    </h2>
    <p>
      Dépôt GitHub "The Johns Hopkins University" qui réalise la carte du monde des infections du coronavirus :
      <ul>
        <li>
          <a href="https://github.com/CSSEGISandData/COVID-19" target="_blank">https://github.com/CSSEGISandData/COVID-19</a>
        </li>
      </ul>
    </p>
    <p>
      Nous utiliserons les données présentes sur le dépôt de GitHub de "javieraviles" :
      <ul>
        <li>
          <a href="https://github.com/javieraviles/covidAPI" target="_blank">https://github.com/javieraviles/covidAPI</a>
        </li>
      </ul>
    </p>
    
    <h2>
      Lecture d'un JSON (coronavirus) :
    </h2>
    
    <?php
    $dataAll = file_get_contents('https://coronavirus-19-api.herokuapp.com/all'); 
    $resultsAll = json_decode($dataAll);
    echo "
    <div class='alert alert-warning' role='alert'>
      <h4 class='alert-heading'>Total mondial</h4>
      <ul>
        <li>Cas : ".$resultsAll->cases."</li>
        <li>Morts : ".$resultsAll->deaths."</li>
        <li>Rétabli/guéri : ".$resultsAll->recovered."</li>
      </ul>
      <hr>
      <p class='mb-0'>Donnée 2020 du coronavirus / COVID-19.</p>
    </div>"; ?>

    <table class="table table-striped table-hover table-sm table-dark">
      <thead>
        <tr>
          <th scope="col">Pays</th>
          <th scope="col">Cas</th>
          <th scope="col">Cas aujourd'hui</th>
          <th scope="col">Morts</th>
          <th scope="col">Morts aujourd'hui</th>
          <th scope="col">Rétabli/Guéri</th>
          <th scope="col">Active</th>
          <th scope="col">Critical</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $data = file_get_contents('https://coronavirus-19-api.herokuapp.com/countries'); 
        $results = json_decode($data);
        foreach ($results as $result) {
          $up = "";
          if ($result->country == "France") {
            $up = "bg-primary";
          }
          echo "
          <tr class='".$up."'>
            <th scope='row'>".$result->country."</th>
            <td>".$result->cases."</td>
            <td>".$result->todayCases."</td>
            <td>".$result->deaths."</td>
            <td>".$result->todayDeaths."</td>
            <td>".$result->recovered."</td>
            <td>".$result->active."</td>
            <td>".$result->critical."</td>
          </tr>";
        } ?>
      </tbody>
    </table>
  
  </div>
</div>

<?php require_once "footer.php"; ?>   