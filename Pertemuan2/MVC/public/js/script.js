$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#judulModalLabel").html("Tambah Data User");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#name").val("");
    $("#email").val("");
    $(".modal-body form").attr("action", "http://localhost/prakweb2025/Pertemuan2/MVC/public/user/tambah");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#judulModalLabel").html("Ubah Data User");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr("action", "http://localhost/prakweb2025/Pertemuan2/MVC/public/user/ubah");

    const id = $(this).data("id");
    // karena objek pake {}
    $.ajax({
      url: "http://localhost/prakweb2025/Pertemuan2/MVC/public/user/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#name").val(data.name);
        $("#email").val(data.email);
        $("#id").val(data.id);
      },
    });
  });
});
