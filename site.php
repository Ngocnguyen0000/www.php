<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>

    <!-- Getting using input -->
    <!-- <form action="site.php" method="get">
        Name: <input type="text" name="username">
        <br><br>
        Age: <input type="number" name="age">
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <br>
    <br>

        Your name is <?php echo $_GET["username"] ?> 
        <br>
        Your age is <?php echo $_GET["age"] ?>  -->


    <!-- Building a Basic Calculator -->
    <!-- <form action="site.php" method="get">
        Color: <input type="text" name="color">
        <br><br>
        Plural Noun: <input type="text" name="pluralNoun">
        <br><br>
        Celebrity: <input type="text" name="celebrity">
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <br>
    <br> -->
        <!-- Cach print 1 -->
        <!-- Roses are <?php echo $_GET["color"] ?> 
        <br>
        are blue <?php echo $_GET["pluralNoun"] ?> 
        <br>
        I love <?php echo $_GET["celebrity"] ?> -->
    
    
        <!-- Cach print 2 -->
        <!-- <?php 
            $color = $_GET["color"];
            $pluralNoun = $_GET["pluralNoun"];
            $celebrity = $_GET["celebrity"];

            echo "Roses are $color <br>";
            echo "$pluralNoun are blur <br>";
            echo "I love $celebrity <br>";    
        ?> -->
    

    <!-- URL Parameters -->
    <!-- Array -->
    <!-- <?php 
        $friend = array("Kevin", "Karen", "Oscar", "Jim");
        $friend[0] = "Kevin Bacon"; //replay array
        echo count($friend); // length array
    ?> -->

    <!-- Using check box -->
    <!-- <form action="site.php" method="post">
    Apple: <input type=checkbox name="fruit[]" value="Apple"><br>
    Orange: <input type=checkbox name="fruit[]" value="Orange"><br>
    Banana: <input type=checkbox name="fruit[]" value="Banana"><br>

    <input type="submit">
    </form>

    <?php 
        $fruits = $_POST["fruit"];
        echo $fruits[1]; //vị trí sẽ bắt đầu từ cái đầu tiên khi đc chọn (0)
    ?> -->
    

    <!--  Associative Arrays: Mảng kết hợp -->
    <!-- <form action="site.php" method="post">
        <input  type="text" name="student"><br>
        <input type="submit">
    </form>

    <?php
        $grades = array("Jim" => "A+", "Pam" => "B+", "Osca" => "C+");        
        echo $grades[$_POST["student"]]; //Lấy các tên học sinh lưu vào hộp sau đó truy cập vào phần tử grades bên trong mảng kết hợp
    ?> -->

    <!-- Functions: truyền nhiều biến,.. cần 1 hàm và chạy nhiều lần -->
    <?php
    //     function add_numbers($name, $age) {
    //         echo "Hello  $name, you are $age <br>"; //Sau dấu {} là chức năng
    //     }

    //     add_numbers("Tom",40); // nhảy lên - chạy chức năng trên
    //     add_numbers("Dan",40);
    //     add_numbers("John",40);
    // ?>


<!-- Return Statements -->
<!-- <?php 
    function number($num){
        return $num * $num *$num; //return để yêu cầu thực hiện xong chức năng này thì ngừng
    }
    echo number(4)// Truyền giá trị 4 vào $num
?> -->

<!-- If Statements -->
<!-- <?php 
    $isMale = false;
    $isTall = false;
    if ($isMale && $isTall){
        echo "You are a tall male";
    }
    elseif ($isMale && !$isTall) {
        echo "You are a short male";
    }
    else {
        echo "You are not male and  short male" ;
    }
?> -->

<!-- <?php 
    function getMax($num1, $num2, $num3){
        if ($num1 != $num2 && $num1 >= $num3){
            return $num1;
        }elseif ($num2>= $num1 && $num2 >= $num3){
            return $num2;
        }else{
            return $num3;
        }
        }
        echo getMax(200,500,900);
?> -->


<!-- Bulding a better Calculator -->


<!-- While Loop: vòng lặp này kiểm tra điều kiện trước rủi mời thực hiện vòng lặp -->
<!-- <?php
    while($index <=5) {
        $index = 6;
        echo "$index <br>";
        $index++; //Tăng thêm 1 cho mỗi 1 lần lần lặp
    }

?> -->
<!-- Do while loop: Vòng lặp thực hiện vòng lặp trước rùi mới kiểm tra điều kiện -->
<!-- <?php
    do {
        $index = 6;
        echo "$index <br>";
        $index++;
    }while($index <=5);

?> -->

<!-- For Loop: cho phép xảy ra nhiều điều kiện -->
<!-- <?php
    for($i = 5; $i<= 10 ;$i++){
        echo "$i";
    }
?> -->

<!-- <?php
    $number = array(4, 65, 33, 25, 5);
    for ($i = 0; $i < count($number); $i++) {
        echo "$number[$i] <br>";
    }
?> -->

<!-- Comment -->
<!-- Including PHP -->
<!-- <?php Include "header.html" ?>
<p>Hello World!</p>
<?php Include "footer.html" ?> -->

<!-- Include - PHP -->
<!-- <?php 
    $title = "My first Post";
    $author = "Mike";
    $wordCount = 400;
    include "article-header.php"
?> -->
<!-- 
<?php 
    include "userful-tools.php"; 
    echo "$feetInMil <br>"; 
    echo sayHi("Chào bạn"); 
?> -->

<!-- Classes and Objects -->
<!-- <?php
    class Book {
        // Dưới đây là các thuộc tính của class
        var $title;
        var $author;
        var $page;

        function __construct($aTitle, $Author, $aPage)
        {
            //This đề cập đến những đối tượng đang được khởi tạo
            $this->title = $aTitle;
            $this->author = $Author;
            $this->page = $aPage;
        }

        //Hàm hasHonors: Trả về kết quả true or False
        function hasHonors(){
            if($this->page >=1){
                return "True"; //Trả về kết quả chuỗi
            }
            return "false";
        }

    }

    $book1 = new Book("Book1", "Author 1", 1); //Khởi tạo một đối tượng
    $book1 -> title = "Title1";
    $book1 = new Book("Book1", "Author 1", 1); //Khởi tạo một đối tượng
    $book2 = new Book("Book2", "Author 2", 2); //Khởi tạo một đối tượng
    $book3 = new Book("Book3", "Author 3", 3); //Khởi tạo một đối tượng

    echo $book1->author; 
    echo $book1->page; 



    // $book1 = new Book("Book1"; "Author 1"; 1); //Khởi tạo một đối tượng
    // $book1->title = "Book 1";
    // $book1->author = "Authour 1";
    // $book1->page = 1;

    // $book2 = new Book(); //Khởi tạo một đối tượng
    // $book2->title = "Book 2";
    // $book2->author = "Authour 3";
    // $book2->page = 2;

    // $book3 = new Book(); //Khởi tạo một đối tượng
    // $book3->title = "Book 3";
    // $book3->author = "Authour 3";
    // $book3->page = 3;

    // echo $book1->title;
    // echo $book2->title;

?>-->


<!-- Getters & Setters: là các hàm mà chúng ta có thể viết bên trong các lớp của mình  -->
    //Thuộc tính public: mọi thứ đều mở và truy cập được







<!-- Inheritance: Kế thừa -->










    
    

</body>
</html>
