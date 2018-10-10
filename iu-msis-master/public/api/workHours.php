<?php

require '../../ap/common.php'

$projectId = intval($_GET['$projectId'] ?? 0);

if ($projectId < 1) {
  throw new Exception('Invalid Project ID in URL');
}

$workArr = WorkhoursReport::fetchByProjectId($projectId);

$json = json_encode($workArr, JSON_PRETTY_PRINT);

header('Content-Type: applicatin/json');
echo $json;
