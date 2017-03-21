<?php

function registerUser() {
  $request = Slim::getInstance()->request();
  $user = getArrayFromRequest($request);
  $conn = new ConexionBD(DRIVER, SERVIDOR, BASE, USUARIO, CLAVE);
  echo insertNewUser($conn, $user);
}

function insertNewUser($conn, $user) {
  $response = null;
  $connected = $conn->conectar();
  if ($connected) {
    try {
      $sql = "INSERT INTO user (type, src, landing_page, first_name, last_name, state, zip,email ,primary_phone, ip_address, Debt, Channel, Recording_URL,lead_id)"
              . "VALUES (:type, :src, :landing_page, :first_name, :last_name, :state, :zip, :email, :primary_phone, :ip_address, :Debt, :Channel, :Recording_URL,:lead_id)";
      $rip = new RemoteAddress();
      $user['type'] = 69;
      $user['src'] = "WL-DebtWF";
      $user['landing_page'] = "landing";
      $user['ip_address'] = $rip->getIpAddress();
      $user['lead_id'] = "0";
      $params = setUserParams($user);
      if ($conn->consulta($sql, $params)) {
        $user['id'] = $conn->ultimoIdInsert();
        $url = 'https://www.leads2buyer.com/genericPostlead.php?Test_Lead=1';
        //print_r("antesDeUnset");
        unset($user['lead_id']);
        //print_r($user);
        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query(getleads2buyerObj($user))
            )
        );

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) {
          
        }
        //print_r($result);

        $conn->closeCursor();
        $response = MessageHandler::getSuccessResponse("Data successfuly saved!", $user);
      } else {
        echo MessageHandler::getErrorResponse("Data was not save correctly, please try again later.");
      }
    } catch (Exception $exc) {
      $response = null;
    }
  }

  if ($response == null) {
    header('HTTP/1.1 400 Bad Request');
    return MessageHandler::getDBErrorResponse();
  } else {
    $conn->desconectar();
    return $response;
  }
}

function getArrayFromRequest($request) {
  return array(
      "first_name" => is_null($request->post('first_name')) ? "" : $request->post('first_name'),
      "last_name" => is_null($request->post('last_name')) ? "" : $request->post('last_name'),
      "email" => is_null($request->post('email')) ? "" : $request->post('email'),
      "state" => is_null($request->post('state')) ? "" : $request->post('state'),
      "zip" => is_null($request->post('zip')) ? "" : $request->post('zip'),
      "primary_phone" => is_null($request->post('primary_phone')) ? "" : $request->post('primary_phone'),
      "Debt" => is_null($request->post('Debt')) ? "" : $request->post('Debt'),
      "Channel" => is_null($request->post('channel')) ? "" : $request->post('channel'),
      "Recording_URL" => $request->post('Recording_URL') == 'null' ? NULL : $request->post('Recording_URL')
  );
}

function getleads2buyerObj($user) {
  return array(
      "TYPE" => $user['type'],
      "SRC" => $user['src'],
      "Landing_Page" => $user['landing_page'],
      "First_Name" => $user['first_name'],
      "Last_Name" => $user['first_name'],
      "State" => $user['state'],
      "Zip" => $user['zip'],
      "Primary_Phone" => $user['primary_phone'],
      "IP_Address" => $user['ip_address'],
      "Debt" => $user['Debt'],
      "Channel" => $user['Channel']
  );
}

function setUserParams($user) {
  $params = array();
  $params[0] = array("type", $user['type'], "int", 11);
  $params[1] = array("src", $user['src'], "string", 100);
  $params[2] = array("landing_page", $user['landing_page'], "string", 100);
  $params[3] = array("first_name", $user['first_name'], "string", 100);
  $params[4] = array("last_name", $user['last_name'], "string", 100);
  $params[5] = array("state", $user['state'], "string", 2);
  $params[6] = array("zip", $user['zip'], "string", 5);
  $params[7] = array("email", "", "string", 100);
  $params[8] = array("primary_phone", $user['primary_phone'], "string", 10);
  $params[9] = array("ip_address", $user['ip_address'], "string", 45);
  $params[10] = array("Debt", (int) $user['Debt'], "int", 11);
  $params[11] = array("Channel", $user['Channel'], "string", 100);
  $params[12] = array("Recording_URL", $user['Recording_URL'], "string", 45);
  $params[13] = array("lead_id", $user['lead_id'], "int", 11);
  return $params;
}
