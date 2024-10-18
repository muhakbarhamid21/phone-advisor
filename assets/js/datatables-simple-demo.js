document.addEventListener("DOMContentLoaded", function () {
  const table = document.getElementById("datatablesSimple1");
  if (table) {
    new simpleDatatables.DataTable(table, {
      paging: false, // Menonaktifkan pagination (entries per page)
      searching: false,
      searchable: false,
      sortable: false, // Menonaktifkan fitur pencarian
      info: false, // Menonaktifkan informasi jumlah entries
    });
  }
});
document.addEventListener("DOMContentLoaded", function () {
  const table = document.getElementById("datatablesSimple2");
  if (table) {
    new simpleDatatables.DataTable(table, {
      paging: false, // Menonaktifkan pagination (entries per page)
      searching: false,
      searchable: false,
      sortable: false, // Menonaktifkan fitur pencarian
      info: false, // Menonaktifkan informasi jumlah entries
    });
  }
});
