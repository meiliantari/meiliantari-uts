<?php

return [
    ["GET /", "home@index"],

    ["GET /alumni", "alumni@index"],
    ["GET /alumni/create", "alumni@create"],
    ["POST /alumni", "alumni@store"],
    ["GET /alumni/show", "alumni@show"],
    ["GET /alumni/edit", "alumni@edit"],
    ["POST /alumni/update", "alumni@update"],
    ["POST /alumni/destroy", "alumni@destroy"],
];
