<?php session_start(); ?>
<html dir="ltr">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="img/hat.png">
    <title>login</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
<style type="text/css" media="all" id="my">
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
    <div class="main-wrapper">

        <div class="preloader" style="display: none;">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
			<img src="img/loginpic.png" width="350" height="350">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="img/logo1.png" width="350"></span>
                    </div>
                    <!-- Form -->
                    <form action="check_login.php" id="loginform" method="post" name="loginform" >
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="" name="uid">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="" name="pass">
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> ลืมรหัสผ่าน?</button>
                                        <button class="btn btn-success float-right" type="submit" name="login" >Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

				<div id="recoverform" style="display: none;">
                    <div class="text-center">
                        <span class="text-white">โปรดใส่ username และ E-mail ของท่าน</span>
                    </div>

					<!---ลืม password ----->
                    <div class="row m-t-20">
                        <form class="col-12" method="post" action="forgetpass.php">
                            <!-- email -->
							 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="" name="uid">
                                </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-danger text-white" id="basic-addon1"></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-describedby="basic-addon1" name="email">
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-20 p-t-20 border-top border-secondary">
                                <div class="col-12">
                                    <a class="btn btn-success" href="#" id="to-login" name="action">กลับไปหน้า Log in</a>
                                    <button class="btn btn-info float-right" type="submit" name="forget">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();

    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){

        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
    </script>



<script>window.__vidChanged = function(state){if(state === 1) {document.body.dispatchEvent(new Event('vidChanged'))}}
if(document.querySelector('#movie_player')){document.querySelector('#movie_player').addEventListener('onStateChange', '__vidChanged');}</script></body><link type="text/css" id="dark-mode" rel="stylesheet" href=""><style type="text/css" id="dark-mode-custom-style"></style></html>
