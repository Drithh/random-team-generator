<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Random Team</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&family=PT+Sans&family=Source+Sans+Pro&display=swap');
    </style>
      <script src="script.js"></script>
  </head>
  <body
    class="flex flex-col place-content-center place-items-center min-w-[768px]"
  >

    <header class="mt-20 flex place-content-center place-items-center flex-col">
      <div class="font-PT font-medium text-6xl text-primary mb-4 text-center">
        Team Generator
      </div>
      <div
        class="text-primary font-Josefin font-medium tracking-wider text-xl text-center"
      >
        Buat Kelompok Secara Acak dan Adil!
      </div>
    </header>
    <main class="flex flex-col mt-32 lg:w-[90%] w-full max-w-4xl">
        <?php if(isset($_POST['submit'])) { ?>
            <?php print_r($_POST); ?> 
        <?php } ?>
    </main>
  </body>
</html>