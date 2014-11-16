<?php
  $aData = array(
    "1" => array("id"=>"1", "key"=>"Gerd Müller", "suggestion"=>"Gerd Müller, Hamburg", "suggestable"=>"true"),
    "2" => array("id"=>"2", "key"=>"Hans Huber", "suggestion"=>"Hans Huber, München", "suggestable"=>"true"),
    "3" => array("id"=>"3", "key"=>"Gustav Schmidt", "suggestion"=>"Gustav Schmidt, Berlin", "suggestable"=>"true"),
    "4" => array("id"=>"4", "key"=>"Erwin Schumbladt", "suggestion"=>"Erwin Schumbladt, Hannover", "suggestable"=>"true"),
    "item0" => array("id" =>"item0", "key" => "Jonah Eldredge", "suggestion" => "&lt;img src=\"img/online.png\"/> Jonah Eldredge &lt;span class=\"extra\">jeldredge@example.com&lt;/span>", "suggestable" => "true"),
    "item1" => array("id" =>"item1", "key" => "Mr Ray Duran", "suggestion" => "&lt;img src=\"img/online.png\"/> Mr Ray Duran &lt;span class=\"extra\">rd@example.com&lt;/span>", "suggestable" => "true"),
    "item2" => array("id" =>"item2", "key" => "Gavin Kovach", "suggestion" => "&lt;img src=\"img/online.png\"/> Gavin Kovach &lt;span class=\"extra\">gavin.kovach@example.com&lt;/span>", "suggestable" => "true"),
    "item3" => array("id" =>"item3", "key" => "Mr Lawrence Nesmith", "suggestion" => "&lt;img src=\"img/online.png\"/> Mr Lawrence Nesmith &lt;span class=\"extra\">&lt;/span>", "suggestable" => "true"),
    "item4" => array("id" =>"item4", "key" => "Mr Sebastian Seneca", "suggestion" => "&lt;img src=\"img/online.png\"/> Mr Sebastian Seneca &lt;span class=\"extra\">sebastian.seneca@example.com&lt;/span>", "suggestable" => "true"),
    "item5" => array("id" =>"item5", "key" => "Marshall Klemme", "suggestion" => "&lt;img src=\"img/online.png\"/> Marshall Klemme &lt;span class=\"extra\">marshall.klemme@example.com&lt;/span>", "suggestable" => "true"),
    "item6" => array("id" =>"item6", "key" => "Mr Grace Vashon", "suggestion" => "&lt;img src=\"img/online.png\"/> Mr Grace Vashon &lt;span class=\"extra\">Grace.Vashon@example.com&lt;/span>", "suggestable" => "true"),
    "item7" => array("id" =>"item7", "key" => "Magaret Farwell", "suggestion" => "&lt;img src=\"img/online.png\"/> Magaret Farwell &lt;span class=\"extra\">magaret@example.com&lt;/span>", "suggestable" => "true"),
    "item8" => array("id" =>"item8", "key" => "Ms. Lenora Desrosier", "suggestion" => "&lt;img src=\"img/offline.png\"/> Mr Lenora Desrosier &lt;span class=\"extra\">lenorad@example.com&lt;/span>", "suggestable" => "true"),
    "item9" => array("id" =>"item9", "key" => "Ms. Tammi Severt", "suggestion" => "&lt;img src=\"img/online.png\"/> Mr Tammi Severt &lt;span class=\"extra\">tammi.severt@example.com&lt;/span>", "suggestable" => "true"),
    "item10" => array("id" =>"item10", "key" => "Miss. Sandra Talbert", "suggestion" => "&lt;img src=\"img/offline.png\"/> Miss. Sandra Talbert &lt;span class=\"extra\">sandra.talbert@example.com&lt;/span>", "suggestable" => "true")
  );
  
  function namefilter($var) {
    return (stripos($var['suggestion'], $_GET['search']) !== false);
  }

  $aResult = array();
  if ($_GET['elementId'] == 'ajaxselect') {
    $aResult = array_filter($aData, 'namefilter');
  }

  if (count($aResult) == 0) {
    echo "{}";
  }
  else {
    echo json_encode($aResult);
  }
?>