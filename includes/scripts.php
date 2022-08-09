<script src="JS/slider.js"></script>
<script src="JS/observer.js"></script>
<script type="text/javascript">

  let progress = document.getElementById('progressbar');
  let totalHeight = document.body.scrollHeight - window.innerHeight;
  window.onscroll = function(){
    let progressHeight = (window.pageYOffset / totalHeight) * 100;
    progress.style.height = progressHeight + "%";
  }
</script>
