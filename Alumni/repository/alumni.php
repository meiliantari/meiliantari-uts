<?php


function getAllAlumni($db)
{
    $sql = <<<SQL
    SELECT 
        *
    FROM tb_alumni
    ORDER BY tahun_lulus DESC;
    SQL;

    $result =  mysqli_query($db, $sql);

    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

function findAlumniByID($db, $id)
{
    $sql = <<<SQL
    SELECT 
        *
    FROM tb_alumni
    WHERE id = $id
    LIMIT 1;
    SQL;

    $result =  mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 0) {
        return null;
    }

    return mysqli_fetch_assoc($result);
}

function newAlumni($db, $data)
{
    $sql = <<<SQL
    INSERT INTO `tb_alumni` 
    VALUES (
        NULL,
        '{$data['nim']}',
        '{$data['nama']}',
        '{$data['tahun_lulus']}',
        '{$data['instansi']}',
        NOW(),
        NOW()
    )
    SQL;

    if (mysqli_query($db, $sql)) {
        return mysqli_insert_id($db);
    } else {
        return null;
    }
}


function updateAlumniByID($db, $id, $data)
{
    $sql = <<<SQL
    UPDATE tb_alumni
    SET 
        nim = '{$data['nim']}',
        nama = '{$data['nama']}',
        tahun_lulus = '{$data['tahun_lulus']}',
        instansi = '{$data['instansi']}',
        updated_at = NOW()
    WHERE id = $id;
    SQL;

    if (mysqli_query($db, $sql)) {
        return $id;
    } else {
        return null;
    }
}

function deleteAlumni($db, $id)
{
    $sql = <<<SQL
    DELETE FROM tb_alumni WHERE id = $id;
    SQL;

    if (mysqli_query($db, $sql)) {
        return true;
    } else {
        return false;
    }
}
