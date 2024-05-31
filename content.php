<?php
if($_GET['module']=='buku'){
    include "content/buku/index.php";
}

else if($_GET['module']=='petugas'){
    include "content/petugas/index.php";
}

else if($_GET['module']=='anggota'){
    include "content/anggota/index.php";
}

else if($_GET['module']=='pinjam'){
    include "content/pinjam/index.php";
}

else if($_GET['module']=='kembali'){
    include "content/kembali/index.php";
}

else if($_GET['module']=='edit-kembali'){
    include "content/kembali/edit.php";
}

else if($_GET['module']=='simpanedit'){
    include "content/kembali/simpanedit.php";
}


?>