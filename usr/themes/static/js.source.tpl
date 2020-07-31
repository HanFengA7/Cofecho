<script 
    src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"
></script>

<script 
    src="https://cdn.bootcdn.net/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"
></script>

<script>
    $(document).pjax('a', '#pjax-container', {fragment:'#pjax-container', timeout:8000});
    $(document).on('submit', 'form[data-pjax]', function(event) {
        $.pjax.submit(event, '#pjax-container')
    })
</script>

<script 
    src="//at.alicdn.com/t/font_1971030_gzm4ycm3taj.js"
></script>

<script
    src="https://cdn.jsdelivr.net/npm/mdui@1.0.0/dist/js/mdui.min.js"
    integrity="sha384-aB8rnkAu/GBsQ1q6dwTySnlrrbhqDwrDnpVHR2Wgm8pWLbwUnzDcIROX3VvCbaK+"
    crossorigin="anonymous"
></script>

<script>
    var inst = new mdui.Dialog('#search-dialog');
    // method
    document.getElementById('search').addEventListener('click', function () {
      inst.open();
    });
</script>  