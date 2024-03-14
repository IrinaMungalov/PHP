<!-- LOGIC -->
<?

    $images = array (
        './images/1.jpg',
        './images/2.jpg',
        './images/3.jpg',
        './images/4.jpg',
        './images/5.jpg',
    );   

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
    .container { display: flex; align-items: center; justify-content: center; }
    a { color: #ccc; text-decoration: none; padding: 5px;}
    /* span a:nth-child(<?=$page ?>) {text-decoration: underline;} */
    a.active { text-decoration: underline; }
    .hidden { display: none; }
    
</style>

<div class="container">
    <a href="?p= <?= $prev_page ?>" 
        <? if ($page == 1)
            print 'class="hidden"'    
        ?>
    >◀</a>

    <img 
        src="<?= $images[$page - 1] ?>" 
        alt="Image <?= $page ?>"
    >

    <a href="?p= <?= $next_page ?>"
        <? if ($page == $max_p)
            print 'class="hidden"'
        ?>
    >▶</a>  

</div>

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

