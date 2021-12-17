<?php
                $connect = mysqli_connect('localhost', 'root', '123412', 'test_lib1');
                $number = $_GET['number'];
                session_start();
                $query = "select title, content, date, hit, id from board where number =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>

        <style>
                table{
                        border-top: 1px solid #444444;
                        border-collapse: collapse;
                }
                tr{
                        border-bottom: 1px solid #444444;
                        padding: 10px;
                }
                td{
                        border-bottom: 1px solid #efefef;
                        padding: 10px;
                }
                table .even{
                        background: #efefef;
                }
                .text{
                        text-align:center;
                        padding-top:20px;
                        color:#000000
                }
                .text:hover{
                        text-decoration: underline;
                }
                a:link {color : #57A0EE; text-decoration:none;}
                a:hover { text-decoration : underline;}
        </style>

        <table class="view_table" align=center>
        <tr>
                <td><?php echo '제목 :' ?></td>
                <td colspan="7" class="view_title"><?php echo $rows['title']?></td>
        </tr>
        <tr>
          <td><?php echo '|' ?></td>
                <td class="view_id">작성자 : </td>
                <td class="view_id2"><?php echo $rows['id']?></td>
                <td><?php echo '|' ?></td>
                <td class="view_hit">조회수 : </td>
                <td class="view_hit2"><?php echo $rows['hit']?></td>
                <td><?php echo '|' ?></td>
        </tr>


        <tr>
                <td colspan="7" class="view_content" valign="top">
                <?php echo $rows['content']?></td>
        </tr>
        </table>

        <br>
        <!-- MODIFY & DELETE -->
        <div class="view_btn">
          <center>
                <button class="view_btn1" onclick="location.href='./index.php'">목록으로</button>
                <button class="view_btn1" onclick="location.href='./modify.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">수정</button>
                <button class="view_btn1" onclick="location.href='./delete.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">삭제</button>
              </center>
        </div>
