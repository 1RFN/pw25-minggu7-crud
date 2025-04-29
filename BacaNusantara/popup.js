document.addEventListener('DOMContentLoaded', function () {
    const popup = document.getElementById('popup-notif');
    if (popup) {
        const status = popup.dataset.status;
        let message = "";
        let bgColor = "#4BB543"; // default: hijau sukses

        if (status === "tambah") {
            message = "✅ Data berhasil ditambahkan!";
        } else if (status === "edit") {
            message = "✅ Data berhasil diperbarui!";
        } else if (status === "hapus") {
            message = "🗑️ Data berhasil dihapus!";
            bgColor = "#e74c3c"; // merah untuk hapus
        }

        if (message) {
            popup.textContent = message;
            popup.style.backgroundColor = bgColor;
            popup.style.display = 'block';
            setTimeout(() => {
                popup.style.opacity = '0';
                setTimeout(() => popup.remove(), 500);
            }, 3000);
        }
    }
});
