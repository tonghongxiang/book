
<table>
    <?php
    /**
     * Created by PhpStorm.
     * User: tonghongxiang
     * Date: 2017/12/7
     * Time: 下午1:36
     */



    $dbc=mysqli_connect('127.0.0.1','root','765256','book')
    or die("ERROR to connect mysqli");

    $query1="SELECT * FROM book_list WHERE dalei='教育' ORDER BY look_num DESC ";

    $result1=mysqli_query($dbc,$query1);
    echo "<p style='font-size: 1.5em;margin-bottom: 15px'>教育</p>";

    for ($i=1;$i<11;$i++){
        $sql_arr1=mysqli_fetch_assoc($result1);
        $book_name1=$sql_arr1['B_name'];

        echo "
            <tr><td><a class='a_1'>$i</a><a href='购物车.php' class='a_2'>$book_name1</a></td></tr>
          ";
    }



    mysqli_close($dbc);
    ?>
</table>
