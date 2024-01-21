<?php
function paging($all, $page, $num, $url)
{
    $total = ceil($all / $num);

    if ($page != 1) {
        $pervpage = ' <a href= "' . $url . 'page=' . ($page - 1) . '">&#171; </a>';
    } else {
        $pervpage = '&#171; ';
    }

    if ($page != $total) {
        $nextpage = ' <a href="' . $url . 'page=' . ($page + 1) . '"> &#187;</a>';
    } else {
        $nextpage = ' &#187;';
    }

    if ($page - 4 > 0) {
        $first = '<a href="' . $url . 'page=1">1</a>...';
    }

    if ($page + 4 <= $total) {
        $last = '...<a href="' . $url . 'page=' . $total . '">' . $total . '</a>';
    }

    if ($page - 2 > 0) {
        $page2left = ' <a href= "' . $url . 'page=' . ($page - 2) . '">' . ($page - 2) . '</a> ';
    }

    if ($page - 1 > 0) {
        $page1left = '<a href= "' . $url . 'page=' . ($page - 1) . '">' . ($page - 1) . '</a> ';
    }

    if ($page + 2 <= $total) {
        $page2right = ' <a href= "' . $url . 'page=' . ($page + 2) . '">' . ($page + 2) . '</a>';
    }

    if ($page + 1 <= $total) {
        $page1right = ' <a href="' . $url . 'page=' . ($page + 1) . '">' . ($page + 1) . '</a>';
    }

    return $pervpage . $first . $page2left . $page1left . '[' . $page . ']' . $page1right . $page2right . $last . $nextpage;
}
