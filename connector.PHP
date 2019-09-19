<?
    header('content-type: text/html; charset=utf-8');
    // 데이터베이스 접속 문자열. (db위치, 유저 이름, 비밀번호)
    $connect=mysql_connect( "jdbc:mysql://airwin-db-instance-2019-07-25-04-14.cdvt6nfxjg04.ap-northeast-2.rds.amazonaws.com:3306/sample?useSSL=false&zeroDateTimeBehavior=convertToNull", "airwin", "qwerasdf") or
        die( "SQL server에 연결할 수 없습니다.");

    mysql_query("SET NAMES UTF8");
   // 데이터베이스 선택
   mysql_select_db("sample",$connect);

   // 세션 시작
   session_start();

   $id = $_POST[u_id];
   $pw = $_POST[u_pw];

   $sql = "SELECT * FROM project WHERE code = '$id'";

   $result = mysql_query($sql);

   if(!$result)
            die("mysql query error");
   else
        echo "insert success"

?>