//curl聚合函数
public function curl_get_https($url, $header = array()) {
    $curl = curl_init ();
    curl_setopt ( $curl, CURLOPT_URL, $url );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
    curl_setopt ( $curl, CURLOPT_TIMEOUT, 30 );
    curl_setopt ( $curl, CURLOPT_HEADER, 0 );
    curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );

    if (! empty ( $header )) {
        curl_setopt ( $curl, CURLOPT_HTTPHEADER, $header );
    }
    $res = curl_exec ( $curl );
    if (curl_errno ( $curl )) {
        echo 'Errno' . curl_error ( $curl );
    }
    // dump(curl_getinfo($curl));
    curl_close ( $curl );
    return $res;
}
public function curl_post_https($url, $header = array()) {
    $curl = curl_init ();
    curl_setopt ( $curl, CURLOPT_URL, $url );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
    curl_setopt ( $curl, CURLOPT_TIMEOUT, 30 );
    curl_setopt ( $curl, CURLOPT_HEADER, 0 );
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );

    if (! empty ( $header )) {
        curl_setopt ( $curl, CURLOPT_HTTPHEADER, $header );
    }
    $res = curl_exec ( $curl );
    if (curl_errno ( $curl )) {
        echo 'Errno' . curl_error ( $curl );
    }
    // dump(curl_getinfo($curl));
    curl_close ( $curl );
    return $res;
}
