<section class="partner-section container-fluid">
    <div class="container">
        <h2>~ Partner Kami ~</h2>
        <div class="partner-list">
            <img src="/assets/images/partner/mncpublishing.jpg" alt="Partner 1">
            <img src="/assets/images/partner/bcn.jpg" alt="Partner 2">
            <img src="/assets/images/partner/praisebooks.jpg" alt="Partner 3">
            <img src="/assets/images/partner/msa.jpg" alt="Partner 4">
            <img src="/assets/images/partner/ezekielpublishing.jpg" alt="Partner 5">
        </div>
    </div>
</section>

<?php
function formatNomorTelepon($nomor)
{
    // Pisahkan berdasarkan koma
    $nomorList = array_map('trim', explode(',', $nomor));

    // Format setiap nomor
    $hasil = array_map(function ($item) {
        // Ambil hanya angka
        $item = preg_replace('/\D/', '', $item);

        // Format 4-4-4 (12 digit)
        if (strlen($item) == 12) {
            return substr($item, 0, 4) . '-' . substr($item, 4, 4) . '-' . substr($item, 8, 4);
        }

        // Format 4-4-5 (13 digit)
        if (strlen($item) == 13) {
            return substr($item, 0, 4) . '-' . substr($item, 4, 4) . '-' . substr($item, 8, 5);
        }

        // Jika panjang tidak sesuai, kembalikan apa adanya
        return $item;
    }, $nomorList);

    return implode('<br>', $hasil);
}
?>

<footer class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>YPMP JATIM</h2>
                <div class="footer-content">
                    <p>
                        <strong>Alamat:</strong>
                        <br>
                        {{ $data_pengaturan->alamat }}
                    </p>
                    <p>
                        <strong>No. Telp:</strong>
                        <br>
                        {!! formatNomorTelepon($data_pengaturan->notelp) !!}
                    </p>
                    <p>
                        <strong>
                            Email:
                        </strong>
                        <br>
                        {{ $data_pengaturan->email }}
                    </p>
                </div>
                <br><br>
            </div>
            <div class="col-lg-6">
                <h2>KIRIM PESAN</h2>
                <div class="footer-content">
                    <form action="" id="formPesan">
                        @csrf
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="pesanNama" class="form-label">Nama:</label>
                                    <input type="text" class="form-control" id="pesanNama" name="pesanNama"
                                        placeholder="...">
                                </div>
                                <div class="col-lg-6">
                                    <label for="pesanEmail" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="pesanEmail" name="pesanEmail"
                                        placeholder="...">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="pesanSubjek" class="form-label">Subjek:</label>
                            <input type="text" class="form-control" id="pesanSubjek" name="pesanSubjek"
                                placeholder="...">
                        </div>
                        <div class="mb-3">
                            <label for="pesanPesan" class="form-label">Pesan:</label>
                            <textarea id="pesanPesan" class="form-control" name="pesanPesan" rows="5"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-sm btn-light"><i class="fa-solid fa-paper-plane"></i>
                                Kirim Pesan</button>
                            <button type="reset" class="btn btn-sm btn-secondary"><i class="fa-solid fa-trash"></i>
                                Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="copyright-section container-fluid">
    <div class="container">
        <p>Copyright &copy; 2026 <strong>
                Yayasan Pengembangan Mutu Pendidikan</strong>. All Right Reserved.</p>
    </div>
</section>
