const addRow = () => {
  const nama = document.querySelector('#nama');

  if (!nama.value) {
    alert('Nama Tidak Boleh Kosong');
  } else {
    const rowData = {
      nama: nama.value,
    };
    nama.value = '';

    const row = setRow(rowData);
    document.querySelector('.table-body').appendChild(row);
  }
};

const addRandom = () => {
  fetch('https://randomuser.me/api/')
    .then((response) => response.json())
    .then((data) => {
      const name = data.results[0].name;
      const rowData = {
        nama: `${name.first} ${name.last}`,
      };
      const row = setRow(rowData);
      document.querySelector('.table-body').appendChild(row);
    });
};

const setRow = (rowData) => {
  const template = document.createElement('div');
  template.innerHTML = `
      <div
        class="item-table flex h-16  px-4 place-items-center border-b-secondary border-b-[1px] border-opacity-50 animate-height-enter gap-x-[5%]"
      >
        <div
          class="font-Source text-base text-primary opacity-80 text-center w-[85%]"
        >
          ${rowData.nama}
        </div>
        <div
          class="font-Source text-base text-primary opacity-80 text-left w-[10%] flex place-content-center"
        >
          <button
            class="hover:bg-gray-100 w-12 h-12 duration-500 rounded-full flex place-content-center place-items-center"
            onclick="deleteRow(this);"
          >
            <svg fill="#424242" width="35" height="35" version="2.0">
              <use href="#trash-bin" />
            </svg>
          </button>
        </div>
      </div>
    `.trim();
  return template.firstChild;
};

const deleteRow = async (row) => {
  row.parentNode.parentNode.classList.add('animate-height-exit');
  await new Promise((r) => setTimeout(r, 700));
  row.parentNode.parentNode.remove();
};

const createTeam = () => {
  const team = prompt('Jumlah Tim');
  if (isNaN(team)) {
    alert('Tolong Masukkan Angka');
    return;
  }
};
