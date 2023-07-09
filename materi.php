<?php
$subjectId  = $_GET['id_materi'] ?? 1;
$subject    = mysqli_fetch_array(
    mysqli_query($koneksi, "
        SELECT

            m1.*,

            (
                SELECT m2.id_materi FROM `materi` m2 WHERE m2.`order` < m1.`order` ORDER BY m2.`order` DESC LIMIT 0, 1
            ) AS `previous_id_materi`,

            (
                SELECT m2.sub_judul FROM `materi` m2 WHERE m2.`order` < m1.`order` ORDER BY m2.`order` DESC LIMIT 0, 1
            ) AS `previous_sub_judul`,

            (
                SELECT m2.id_materi FROM `materi` m2 WHERE m2.`order` > m1.`order` ORDER BY m2.`order` ASC LIMIT 0, 1
            ) AS `next_id_materi`,

            (
                SELECT m2.sub_judul FROM `materi` m2 WHERE m2.`order` > m1.`order` ORDER BY m2.`order` ASC LIMIT 0, 1
            ) AS `next_sub_judul`

        FROM `materi` m1
        WHERE `id_materi` = '$subjectId'
    ")
);
$subjects   = mysqli_query($koneksi, "SELECT * FROM `materi` ORDER BY `order` ASC");
?>

<div class="row">
    <div class="col-md-9">
        <h2>Materi</h2>

        <div>
            <h4><?= $subject['sub_judul']; ?></h4>

            <div style="margin-bottom: 10px;">
                <?= $subject['deskripsi']; ?>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?php if ($subject['previous_id_materi'] != '') : ?>
                        <a class="pull-left" href="?page=materi&id_materi=<?= $subject['previous_id_materi']; ?>" style="font-size: 16px;">
                            &#60;&#60;
                            Materi sebelumnya:
                            <em>
                                <?= $subject['previous_sub_judul']; ?>
                            </em>
                        </a>
                    <?php endif ?>
                </div>

                <div class="col-md-6">
                    <?php if ($subject['next_id_materi'] != '') : ?>
                        <a class="pull-right" href="?page=materi&id_materi=<?= $subject['next_id_materi']; ?>" style="font-size: 16px;">
                            Materi selanjutnya:
                            <em>
                                <?= $subject['next_sub_judul']; ?>
                            </em>
                            &#62;&#62;
                        </a>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <h3>Daftar Isi</h3>

        <ul>
            <?php
            foreach ($subjects as $subject) {
                echo "
                        <li>
                            <a href='?page=materi&id_materi=$subject[id_materi]'>
                                $subject[sub_judul]
                            </a>
                        </li>
                    ";
            }
            ?>
        </ul>
    </div>
</div>