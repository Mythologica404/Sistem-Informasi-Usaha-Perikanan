/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";
$(document).ready(function () {
  $("#table-identitas-usaha").DataTable({
    dom: "Bfrtip",
    buttons: [
      {
        extend: "pdf",
        orientation: "landscape",
        pageSize: "Legal",
        title: "Tabel Identitas Usaha",
        download: "open",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16],
          modifier: {
            selected: null,
          },
        },
        className: "btn-primary",
      },
      {
        extend: "csv",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16],
        },
        className: "btn-primary",
      },
      {
        extend: "print",
        title: "Tabel Identitas Usaha",
        orientation: "landscape",
        pageSize: "Legal",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16],
        },
        className: "btn-primary",
      },
      {
        title: "Tabel Identitas Usaha",
        extend: "copy",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16],
        },
        className: "btn-primary",
      },
    ],
  });
});

$(document).ready(function () {
  $("#table-produk").DataTable({
    dom: "Bfrtip",
    buttons: [
      {
        extend: "pdf",
        orientation: "landscape",
        pageSize: "Legal",
        title: "Tabel Produk",
        download: "open",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        },
        className: "btn-primary",
      },
      {
        extend: "csv",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        },
        className: "btn-primary",
      },
      {
        extend: "print",
        title: "Tabel Produk",
        orientation: "landscape",
        pageSize: "Legal",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        },
        className: "btn-primary",
      },
      {
        title: "Tabel Produk",
        extend: "copy",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        },
        className: "btn-primary",
      },
    ],
  });
});

$(document).ready(function () {
  $("#table_trx").DataTable({
    dom: "Bfrtip",
    buttons: [
      {
        extend: "pdf",
        orientation: "landscape",
        pageSize: "Legal",
        title: document.getElementById("nama-table").innerHTML,
        download: "open",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
        },
        className: "btn-primary",
      },
      {
        extend: "csv",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
        },
        className: "btn-primary",
      },
      {
        extend: "print",
        title: document.getElementById("nama-table").innerHTML,
        orientation: "landscape",
        pageSize: "Legal",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
        },
        className: "btn-primary",
      },
      {
        title: document.getElementById("nama-table").innerHTML,
        extend: "copy",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
        },
        className: "btn-primary",
      },
    ],
  });
});

$(document).ready(function () {
  $("#table-3attribute").DataTable({
    dom: "Bfrtip",
    buttons: [
      {
        extend: "pdf",
        orientation: "landscape",
        pageSize: "Legal",
        title: document.getElementById("nama-table").innerHTML,
        download: "open",
        exportOptions: {
          columns: [0, 1, 2],
        },
        className: "btn-primary",
      },
      {
        extend: "csv",
        exportOptions: {
          columns: [0, 1, 2],
        },
        className: "btn-primary",
      },
      {
        extend: "print",
        title: document.getElementById("nama-table").innerHTML,
        orientation: "landscape",
        pageSize: "Legal",
        exportOptions: {
          columns: [0, 1, 2],
        },
        className: "btn-primary",
      },
      {
        extend: "copy",
        title: document.getElementById("nama-table").innerHTML,
        exportOptions: {
          columns: [0, 1, 2],
        },
        className: "btn-primary",
      },
    ],
  });
});

$(document).ready(function () {
  $("#table-6attribute").DataTable({
    dom: "Bfrtip",
    buttons: [
      {
        extend: "pdf",
        orientation: "landscape",
        pageSize: "Legal",
        title: document.getElementById("nama-table").innerHTML,
        download: "open",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5],
        },
        className: "btn-primary",
      },
      {
        extend: "csv",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5],
        },
        className: "btn-primary",
      },
      {
        extend: "print",
        title: document.getElementById("nama-table").innerHTML,
        orientation: "landscape",
        pageSize: "Legal",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5],
        },
        className: "btn-primary",
      },
      {
        extend: "copy",
        title: document.getElementById("nama-table").innerHTML,
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5],
        },
        className: "btn-primary",
      },
    ],
  });
});

$(document).ready(function () {
  $("#table-harga").DataTable({
    dom: "Bfrtip",
    buttons: [
      {
        extend: "pdf",
        orientation: "landscape",
        pageSize: "Legal",
        title: document.getElementById("nama-table").innerHTML,
        download: "open",
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
        className: "btn-primary",
      },
      {
        extend: "csv",
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
        className: "btn-primary",
      },
      {
        extend: "print",
        title: document.getElementById("nama-table").innerHTML,
        orientation: "landscape",
        pageSize: "Legal",
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
        className: "btn-primary",
      },
      {
        extend: "copy",
        title: document.getElementById("nama-table").innerHTML,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
        className: "btn-primary",
      },
    ],
  });
});
