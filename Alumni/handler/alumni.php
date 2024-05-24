<?php

function index($db)
{
    // dd($_SERVER);
    require BASE_PROJECT_PATH . "/repository/alumni.php";
    $r = getAllAlumni($db);

    masterView('alumni/index', ['alumni' => $r]);
}

function show($db)
{
    require BASE_PROJECT_PATH . "/repository/alumni.php";
    $r = findAlumniByID($db, $_GET['id']);

    masterView('alumni/show', ['alumni' => $r]);
}

function create($db)
{
    masterView('alumni/insert');
}

function store($db)
{
    require BASE_PROJECT_PATH . "/repository/alumni.php";

    $j = newAlumni($db, $_POST);

    header("Location: " . url("/alumni"));
    die();
}

function edit($db)
{
    require BASE_PROJECT_PATH . "/repository/alumni.php";
    $r = findAlumniByID($db, $_GET['id']);

    masterView('alumni/edit', ['alumni' => $r]);
}

function update($db)
{
    $id = $_GET['id'];

    require BASE_PROJECT_PATH . "/repository/alumni.php";

    $j = updateAlumniByID($db, $id, $_POST);

    header("Location: " . url("/alumni/show?id={$id}"));
    die();
}

function destroy($db)
{
    $id = $_GET['id'];

    require BASE_PROJECT_PATH . "/repository/alumni.php";

    $j = deleteAlumni($db, $id);

    header("Location: " . url("/alumni"));
    die();
}
