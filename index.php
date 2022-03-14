<!DOCTYPE html>
    <html lang="fr">

      <head>
       <meta name="author" content="BARAS Gauthier" />
       <meta charset="utf-8" />
       <link href="index.css" rel="stylesheet" />
       <title>To Do List</title>
      </head>

      <body>
        
      <!-- La tete du To Do List -->
        <header class="Heading">
          <h1 class="TitrePrincipale">TODOLIST</h1><br />
        </header>

      <!-- Le Formulaire To Do List -->
        <section>
          <form action="ToDo.php" method="POST" class="Formulaire">
            <div class="Condition">
              <label>Important :<input type="checkbox" class="Important" name="Important" /></label>
              <label>Moins Important :<input type="checkbox" class="MoinsImportant" name="MoinsImportant" /></label>
            </div>
            <div class="InputText">
              <input type="text" class="Nom" name="Nom" placeholder="Votre Nom" /><br />
              <label>Date De Debut :<input type="date" class="DateDebut" name="DateDebut" /></label><br />
              <label>Date De Fin :<input type="date" class="DateFin" name="DateFin" /></label><br />
              <input type="text" class="TextList" name="TextList" placeholder="Votres Taches" />
              <input type="submit" class="Bouton" name="Bouton" Value="Ajouter" />
            </div>
            <div class="Result">
              <ul class="SousTitre">
                <li>Nom de l'auteur</li>
                <li>Date de debut et fin</li>
                <li>Status</li>
                <li>Action</li>
              </ul>
            </div> 
          </form>
        </section>

      </body>

    </html>