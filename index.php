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
            <div class="InputText">
              <input type="text" class="Nom" name="Nom" placeholder="Votre Nom" /><br />
              <label><input type="date" class="Date1" name="Date1" />Aux</label><input type="date" class="Date2" name="Date2" /><br />
              <input type="text" class="TextList" name="TextList" placeholder="Votres Taches" />
              <input type="submit" class="Bouton" name="Bouton" Value="Ajouter" />
            </div>
        <!-- Résultat seront mis ici une fois le php bien développer. -->   
            <div class="Result">
              <ul class="SousTitre">
                <li>Taches</li>
                <li>Status</li>
                <li>Action</li>
              </ul>
            </div> 
          </form>
        </section>

      </body>

    </html>