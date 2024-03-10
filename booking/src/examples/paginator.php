<!-- LOGIC -->
<?
    $max_p = 5;

    if (isset($_GET['p'])) {
        $page = $_GET['p'];

        if ($page < 1) {
            $page = 1;
        } else if ($page > $max_p) {
            $page = $max_p;
        } 

    } else {
        $page = 1;
    }   
    $prev_page = $page - 1;
    $next_page = $page + 1;
?>

<!-- TEMPLATE -->
<style>
    body { background-color: #222; color: white; text-align: center;}
    a { color: #ccc; text-decoration: none;}
    /* span a:nth-child(<?=$page ?>) {text-decoration: underline;} */
    a.active { text-decoration: underline; }
    .hidden { display: none; }
</style>

<div>
    You are on page <?=$page ?>
</div>
<hr>
<div>
    <!-- <span>
        <a href="?p=1">1</a>
        <a href="?p=2">2</a>
        <a href="?p=3">3</a> <-- click 
        <a href="?p=4">4</a>
        <a href="?p=5">5</a>
    </span> -->

    <a href="?p= <?= $prev_page ?>"
        <? if ($page == 1)
            print 'class="hidden"'
        ?>
    >&lt;</a>

    <? for ($i = 1; $i <= 5; $i++): ?>
        <a href="?p= <?= $i ?>" 
            <? if ($page == $i)
                print 'class="active"' 
            ?>
        ><?= $i ?></a>
    <? endfor ?>

    <a href="?p= <?= $next_page ?>"
        <? if ($page == $max_p)
            print 'class="hidden"'
        ?>
    >&gt;</a>

</div>