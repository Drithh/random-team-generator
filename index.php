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
  <svg class="hidden" version="2.0">
      <defs>
        <symbol id="trash-bin" viewbox="0 0 256 256">
          <path
            d="m161 22c1 1 2 2 3 3 1 2 1 2 0 4-1 1-2 2-2 3-2 1-62 1-64 0-1 0-2-2-2-3-1-2-1-2 0-4 2-4 1-4 35-4 28 0 30 0 32 1zm59 35c3 1 4 5 2 8-1 2-3 3-13 3l-9 0 0 80c0 89 0 83-4 85-3 1-132 1-135 0-4-2-4 4-4-85l0-80-9 0c-10 0-12 0-13-3-1-2-1-5 1-7l2-2 91 0c81 0 91 0 92 1zm-151 88 0 77 59 0 59 0 0-77 0-77-59 0-59 0 0 77zm81-39 2 2 0 38 0 38-2 2c-2 2-6 2-8 0l-2-2 0-38 0-38 2-2c1-1 2-2 4-2 2 0 3 0 4 2zm-36 0 2 2 0 38 0 38-2 2c-2 2-6 2-8 0l-2-2 0-38 0-38 2-2c1-1 2-2 4-2 2 0 3 0 4 2z"
          />
        </symbol>
        <symbol id="check" viewbox="0 0 256 256">
          <path
            d="m211 60c-2 0-3 1-5 2-1 1-23 24-52 53-28 29-51 52-51 52 0 0-12-12-27-28-15-15-27-28-27-28 0 0-1-1-2-1-3-2-7-2-9-1-3 1-6 4-8 8 0 1 0 2 0 4 0 3 0 4 2 6 1 1 61 64 64 66 3 3 9 4 13 2 1 0 1-1 2-1 1 0 91-93 111-114 2-2 3-4 4-7 0-2 0-5 0-6-1-4-4-7-8-8-2 0-5 0-6 0z"
          />
        </symbol>
      </defs>
    </svg>
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
      <div
        class="header-table flex h-16 px-4 place-items-center border-y-secondary border-y-[1px] border-opacity-50 gap-x-[5%]"
      >
        <div
          class="font-PT font-bold text-base text-primary text-center w-[85%]"
        >
          Nama
        </div>
              
        <div
          class="font-PT font-bold text-base text-primary text-center w-[10%]"
        >
          Action
        </div>
      </div>
      <form id="form" action="team.php" method="post">
      </form>
      <div class="table-body"></div>
      <div class=" add-row flex h-20 px-4 place-items-center border-b-secondary border-b-[1px] border-opacity-50 gap-x-[5%]">
      <div
          class="font-Source text-base text-primary opacity-80 text-left w-[85%]"
        >
          <input
            id="nama"
            class="appearance-none h-[40px] block w-full text-primary rounded py-3 px-4 leading-tight ring-1 ring-opacity-50 ring-secondary focus-visible:outline-none focus-visible:ring-blue-500"
            type="text"
            placeholder="Nama"
            onkeypress="if (event.keyCode == 13) {addRow();}"
          />
        </div>
  
                
        <div
          class="font-Source text-base text-primary opacity-80 text-left w-[10%] flex place-content-center"
        >
          <button
            class="hover:bg-gray-100 w-12 h-12 duration-500 rounded-full flex place-content-center place-items-center"
            onclick="addRow();"
          >
            <svg
              fill="#424242"
              store="#424242"
              width="35"
              height="35"
              version="2.0"
            >
              <use href="#check" />
            </svg>
          </button>
        </div>
      </div>
      <div
        class=" mb-60 flex h-20 px-4 place-items-center place-content-between border-b-secondary border-b-[1px] border-opacity-50  "
      >
        
      
      <div
          class="font-Source text-base  text-primary opacity-80 text-left w-[30%] flex place-content-start"
        >
          <button
            class="hover:underline w-content font-bold duration-500 "
            onclick="addRandom();"
          >
            Tambah Nama Random
          </button>
        </div>
  
                
        <div
          class="font-Source text-base  text-primary opacity-80 text-left w-[30%] flex place-content-end pr-3"
        >
          <button
            class="hover:underline w-content font-bold duration-500 "
            onclick="createTeam();"
          >
            Buat Tim
          </button>
        </div>
      </div>
            
    </main>
  </body>
</html>