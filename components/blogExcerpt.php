<?php 


function blogExcerpt($thumbnail = "", $date = "", $title = "", $excerpt = "", $permalink = "") {
    $html = <<<"EOT"
    <div class="w-1/2 lg:w-1/3 rounded overflow-hidden px-2 mb-8 bg-gray-100 hover:bg-pink-100 cursor-pointer">
        <div>
            <img src="$thumbnail" />
        </div>
        <div> 
            <h3>$title</h3>
             
        </div>
    </div>
    EOT;

    echo $html;
}

// function blogExcerpt($thumbnail = "", $date = "", $title = "", $excerpt = "", $permalink = "") {
//     $html = <<<"EOT"
//     <div class="w-1/2 lg:w-1/3 rounded overflow-hidden px-2 mb-8 bg-gray-100 hover:bg-pink-100 cursor-pointer">
//         <div>
//             <img src="$thumbnail" />
//         </div>
//         <div>
//             <time datetime="$date">$date</time>
//             <h3>$title</h3>
//             <p>$excerpt</p>
//             <a href="$permalink">Read More</a>
//         </div>
//     </div>
//     EOT;

//     echo $html;
// }