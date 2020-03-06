<?php

require 'includes/data.php';

function getTitle($page){
    global $pagesTitles;
    return $pagesTitles[$page];
}

function getBody($page){
    include "pages/$page.php";
    //return "getBody : $page";
}

function getFooter($page){
    include 'partials/footer.php';
    //return "getFooter : $page";
}

function getPages(){
    global $pagesTitles;
    return array_keys($pagesTitles);   
}

function getMultipleArray($elements, $class){
    $ret = ""; 
    $ret.= "<div class='$class'>";
    foreach($elements as $element){
        $ret.= "<ul class='$class'>";
        foreach($element as $k => $v){
            $ret.= "<li>";
           $ret.= "<span class='marray_label'>$k</span>";
           $ret.= "&nbsp;<span class='marray_value'>$v</span>";
           $ret.= "</li>";
        }
        $ret.= "</ul>";
    }
    $ret.= "</div>";
    return $ret;
}
function afficherTableau($rows, $headers) {
    ?>

    <table border="1">
        <tr>
            <?php foreach ($headers as $header): ?>
                <th><?php echo $header; ?></th>
            <?php endforeach; ?>
        </tr>

        <?php foreach ($rows as $row): ?>
            <tr>
                <?php for ($k = 0; $k < count($headers); $k++): ?>
                    <?php if ($k == 0){ ?>
                        <td><?php echo '<a href=formulaireUtilisateur.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
                    <?php } else { ?>
                        <td><?php echo $row[$k]; ?></td>
                    <?php } ?>

                <?php endfor; ?>
            </tr>
        <?php endforeach; ?>

    </table>
    <?php

}
function getHeaderTable() {
    $headers = array();
    $headers[] = "ID";
    $headers[] = "nom";
    $headers[] = "prenom";
    $headers[] = "age";
    $headers[] = "adresse";
    return $headers;
}



?>