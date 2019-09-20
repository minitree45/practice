<?php
    $con = mysqli_connect("jdbc:mysql://airwin-db-instance-2019-07-25-04-14.cdvt6nfxjg04.ap-northeast-2.rds.amazonaws.com:3306/sample?useSSL=false&zeroDateTimeBehavior=convertToNull", "airwin", "qwerasdf","project");

    $statement = mysqli_prepare($con, "SELECT * FROM project");
    mysqli_stmt_execute($statement);

    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $code, $site);

    $response = array();
    $response["success"] = false;

    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;
        $response["code"] = $code;
        $response["site"] = $site;
    }

    echo json_encode($response);

?>
