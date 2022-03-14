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
          <form action="AllFile.php">
            <div>
              <input type="text" class="TextList" name="TextList" />
              <input type="submit" class="Bouton" name="Bouton" Value="+" />
            </div>
          </form>
        </section>

       <!-- Tous le reste des fichier PHP --> 
        <?php include("list.php"); ?>

      </body>

    </html>