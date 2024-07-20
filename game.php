<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="website icon" type="png" href="img/d.png">
    <link rel="stylesheet" href="css/game.css">
    <title>Tic Tac Toe</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.2/tailwind.min.css"
    />
  </head>
  <body>
    <body class="w-screen h-screen ctr">
      <div class="tabel ctr">
        <div class="board">
          <span id="col-0"></span><span id="col-1"></span
          ><span id="col-2"></span><span id="col-3"></span
          ><span id="col-4"></span><span id="col-5"></span
          ><span id="col-6"></span><span id="col-7"></span
          ><span id="col-8"></span>
        </div>
        <button id="reset">Resetar</button>
        <a href="home.php"><button class="voltar">Voltar</button></a>
      </div>
    </body>
    <script src="game.js"></script>
  </body>
</html>