    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
        <h1><a href="index.php">WEB</h1>
        <ol>
        <?php
        // data 디렉토리의 파일 목록을 출력요청 to PHP
        // 파일 목록 하나하나를 li와 a 태그를 이용해 목록생성
        $list = scandir('data');
        $i = 0;
        while($i<count($list)){
            if($list[$i] != '.'){
                if($list[$i] != '..'){
                    ?>
                    <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                    <?php
                }
            }
            $i = $i+1;
        }
        ?>
    </ol>
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])) { ?>
        <a href="update.php?id=<?=$_GET['id']?>">update</a>
        <a href="delete_process.php?id=<?=$_GET['id']?>">delete</a>
        <form action="delete_process.php" method="post">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <input type="submit" value="delete">
        </form>
    <?php } ?>
            <!-- <ol>
    <li><a href="index.php?id=HTML">HTML</a></li>
    <li><a href="index.php?id=CSS">CSS</a></li>
    <li><a href="index.php?id=JavaScript">JavaScript</a></li>
    <li><a href="index.php?id=PHP">PHP</a></li>
  </ol> -->
    <h2><?php
        if(isset($_GET['id'])){
            echo $_GET['id'];
        } else {
            echo "Welcome!";
        }
       ?>
      </h2>
      <?php
      if(isset($_GET['id'])){
          echo file_get_contents("data/".$_GET['id']);
      } else {
          echo "Hello, PHP";
      }
       ?>
      </body>
    </html>
