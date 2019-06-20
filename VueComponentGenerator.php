<?php
$val = getopt(null, ["name:"]);
if (!empty($val["name"])) {
    $fp = fopen("./resources/js/ui/components/" . $val["name"] . ".vue", "wb");
    if ($fp == false) {
        //do debugging or logging here
    } else {
        fwrite($fp, '<template>
</template>

<script>
</script>
');
        fclose($fp);
    }
} else {
    print_r("Please enter your controller name via create:ControllerName");
}
