<?
    header('content-type: text/html; charset=utf-8');
    // 데이터베이스 접속 문자열. (db위치, 유저 이름, 비밀번호)
    $connect=mysqli_connect( "jdbc:mysql://airwin-db-instance-2019-07-25-04-14.cdvt6nfxjg04.ap-northeast-2.rds.amazonaws.com:3306/sample?useSSL=false&zeroDateTimeBehavior=convertToNull", "airwin", "qwerasdf","sample");
        if(mysqli_connect_errno()_{
        echo "SQL server에 연결할 수 없습니다.".mysqli_connect_error;
    }
    $result = mysqli_query($connect,"SELECT * FROM project");

    while($row = mysql_fetch_array($result)){
        echo "Success"
    }

?>
