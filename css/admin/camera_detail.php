
<?php
   ini_set('display_errors', 1);
   error_reporting(~0);

  include('../connection.php');
   $strCustomerID = null;

   if(isset($_GET["editcam"]))
   {
	   $strCustomerID = $_GET["editcam"];
   }

   $sql = "SELECT * FROM camera WHERE c_id = '".$strCustomerID."' ";

   $query = mysqli_query($conn,$sql);

   $result= mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<?php header("Cache-Control: public, max-age=60, s-maxage=60");?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <title>index</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/quill/dist/quill.snow.css">
    <link href="../dist/css/style.min.css" rel="stylesheet">

<style type="text/css">span.im-caret {
    -webkit-animation: 1s blink step-end infinite;
    animation: 1s blink step-end infinite;
}

@keyframes blink {
    from, to {
        border-right-color: black;
    }
    50% {
        border-right-color: transparent;
    }
}

@-webkit-keyframes blink {
    from, to {
        border-right-color: black;
    }
    50% {
        border-right-color: transparent;
    }
}

span.im-static {
    color: grey;
}

div.im-colormask {
    display: inline-block;
    border-style: inset;
    border-width: 2px;
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield;
}

div.im-colormask > input {
    position: absolute;
    display: inline-block;
    background-color: transparent;
    color: transparent;
    -webkit-appearance: caret;
    -moz-appearance: caret;
    appearance: caret;
    border-style: none;
    left: 0; /*calculated*/
}

div.im-colormask > input:focus {
    outline: none;
}

div.im-colormask > input::-moz-selection{
    background: none;
}

div.im-colormask > input::selection{
    background: none;
}
div.im-colormask > input::-moz-selection{
    background: none;
}

div.im-colormask > div {
    color: black;
    display: inline-block;
    width: 100px; /*calculated*/
}</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style type="text/css" media="all" id="my">
                .ogdlpmhglpejoiomcodnpjnfgcpmgale_default, body, html {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAB2UlEQVRYR8XXPUvDQBgH8OdfUHCwjoLi5uIrWmctgoODi59AELoJ+g0EP4EOboLgJxCchV5iCw65FNGioItDBTdrFaHxTnIF+2La5uUSb024/y/PPcldILMZSULkYJZO6B8GFEANeQBm7ydtaAGo6FMwvp0kohPgZhtgPJsUwgvgZt+D8akkEN0ARJIqMPh43IjugEZj1sDs4TgRfQANBRhPxYXwA1DZYBxxIHwDVDjjKbjdoXEEA7jBzkcahYd3XYbgAIWQ4yjYFR2IcAA3WcgZmHY5KiI8oIFYg2lfRkFEA6jXQ+SQD7+TRgc0PhWhd1JNgPA7qU6AW4kzMHsrSE/oAUiqEqhMcHLI39zGB6g7cygGC+iHCVoBB4wP9Js0yPUe5wGxR0gd/pnsqzqC68dqkJBe93oDhNiEWTqX2cwnEQ11TPACxsfiAwgswbS4eruXF6cphbvOMJ1bc3sF6phE0XpqDWwe29sY2g6uTUDdGUXx5rXzaeXKwq5XL+iqggswqIZ1WJa73p7DswqSjmHwnai94OuYJbOZCyLaiKMXfAFUQ/7+wrUwpNiDUTqKUgX/gJXMG4HSuqsQADA7QRh8bgN8i1VclfKJVKBlGd7IwTwKVjsmpOIHesLdIYBkAh0AAAAASUVORK5CYII=") 0 0 , auto !important;}
                input[type="date"], input[type="time"], input[type="datetime-local"], input[type="month"] {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAB2UlEQVRYR8XXPUvDQBgH8OdfUHCwjoLi5uIrWmctgoODi59AELoJ+g0EP4EOboLgJxCchV5iCw65FNGioItDBTdrFaHxTnIF+2La5uUSb024/y/PPcldILMZSULkYJZO6B8GFEANeQBm7ydtaAGo6FMwvp0kohPgZhtgPJsUwgvgZt+D8akkEN0ARJIqMPh43IjugEZj1sDs4TgRfQANBRhPxYXwA1DZYBxxIHwDVDjjKbjdoXEEA7jBzkcahYd3XYbgAIWQ4yjYFR2IcAA3WcgZmHY5KiI8oIFYg2lfRkFEA6jXQ+SQD7+TRgc0PhWhd1JNgPA7qU6AW4kzMHsrSE/oAUiqEqhMcHLI39zGB6g7cygGC+iHCVoBB4wP9Js0yPUe5wGxR0gd/pnsqzqC68dqkJBe93oDhNiEWTqX2cwnEQ11TPACxsfiAwgswbS4eruXF6cphbvOMJ1bc3sF6phE0XpqDWwe29sY2g6uTUDdGUXx5rXzaeXKwq5XL+iqggswqIZ1WJa73p7DswqSjmHwnai94OuYJbOZCyLaiKMXfAFUQ/7+wrUwpNiDUTqKUgX/gJXMG4HSuqsQADA7QRh8bgN8i1VclfKJVKBlGd7IwTwKVjsmpOIHesLdIYBkAh0AAAAASUVORK5CYII=") 0 0, auto !important;}
                [type="search"]::-webkit-search-cancel-button, [type="search"]::-webkit-search-decoration { url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACJUlEQVRYR+2VsW/TQBjF34tcpKKKbAgkYCkLEgM5EAOodqQWsfQvQMDaDcHEwsbEAgMLYgQhBhYWVhSnlWiHXtRW6tShSC0wtWoGVIWED9VxHKe+2JfEZYrXe/d9P7+7ex+R8km57EDqf9oSWaNfu5amH2aNqQCe2gRwJdL42iHQGqZRvz1ZAD8BnIs2H04UubJSHwOMHRg7MHYgyEWv9Ait5nsubex3HJGyuo+/+MGq/mrr0lBBJJ6SqAGbF1lZ3xFPNQBMtFMbX1jV8zYQgwHsN6dQLMyhUPjcLS4f6dfu9UABoK8pt69fgiPfQ6hVVvWN41ABgJTVZYjcwdnaW37qZr14qjeKbX4p1AQAcVdCqASAuOoViMexBZe+Xmyf8/AAoLyA8Gm84RFUEiB+njH6kQEMblkDAGjR185IDtgDlB4AfJfQCz6AmO0ZxwPcAZPU6EBgtasOQJwxbDoAUByxb/fFmu5AFCKGu5BX406dvg6ELiyAeJN308xXEBeIq36DmDwpiFQH/sdR2AI8AfDyJFywAgjvQwMMB0uOJNYAYQp2J14eEII6qzrxpPtOQ3FLz0A+z6N3UIOcYWV1KTEL0hqkBNTAXCb7A66sSsfnfJbeuM69SVa2D43xbFNQPLUFYNpGm9A0Whf4bW23395MB6J8uHV1Gs6pdRCnLUEW6Ws3S2sN0JOYM+ouKA9B3gTkPIRHdX4BsowCX7Oil7Mad9b/AYp38SGGYtu/AAAAAElFTkSuQmCC") 9 0, auto  !important;}
                input::-webkit-contacts-auto-fill-button {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAB2UlEQVRYR8XXPUvDQBgH8OdfUHCwjoLi5uIrWmctgoODi59AELoJ+g0EP4EOboLgJxCchV5iCw65FNGioItDBTdrFaHxTnIF+2La5uUSb024/y/PPcldILMZSULkYJZO6B8GFEANeQBm7ydtaAGo6FMwvp0kohPgZhtgPJsUwgvgZt+D8akkEN0ARJIqMPh43IjugEZj1sDs4TgRfQANBRhPxYXwA1DZYBxxIHwDVDjjKbjdoXEEA7jBzkcahYd3XYbgAIWQ4yjYFR2IcAA3WcgZmHY5KiI8oIFYg2lfRkFEA6jXQ+SQD7+TRgc0PhWhd1JNgPA7qU6AW4kzMHsrSE/oAUiqEqhMcHLI39zGB6g7cygGC+iHCVoBB4wP9Js0yPUe5wGxR0gd/pnsqzqC68dqkJBe93oDhNiEWTqX2cwnEQ11TPACxsfiAwgswbS4eruXF6cphbvOMJ1bc3sF6phE0XpqDWwe29sY2g6uTUDdGUXx5rXzaeXKwq5XL+iqggswqIZ1WJa73p7DswqSjmHwnai94OuYJbOZCyLaiKMXfAFUQ/7+wrUwpNiDUTqKUgX/gJXMG4HSuqsQADA7QRh8bgN8i1VclfKJVKBlGd7IwTwKVjsmpOIHesLdIYBkAh0AAAAASUVORK5CYII=") 0 0, auto  !important;}
                .paper-button, .ytp-progress-bar-container, input[type=submit], :link, :visited {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACJUlEQVRYR+2VsW/TQBjF34tcpKKKbAgkYCkLEgM5EAOodqQWsfQvQMDaDcHEwsbEAgMLYgQhBhYWVhSnlWiHXtRW6tShSC0wtWoGVIWED9VxHKe+2JfEZYrXe/d9P7+7ex+R8km57EDqf9oSWaNfu5amH2aNqQCe2gRwJdL42iHQGqZRvz1ZAD8BnIs2H04UubJSHwOMHRg7MHYgyEWv9Ait5nsubex3HJGyuo+/+MGq/mrr0lBBJJ6SqAGbF1lZ3xFPNQBMtFMbX1jV8zYQgwHsN6dQLMyhUPjcLS4f6dfu9UABoK8pt69fgiPfQ6hVVvWN41ABgJTVZYjcwdnaW37qZr14qjeKbX4p1AQAcVdCqASAuOoViMexBZe+Xmyf8/AAoLyA8Gm84RFUEiB+njH6kQEMblkDAGjR185IDtgDlB4AfJfQCz6AmO0ZxwPcAZPU6EBgtasOQJwxbDoAUByxb/fFmu5AFCKGu5BX406dvg6ELiyAeJN308xXEBeIq36DmDwpiFQH/sdR2AI8AfDyJFywAgjvQwMMB0uOJNYAYQp2J14eEII6qzrxpPtOQ3FLz0A+z6N3UIOcYWV1KTEL0hqkBNTAXCb7A66sSsfnfJbeuM69SVa2D43xbFNQPLUFYNpGm9A0Whf4bW23395MB6J8uHV1Gs6pdRCnLUEW6Ws3S2sN0JOYM+ouKA9B3gTkPIRHdX4BsowCX7Oil7Mad9b/AYp38SGGYtu/AAAAAElFTkSuQmCC") 9 0, auto !important;}
                a > * {url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACJUlEQVRYR+2VsW/TQBjF34tcpKKKbAgkYCkLEgM5EAOodqQWsfQvQMDaDcHEwsbEAgMLYgQhBhYWVhSnlWiHXtRW6tShSC0wtWoGVIWED9VxHKe+2JfEZYrXe/d9P7+7ex+R8km57EDqf9oSWaNfu5amH2aNqQCe2gRwJdL42iHQGqZRvz1ZAD8BnIs2H04UubJSHwOMHRg7MHYgyEWv9Ait5nsubex3HJGyuo+/+MGq/mrr0lBBJJ6SqAGbF1lZ3xFPNQBMtFMbX1jV8zYQgwHsN6dQLMyhUPjcLS4f6dfu9UABoK8pt69fgiPfQ6hVVvWN41ABgJTVZYjcwdnaW37qZr14qjeKbX4p1AQAcVdCqASAuOoViMexBZe+Xmyf8/AAoLyA8Gm84RFUEiB+njH6kQEMblkDAGjR185IDtgDlB4AfJfQCz6AmO0ZxwPcAZPU6EBgtasOQJwxbDoAUByxb/fFmu5AFCKGu5BX406dvg6ELiyAeJN308xXEBeIq36DmDwpiFQH/sdR2AI8AfDyJFywAgjvQwMMB0uOJNYAYQp2J14eEII6qzrxpPtOQ3FLz0A+z6N3UIOcYWV1KTEL0hqkBNTAXCb7A66sSsfnfJbeuM69SVa2D43xbFNQPLUFYNpGm9A0Whf4bW23395MB6J8uHV1Gs6pdRCnLUEW6Ws3S2sN0JOYM+ouKA9B3gTkPIRHdX4BsowCX7Oil7Mad9b/AYp38SGGYtu/AAAAAElFTkSuQmCC") 9 0, auto !important;}
                input:read-only {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAB2UlEQVRYR8XXPUvDQBgH8OdfUHCwjoLi5uIrWmctgoODi59AELoJ+g0EP4EOboLgJxCchV5iCw65FNGioItDBTdrFaHxTnIF+2La5uUSb024/y/PPcldILMZSULkYJZO6B8GFEANeQBm7ydtaAGo6FMwvp0kohPgZhtgPJsUwgvgZt+D8akkEN0ARJIqMPh43IjugEZj1sDs4TgRfQANBRhPxYXwA1DZYBxxIHwDVDjjKbjdoXEEA7jBzkcahYd3XYbgAIWQ4yjYFR2IcAA3WcgZmHY5KiI8oIFYg2lfRkFEA6jXQ+SQD7+TRgc0PhWhd1JNgPA7qU6AW4kzMHsrSE/oAUiqEqhMcHLI39zGB6g7cygGC+iHCVoBB4wP9Js0yPUe5wGxR0gd/pnsqzqC68dqkJBe93oDhNiEWTqX2cwnEQ11TPACxsfiAwgswbS4eruXF6cphbvOMJ1bc3sF6phE0XpqDWwe29sY2g6uTUDdGUXx5rXzaeXKwq5XL+iqggswqIZ1WJa73p7DswqSjmHwnai94OuYJbOZCyLaiKMXfAFUQ/7+wrUwpNiDUTqKUgX/gJXMG4HSuqsQADA7QRh8bgN8i1VclfKJVKBlGd7IwTwKVjsmpOIHesLdIYBkAh0AAAAASUVORK5CYII=") 0 0 , auto !important; }
                img, button {url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACJUlEQVRYR+2VsW/TQBjF34tcpKKKbAgkYCkLEgM5EAOodqQWsfQvQMDaDcHEwsbEAgMLYgQhBhYWVhSnlWiHXtRW6tShSC0wtWoGVIWED9VxHKe+2JfEZYrXe/d9P7+7ex+R8km57EDqf9oSWaNfu5amH2aNqQCe2gRwJdL42iHQGqZRvz1ZAD8BnIs2H04UubJSHwOMHRg7MHYgyEWv9Ait5nsubex3HJGyuo+/+MGq/mrr0lBBJJ6SqAGbF1lZ3xFPNQBMtFMbX1jV8zYQgwHsN6dQLMyhUPjcLS4f6dfu9UABoK8pt69fgiPfQ6hVVvWN41ABgJTVZYjcwdnaW37qZr14qjeKbX4p1AQAcVdCqASAuOoViMexBZe+Xmyf8/AAoLyA8Gm84RFUEiB+njH6kQEMblkDAGjR185IDtgDlB4AfJfQCz6AmO0ZxwPcAZPU6EBgtasOQJwxbDoAUByxb/fFmu5AFCKGu5BX406dvg6ELiyAeJN308xXEBeIq36DmDwpiFQH/sdR2AI8AfDyJFywAgjvQwMMB0uOJNYAYQp2J14eEII6qzrxpPtOQ3FLz0A+z6N3UIOcYWV1KTEL0hqkBNTAXCb7A66sSsfnfJbeuM69SVa2D43xbFNQPLUFYNpGm9A0Whf4bW23395MB6J8uHV1Gs6pdRCnLUEW6Ws3S2sN0JOYM+ouKA9B3gTkPIRHdX4BsowCX7Oil7Mad9b/AYp38SGGYtu/AAAAAElFTkSuQmCC")  9 0, auto !important; }
                ::-webkit-scrollbar-button {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACJUlEQVRYR+2VsW/TQBjF34tcpKKKbAgkYCkLEgM5EAOodqQWsfQvQMDaDcHEwsbEAgMLYgQhBhYWVhSnlWiHXtRW6tShSC0wtWoGVIWED9VxHKe+2JfEZYrXe/d9P7+7ex+R8km57EDqf9oSWaNfu5amH2aNqQCe2gRwJdL42iHQGqZRvz1ZAD8BnIs2H04UubJSHwOMHRg7MHYgyEWv9Ait5nsubex3HJGyuo+/+MGq/mrr0lBBJJ6SqAGbF1lZ3xFPNQBMtFMbX1jV8zYQgwHsN6dQLMyhUPjcLS4f6dfu9UABoK8pt69fgiPfQ6hVVvWN41ABgJTVZYjcwdnaW37qZr14qjeKbX4p1AQAcVdCqASAuOoViMexBZe+Xmyf8/AAoLyA8Gm84RFUEiB+njH6kQEMblkDAGjR185IDtgDlB4AfJfQCz6AmO0ZxwPcAZPU6EBgtasOQJwxbDoAUByxb/fFmu5AFCKGu5BX406dvg6ELiyAeJN308xXEBeIq36DmDwpiFQH/sdR2AI8AfDyJFywAgjvQwMMB0uOJNYAYQp2J14eEII6qzrxpPtOQ3FLz0A+z6N3UIOcYWV1KTEL0hqkBNTAXCb7A66sSsfnfJbeuM69SVa2D43xbFNQPLUFYNpGm9A0Whf4bW23395MB6J8uHV1Gs6pdRCnLUEW6Ws3S2sN0JOYM+ouKA9B3gTkPIRHdX4BsowCX7Oil7Mad9b/AYp38SGGYtu/AAAAAElFTkSuQmCC") 9 0,  auto !important;}
                .ogdlpmhglpejoiomcodnpjnfgcpmgale_pointer, ::-webkit-file-upload-button{cursor:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACJUlEQVRYR+2VsW/TQBjF34tcpKKKbAgkYCkLEgM5EAOodqQWsfQvQMDaDcHEwsbEAgMLYgQhBhYWVhSnlWiHXtRW6tShSC0wtWoGVIWED9VxHKe+2JfEZYrXe/d9P7+7ex+R8km57EDqf9oSWaNfu5amH2aNqQCe2gRwJdL42iHQGqZRvz1ZAD8BnIs2H04UubJSHwOMHRg7MHYgyEWv9Ait5nsubex3HJGyuo+/+MGq/mrr0lBBJJ6SqAGbF1lZ3xFPNQBMtFMbX1jV8zYQgwHsN6dQLMyhUPjcLS4f6dfu9UABoK8pt69fgiPfQ6hVVvWN41ABgJTVZYjcwdnaW37qZr14qjeKbX4p1AQAcVdCqASAuOoViMexBZe+Xmyf8/AAoLyA8Gm84RFUEiB+njH6kQEMblkDAGjR185IDtgDlB4AfJfQCz6AmO0ZxwPcAZPU6EBgtasOQJwxbDoAUByxb/fFmu5AFCKGu5BX406dvg6ELiyAeJN308xXEBeIq36DmDwpiFQH/sdR2AI8AfDyJFywAgjvQwMMB0uOJNYAYQp2J14eEII6qzrxpPtOQ3FLz0A+z6N3UIOcYWV1KTEL0hqkBNTAXCb7A66sSsfnfJbeuM69SVa2D43xbFNQPLUFYNpGm9A0Whf4bW23395MB6J8uHV1Gs6pdRCnLUEW6Ws3S2sN0JOYM+ouKA9B3gTkPIRHdX4BsowCX7Oil7Mad9b/AYp38SGGYtu/AAAAAElFTkSuQmCC") 9 0,  auto !important;}
                button, .ytp-volume-panel{cursor:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACJUlEQVRYR+2VsW/TQBjF34tcpKKKbAgkYCkLEgM5EAOodqQWsfQvQMDaDcHEwsbEAgMLYgQhBhYWVhSnlWiHXtRW6tShSC0wtWoGVIWED9VxHKe+2JfEZYrXe/d9P7+7ex+R8km57EDqf9oSWaNfu5amH2aNqQCe2gRwJdL42iHQGqZRvz1ZAD8BnIs2H04UubJSHwOMHRg7MHYgyEWv9Ait5nsubex3HJGyuo+/+MGq/mrr0lBBJJ6SqAGbF1lZ3xFPNQBMtFMbX1jV8zYQgwHsN6dQLMyhUPjcLS4f6dfu9UABoK8pt69fgiPfQ6hVVvWN41ABgJTVZYjcwdnaW37qZr14qjeKbX4p1AQAcVdCqASAuOoViMexBZe+Xmyf8/AAoLyA8Gm84RFUEiB+njH6kQEMblkDAGjR185IDtgDlB4AfJfQCz6AmO0ZxwPcAZPU6EBgtasOQJwxbDoAUByxb/fFmu5AFCKGu5BX406dvg6ELiyAeJN308xXEBeIq36DmDwpiFQH/sdR2AI8AfDyJFywAgjvQwMMB0uOJNYAYQp2J14eEII6qzrxpPtOQ3FLz0A+z6N3UIOcYWV1KTEL0hqkBNTAXCb7A66sSsfnfJbeuM69SVa2D43xbFNQPLUFYNpGm9A0Whf4bW23395MB6J8uHV1Gs6pdRCnLUEW6Ws3S2sN0JOYM+ouKA9B3gTkPIRHdX4BsowCX7Oil7Mad9b/AYp38SGGYtu/AAAAAElFTkSuQmCC") 9 0,  auto !important;}
                #myogdlpmhglpejoiomcodnpjnfgcpmgale .icon { cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACJUlEQVRYR+2VsW/TQBjF34tcpKKKbAgkYCkLEgM5EAOodqQWsfQvQMDaDcHEwsbEAgMLYgQhBhYWVhSnlWiHXtRW6tShSC0wtWoGVIWED9VxHKe+2JfEZYrXe/d9P7+7ex+R8km57EDqf9oSWaNfu5amH2aNqQCe2gRwJdL42iHQGqZRvz1ZAD8BnIs2H04UubJSHwOMHRg7MHYgyEWv9Ait5nsubex3HJGyuo+/+MGq/mrr0lBBJJ6SqAGbF1lZ3xFPNQBMtFMbX1jV8zYQgwHsN6dQLMyhUPjcLS4f6dfu9UABoK8pt69fgiPfQ6hVVvWN41ABgJTVZYjcwdnaW37qZr14qjeKbX4p1AQAcVdCqASAuOoViMexBZe+Xmyf8/AAoLyA8Gm84RFUEiB+njH6kQEMblkDAGjR185IDtgDlB4AfJfQCz6AmO0ZxwPcAZPU6EBgtasOQJwxbDoAUByxb/fFmu5AFCKGu5BX406dvg6ELiyAeJN308xXEBeIq36DmDwpiFQH/sdR2AI8AfDyJFywAgjvQwMMB0uOJNYAYQp2J14eEII6qzrxpPtOQ3FLz0A+z6N3UIOcYWV1KTEL0hqkBNTAXCb7A66sSsfnfJbeuM69SVa2D43xbFNQPLUFYNpGm9A0Whf4bW23395MB6J8uHV1Gs6pdRCnLUEW6Ws3S2sN0JOYM+ouKA9B3gTkPIRHdX4BsowCX7Oil7Mad9b/AYp38SGGYtu/AAAAAElFTkSuQmCC") 9 0, auto !important; }

                </style></head>
<body>
	<div class="preloader" style="display: none;">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

<div id="main-wrapper" data-sidebartype="mini-sidebar">

        <?php include('../admin/include/header.php')?>

        <?php include('../admin/include/sidebar.php')?>

		<div class="page-wrapper">

            <br>

            <div class="container-fluid">
				<form action="" method="post" name="editcam" onSubmit="JavaScript:return fncSubmit();" enctype="multipart/form-data" onSubmit="JavaScript:return addlocation();">
				<div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">รายละเอียดข้อมูลกล้องวงจรปิด</h5>

                                     <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">รหัสประจำเครื่อง :</label>
                                        <div class="col-sm-6">
                                        <label class="col-sm-3 text-left control-label col-form-label"><?php echo $result["c_id"];?></label>
										 </div>
                                    </div>

                                  <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Camera Name</label>
                                        <div class="col-sm-6">
                                        <label class="col-sm-3 text-left control-label col-form-label"><?php echo $result["c_name"];?></label>
                                        </div>
                                    </div>

								<div class="form-group row">
            						<label class="col-sm-3 text-right control-label col-form-label">ยี่ห้อเครื่อง</label>
                                        <div class="col-sm-6">
                                        <label class="col-sm-4 text-left control-label col-form-label"><?php echo $result["c_brand"];?></label>
                                        </div>
                                  </div>
									 <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">รุ่น </label>
                                        <div class="col-sm-6">
                                        <label class="col-sm-4 text-left control-label col-form-label"><?php echo $result["c_no"];?></label>
                                        </div>
                                    </div>
								  <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">เลขครุภัณฑ์</label>
                                        <div class="col-sm-6">
                                        <label class="col-sm-4 text-left control-label col-form-label"><?php echo $result["c_tax"];?></label>
                                        </div>
                                  </div>

									<div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">วันที่รับอุปกรณ์</label>
                                        <div class="col-sm-6">
                                        <label class="col-sm-6 text-left control-label col-form-label"><?php echo date('d-m-Y',strtotime($result["c_date"]));?></label>
                                        </div>
                                    </div>
  					  <div class="form-group row">
									   <label for="select"></label>
						<label class="col-sm-3 text-right control-label col-form-label">สถานที่ติดตั้ง</label>
                                        <div class="col-md-6">
                                        <label class="col-sm-4 text-left control-label col-form-label"><?php echo $result["lo_name_place"];?></label>

                                    </div>
                      </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">หมายเหตุ</label>
                                        <div class="col-sm-6">
                                            <label class="col-sm-3 text-left control-label col-form-label"><?php echo $result["c_note"];?></label>
                                        </div>
                                    </div>

									<div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">วันที่ส่งซ่อมล่าสุด</label>
                                        <div class="col-sm-6">
                                            <label class="col-sm-3 text-left control-label col-form-label">
												<?php echo date('d-m-Y H:i:s',strtotime($result["c_fix"]));?></label>
                                        </div>
                                    </div>

									<div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">วันที่ซ่อมเสร็จล่าสุด</label>
                                        <div class="col-sm-6">
                                            <label class="col-sm-3 text-left control-label col-form-label"><?php echo date('d-m-Y H:i:s',strtotime($result["c_finish"]));?></label>
                                        </div>
                                    </div>

									<div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">สถานะเครื่อง</label>
                                    <div class="col-md-6">
                                     <label class="col-sm-3 text-left control-label col-form-label"><?php echo $result["c_status"];?></label>
                                    </div>
                                </div>

                                </div>
                                <div class="form-group row">
								<label class="col-sm-3 text-right control-label col-form-label">ตัวเลือก :</label>
                                <div class="col-md-9">
								<a href="camera_edit.php?editcam=<?php echo $result["c_id"];?>"><button type="button" class="btn btn-outline-primary">แก้ไขข้อมูล</button></a>
								<a href="camera_del.php?editcam=<?php echo $result["c_id"];?>"><button type="button" class="btn btn-outline-danger">ลบข้อมูล</button></a>

								</div>
                                </div>
						</div>
						</form>
		</div>
	</div>
	</div>
	            <footer class="footer text-center">
				Developed by KNS TNN.
            </footer>

    <!-- All Jquery -->
    <!-- ============================================================== -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
	<script src="../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="../assets/libs/quill/dist/quill.min.js"></script>
	<script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
	<script src="../assets/libs/toastr/build/toastr.min.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <script src="../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
	<script src="../dist/js/pages/mask/mask.init.js"></script>
	<script src="../assets/libs/quill/dist/quill.min.js"></script>

<script>window.__vidChanged = function(state){if(state === 1) {document.body.dispatchEvent(new Event('vidChanged'))}}
if(document.querySelector('#movie_player')){document.querySelector('#movie_player').addEventListener('onStateChange', '__vidChanged');}</script>
<script>
	$(document).ready(function() {
	$("#frmMain").restoreForm();
});
	</script>
</body>
	<link type="text/css" id="dark-mode" rel="stylesheet" href="">
	<style type="text/css" id="dark-mode-custom-style"></style>
</html>
