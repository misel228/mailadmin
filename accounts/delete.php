<?php
require_once("../_class.dba.inc.php");
require_once("../_conf.dba.inc.php");
require_once("../_static.session.inc.php");
validate_session();

$_id   = 'id_user';
$_name = 'local_part';

require_once("../_static.delete.inc.php");
