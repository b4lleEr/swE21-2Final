<?php
               $connect = mysqli_connect('localhost', 'root', '123412', 'test_lib1') or die ("connect fail");
               $query ="select * from board order by number desc";
               $result = $connect->query($query);
               $total = mysqli_num_rows($result);

               session_start();

               if(isset($_SESSION['userid'])) {
                       echo $_SESSION['userid'];?>님 안녕하세요
                       <br/>
                       <br>
                       <button onclick="location.href='./Board.php'">문의게시판</button>
                       <br>
                       <button onclick="location.href='./logout.php'">로그아웃</button>
       <?php
               }
               else {
       ?>              <button onclick="location.href='./login.php'">로그인</button>
                       <br />
       <?php   }
       ?>
