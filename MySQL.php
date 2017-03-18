<?php
    error_reporting( 0 );

    //live
    /*
    https://p3nlmysqladm002.secureserver.net/grid55/147/index.php
    */
    $mysql_host = "68.178.143.152";
    $mysql_user = "studentloanforgi";
    $mysql_pass = "z78u65H56!";
    $mysql_data = "studentloanforgi";

    //test
//    $mysql_host = "localhost";
//    $mysql_user = "root";
//    $mysql_pass = "";
//    $mysql_data = "test";


    
    if (!isset($conn)) {
        $conn = false;
    }
    
    function url_origin( $s, $use_forwarded_host = false )
    {
        $ssl      = ( ! empty( $s['HTTPS'] ) && $s['HTTPS'] == 'on' );
        $sp       = strtolower( $s['SERVER_PROTOCOL'] );
        $protocol = substr( $sp, 0, strpos( $sp, '/' ) ) . ( ( $ssl ) ? 's' : '' );
        $port     = $s['SERVER_PORT'];
        $port     = ( ( ! $ssl && $port=='80' ) || ( $ssl && $port=='443' ) ) ? '' : ':'.$port;
        $host     = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
        $host     = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;
        return $protocol . '://' . $host;
    }

    function full_url( $s, $use_forwarded_host = false )
    {
        return url_origin( $s, $use_forwarded_host ) . $s['REQUEST_URI'];
    }
    
    function StartMyConnection($mysql_host, $mysql_user, $mysql_pass, $mysql_data)
    {
        global $conn;
        if( $conn )
            return $conn;
        
        $conn = new mysqli( $mysql_host, $mysql_user, $mysql_pass, $mysql_data);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        return $conn;
    }

    function CloseMyConnection()
    {
        global $conn;
        if( $conn != false )
            mysqli_close($conn);
        $conn = false;
    }

    function CreateMySQLTableField($mysql_table, $mysql_fields ){
       
        global $conn;
        
        $table = mysqli_query($conn, "SELECT 1 FROM $mysql_table LIMIT 1");
        
        if($table == false){
            //table not found
            
            $sql = "CREATE TABLE $mysql_table (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, reg_date TIMESTAMP)";
            
            if (mysqli_query($conn, $sql)) {
                CreateMySQLField($mysql_table, $mysql_fields);
            } else {
                echo "Line " . __LINE__ ."\r\n<br />";
                echo "Error creating table: " . mysqli_error($conn) ."\r\n<br />";
                exit();
            }
            
        } else {
            //table found
            CreateMySQLField($mysql_table, $mysql_fields);
        } 
    }

    function CreateMySQLField($mysql_table, $mysql_fields){
        
        global $conn;
        
        foreach($mysql_fields as $mysql_field){

            $mysql_field_query = mysqli_query($conn, "SHOW COLUMNS FROM $mysql_table LIKE '$mysql_field'");
            $mysql_field_exists = (mysqli_num_rows($mysql_field_query))?TRUE:FALSE;

            if($mysql_field_exists == false){

                //Field not found

                $sql = "ALTER TABLE $mysql_table ADD $mysql_field VARCHAR( 255 )";

                if(!mysqli_query($conn, $sql)) {
                    echo "Line " . __LINE__ ."\r\n<br />";
                    echo "Error creating Field: " . mysqli_error($conn) ."\r\n<br />";
                    exit();
                }
            }
        }
    }
    
    function MySQLCommand($mysql_command, $mysql_table, $mysql_values ){

        global $conn;

        foreach($mysql_values as $k => $v){
            $key[] = $k;
            $value[] = "'" . $v . "'";
            $key_value[] = $k . "='" . $v . "'";
        }

        $insert_keys = implode(", ", $key);
        $insert_values = implode(", ", $value);
        $select_keys_values = implode(" AND ", $key_value);
        $update_keys_values = implode(", ", $key_value);

        switch($mysql_command){
            case "SELECT":
                $sql = "$mysql_command * FROM $mysql_table WHERE $select_keys_values LIMIT 1";
                break;
            case "INSERT":
                $sql = "$mysql_command INTO $mysql_table ($insert_keys) VALUES ($insert_values)";
                break;
            case "UPDATE":
                $sql = "$mysql_command $mysql_table SET $update_keys_values WHERE session_id='" . session_id() . "'";
                break;
            default:
                break;
        }

        $query = mysqli_query($conn, $sql);

        if(!$query) {
            echo "Line " . __LINE__ ."\r\n<br />";
            echo "Error: " . mysqli_error($conn) ."\r\n<br />";
            echo $sql ."\r\n<br />";
            exit();
        } else {
            if($mysql_command == "SELECT" AND $query->num_rows == 0){
                return false;
            } else {
                return true;
            }
        }
    }
?>