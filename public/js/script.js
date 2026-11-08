
document.addEventListener("DOMContentLoaded", function () {
    const tombol = document.getElementById("tombol-detail");
    const detail = document.getElementById("detail-kolab");

    if (tombol && detail) {
        tombol.addEventListener("click", function () {
            if (detail.hidden) {
                detail.hidden = false;
                tombol.textContent = "Tutup Penjelasan";
                tombol.setAttribute("aria-expanded", "true");
            } else {
                detail.hidden = true;
                tombol.textContent = "Pelajari Lebih Lanjut";
                tombol.setAttribute("aria-expanded", "false");
            }
        });
    }
});
