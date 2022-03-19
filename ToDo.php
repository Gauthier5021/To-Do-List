<!DOCTYPE html>
    <html lang="fr">

      <head>
       <meta name="author" content="BARAS Gauthier" />
       <meta charset="utf-8" />
       <link href="index.css" rel="stylesheet" />
       <title>To Do List</title>
      </head>

      <body>

        <div class="NavBar">
          <ul class="SousTitre">
            <li>Nom de l'auteur</li>
            <li>Date de debut</li>
            <li>Date de fin</li>
            <li>Action</li>
            <li>Status</li>
          </ul>
        </div>
        
      <!-- La tete du To Do List -->
        <header class="Heading">
          <h1 class="TitrePrincipale">TODOLIST</h1><br />
        </header>

      <!-- Le Formulaire To Do List -->
        <section class="ToDoList">
          <form action="index.php" method="POST" class="Formulaire">
            <div class="Condition">
              <label class="TitreCheckbox">Important <input type="checkbox" class="Checkbox" name="Important" /></label>
              <label class="TitreCheckbox">Moins Important <input type="checkbox" class="Checkbox" name="MoinsImportant" /></label>
              <input type="text" class="Nom" name="Nom" placeholder="Votre Nom Ex. Gauthier " />
            </div>
            <div class="InputText">
              <label class="TitreDateDebut">Date De Debut :<input type="date" class="DateDebut" name="DateDebut" /></label><br />
              <label class="TitreDateFin">Date De Fin :<input type="date" class="DateFin" name="DateFin" /></label><br />
              <input type="text" class="TextList" name="TextList" placeholder="Votres Taches" />
              <input type="submit" class="BoutonAjouter" name="Bouton" Value="Ajouter" />
            </div>
            <div class="DelList">
              <input type="submit" class="BoutonDel" name="BoutonDel" value="Supprimer les taches" />
            </div> 
          </form>
        </section>

        <?php include("ToDo.php"); ?>

      </body>

    </html>
