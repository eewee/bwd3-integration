<?php require_once "header.php"; ?>

<div class="row">
  <div class="col-md-8">
    <h1>
      Utilisation de Font Awesome
    </h1>
    <p>
      <u>Icône ajouté avec la class "fas fa-coffee" :</u><br>
      <i class="fas fa-coffee"></i> Lorem ipsum.
    </p>
    <p>
      <u>Icône ajouté sur un bouton :</u><br>
      <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i> Créer un utilisateur</button>
    </p>
    
    <p>
      <u>Icône ajouté sur un formulaire :</u><br>
      <?php
      // INIT
      $email    = "";

      // Si le formulaire a été validé :
      if (isset($_POST)) {
        
        // Si le champ "email" existe ET s'il est rempli
        if (isset($_POST['form_email']) && !empty($_POST['form_email'])) {
          $email = $_POST['form_email'];  
        }

        // Afficher les champs du formulaire :
        echo "Email    : ".$email."<br>";
      }
      ?>

      <form>
        <div class="form-group">
          <label for="form_email"><i class="fas fa-envelope"></i> Email</label>
          <input type="email" name="form_email" value="<?php echo $email; ?>" class="form-control" id="form_email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="form_password"><i class="fas fa-key"></i> Mot de passe</label>
          <input type="password" name="form_password" class="form-control" id="form_password">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Valider</button>
      </form>
    </p>
  
    <p>
      <u>Icônes réseaux sociaux :</u><br>
      <i class="fab fa-facebook-square fa-2x"></i> Facebook<br>
      <i class="fab fa-twitter-square fa-2x"></i> Twitter <br>
      <i class="fab fa-linkedin fa-2x"></i> Linkedin<br>
      <i class="fab fa-instagram-square fa-2x"></i> Instagram<br>
    </p>
  
    <p>
      <u>Icônes avec une couleur :</u><br>
      <span style="color:Tomato">
        <i class="fas fa-pizza-slice"></i> Pizza -50%
      </span>
    </p>
  
  </div>
  <div class="col-md-4">

    <div class="card" style="width: 18rem;">
      <img src="/images/font-awesome.png" class="card-img-top" alt="Logo font awesome">
      <div class="card-body">
        <h5 class="card-title">Font Awesome</h5>
        <p class="card-text">Utilisation de “Font Awesome” dans un projet de site internet. Après avoir récupérer un “Icône” sur le site de “Font Awesome”, nous allons l’utiliser sur cette page.</p>
        <a href="https://fontawesome.com" target="_blank" class="btn btn-primary">En savoir +</a>
      </div>
    </div>

  </div>
</div>

<?php require_once "footer.php"; ?>   