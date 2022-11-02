<?php

// oci_connect is undefined in my version of php.
$connection = oci_connect(
    $username = '', 
    $password = '',
    $connection_string = '//oracle.cise.ufl.edu/orcl');
    //  [//]host_name[:port][/service_name][:server_type][/instance_name]


