<?php 


function sectionTitle($title) {
    $html = <<<"EOT"
        <h2 class="mb-6">
            $title
            <div class="h-2 mt-6 m-auto bg-pink-500" style="width: 45px"></div>
        </h2>
    EOT;

    echo $html;
}