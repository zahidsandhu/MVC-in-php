<?php

 class MyFunction
 {
    

    // function test_input($data) {
    //   $data = trim($data);
    //   $data = stripslashes($data);
    //   $data = htmlspecialchars($data);
    //   $data = mysqli_real_escape_string($this->conn,$data);;
    //   return $data;
    // }
    function insertedid()
    {
        $id = mysqli_insert_id($this->conn);
        if ($id)
            return $id;
        else
            return "Null";
    }
    function res2arr($res)
    {
        $results = array();
        $rowcount = mysqli_num_rows($res);
        if ($rowcount == 0) {
            return $results;
        } else {
            for ($i = 0; $row = mysqli_fetch_array($res); $i++) {
                $results[] = array_change_key_case($row, CASE_LOWER);
            }
        }
        mysqli_free_result($res);
        return $results;
    }

    function res2assoc($res)
    {
        $results = array();
        $rowcount = mysqli_num_rows($res);
        if ($rowcount == 0) {
            return NULL;
        } else {
            for ($i = 0; $row = mysqli_fetch_assoc($res); $i++) {
                $results[] = array_change_key_case($row, CASE_LOWER);
            }
        }
        mysqli_free_result($res);
        return $results;
    }
    function query($sql,$conn)
    {

        $this->lastsql = $sql;
        //echo $sql;
        $res = mysqli_query($conn,$sql);
        if ($res)
            return $res;
        else {

            echo "Error while executing : " . $sql . "<br> MySql Says : " . mysqli_error($conn);
            die;
        }
    }
    function select($selqry, $r2a = true)
    {
        $this->lastsql = $selqry;
        $res = $this->query($selqry);
        if ($r2a)
            return $this->res2arr($res);
        else
            return $res;
    }

    function selectcount($tablename, $where = '')
    {
        $cqry = ("select count(*) found from $tablename $where");
        $this->lastsql = $cqry;
        $res = $this->res2arr($this->query($cqry));
        return $res[0]['found'];
    }

    // function selectsum($field, $tablename, $where = '')
    // {
    //     $cqry = ("select sum($field) total from $tablename $where");
    //     $this->lastsql = $cqry;
    //     $res = $this->res2arr($this->query($cqry));
    //     return $res[0]['total'];
    // } 
    function selectmax($field, $tablename, $where = '')
    {
        $cqry = ("select max($field) total from $tablename $where");
        $this->lastsql = $cqry;
        $res = $this->res2arr($this->query($cqry));
        return $res[0]['total'];
    }

    function selectall($tablename)
    {
        $sql = ("SELECT * FROM $tablename");
        $this->lastsql = $sql;
        
        $query = $this->query($sql);

        if (!$query) {
            return "Could not successfully run query ($sql) from DB: " . mysqli_error($this->$conn) . "method selectdata";
            exit;
        }
        return $this->res2arr($query);
    }

    function selectdata($fields, $tablename, $where = '')
    {
        $sql = ("SELECT $fields FROM $tablename $where");
        // echo $sql;
        $query = $this->query($sql);

        if (!$query) {
            return "Could not successfully run query ($sql) from DB: " . mysqli_error($this->$conn) . "method selectdata";
            exit;
        }
        return $this->res2assoc($query);
    }

    function selectwhere($fields, $tablename, $where)
    {
        $sql = ("SELECT $fields FROM $tablename $where");
        $this->lastsql = $sql;
        $query = $this->query($sql);
        if (!$query) {
            return "Could not successfully run query ($sql) from DB: " . mysqli_error($this->$conn) . "select where 2";
            exit;
        }
        return $this->res2arr($query);
    }

    function selectallwhere($tablename, $where,$conn)
    {
        $sql = ("SELECT * FROM $tablename $where");
        $this->lastsql = $sql;
        $query = $this->query($sql,$conn);
        if (!$query) {
            return "Could not successfully run query ($sql) from DB: " . mysqli_error($conn) . "select where 2";
            exit;
        }
       // return $query;
        return $this->res2arr($query);
    }
    function leftjoin($lefttable, $righttable, $matchedrow, $fields, $order) 
    {
        $sql = ("SELECT $fields FROM $lefttable LEFT JOIN $righttable ON $lefttable.$matchedrow = $righttable.$matchedrow $order");
        $this->lastsql = $sql;
        $query = $this->query($sql);
        if (!$query) {
            return "Could not successfully run query ($sql) from DB: " . mysqli_error($this->$conn) . "select where 2";
            exit;
        }
        return $this->res2arr($query);
    }

    function insert($tablename, $fields, $values, $replace = false)
    {
        if ($replace){
            return $this->query("replace into $tablename ($fields) VALUES ($values)") or die(mysqli_error($this->conn));
        }
        else{
            return $this->query("INSERT INTO $tablename ($fields) VALUES ($values)") or die(mysqli_error($this->conn));
        }
    }

    function update($tablename, $values, $where,$conn)
    {
        return $this->query("UPDATE $tablename SET $values $where") or die(mysqli_error($conn));
    }

    function delete($tablename, $where)
    {
        return $this->query("DELETE FROM $tablename $where");
    }
    function updatedata($tablename, $field, $value, $where)
    {
        return $this->query("UPDATE $tablename SET $field = $value $where") or die(mysqli_error($this->conn));
    }
    
}

?>