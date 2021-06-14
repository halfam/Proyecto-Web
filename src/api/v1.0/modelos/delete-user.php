<?php
if (!isset($conn)) $conn = "";

$id = $parametrosPath[0];

$sql = "DELETE FROM `usuario` WHERE `id` = $id";

mysqli_query($conn,$sql);