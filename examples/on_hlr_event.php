<?php

require_once '../oneapi/client.php';

define(FILE_NAME, '../hlr-'.mktime(true));

# example:on-roaming-status
$result = DataConnectionProfileClient::unserializeRoamingStatus();

// Process $result here, e.g. just save it to a file:
$f = fopen(FILE_NAME, 'w');
fwrite($f, "\n-------------------------------------\n");
fwrite($f, 'callbackData: ' . $result->callbackData . "\n") ;
fwrite($f, 'servingMccMnc: '. $result->terminalRoamingStatus->servingMccMnc . "\n") ;
fwrite($f, 'address: '. $result->terminalRoamingStatus->address . "\n") ;
fwrite($f, 'currentRoaming: ' . $result->terminalRoamingStatus->currentRoaming . "\n") ;
fwrite($f, 'resourceURL: ' . $result->terminalRoamingStatus->resourceURL . "\n") ;
fwrite($f, 'retrievalStatus: ' . $result->terminalRoamingStatus->retrievalStatus . "\n") ;
fwrite($f, 'terminalRoamingStatus callbackData: ' . $result->terminalRoamingStatus->callbackData . "\n") ;
fwrite($f, 'extendedData: ' . $result->terminalRoamingStatus->extendedData . "\n") ;
fwrite($f, "\n-------------------------------------\n");
fclose($f);
# ----------------------------------------------------------------------------------------------------

echo 'OK';
