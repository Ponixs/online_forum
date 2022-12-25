

<div>
<ul class="pagination" >
    <li class="page-item"><a class = "page-link" href = "?page=<?php echo 1;?>">First</a></li>
    <li class="<?php if($page <= 1){ echo 'disabled'; } ?>">
        <a class = "page-link" href="?page=<?php echo $page - 1;?>">Prev</a>
    </li>
    <li class="<?php if($page >= $page){ echo 'disabled'; } ?>">
        <a class = "page-link" href = "?page=<?php echo $page + 1;?>">Next</a>
    </li>
    <li class="page-item"><a class = "page-link" href="?page=<?php echo ceil($max_posts / $max_page_posts) ?>">Last</a></li>
</ul>
</div>