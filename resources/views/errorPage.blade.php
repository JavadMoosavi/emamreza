<style type="text/css">
   .PC:after,.PC:before{transform:translate(-50%);display:block;content:'';left:50%}.PC,.signals{height:100px}body{margin:0;padding:0;background:#ccc}.container{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);min-width:500px;margin:0}.PC,.PC:after,.PC:before,.component{position:relative}.head{width:100%;text-align:center;font-family:Lato,sans-serif;padding-bottom:20px;font-weight:400;color:#222;letter-spacing:1px}.component{float:left;margin:10px}.PC{width:40%;border:5px solid #333;border-radius:5px}.PC:before{width:5px;height:20px;border:5px solid #333;top:100px;background:#333}.PC:after{width:40px;height:0;border:4px solid #333;top:95px;border-radius:3px}.PC .flare{width:50px;height:1px;background:#aaa;position:absolute;left:50%;top:50%;transform:translate(-50%,-50%) rotate(-45deg)}.PC .flare:after,.PC .flare:before,.signals .dot{position:absolute;transform:translate(-50%,-50%)}.PC .flare:after,.PC .flare:before{content:'';width:30px;height:1px;background:inherit;top:-5px;left:50%}.PC .flare:after{top:6px}.signals{width:30%}.signals .dot{width:10px;height:10px;background:#444;display:inline-block;border-radius:50%;left:30%;top:50%;opacity:0;animation:.3s ease-in infinite alternate blink}.signals .first{margin-left:0}.signals .second{margin-left:30px;animation-delay:.1s}.signals .third{margin-left:60px;animation-delay:.2s}.server{width:12%;height:130px;border:5px solid #333;border-radius:5px;position:relative}.server .slot{display:block;background:#444;width:90%;height:8%;margin:10% 5%;position:relative;top:55%;border-radius:2px}.server .button{width:6px;height:6px;background:#444;display:inline-block;border-radius:50%;position:absolute;right:20%;bottom:5%}.server .button:last-of-type{height:8px;width:8px;right:5%}@-webkit-keyframes blink{from{opacity:0}to{opacity:1}}@media only screen and (max-width:500px){.container{width:100%;min-width:100%}.component{display:block;float:left;clear:both;left:50%;transform:translateX(-50%)}.signals{transform:translateX(-50%) rotate(90deg)}.server{width:17%}}
</style>
<div class="container">
  <h3 class="head">
  <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="red" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
  <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
  <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
</svg>
  </h3>
  <h3 class="head">{{ $errorCode }}</h3>
  <div class="component PC">
    <div class="flare"></div>
  </div>
  <div class="component signals">
      <div class="dot first"></div>
      <div class="dot second"></div>
      <div class="dot third"></div>
  </div>
  <div class="component server">
    <div class="slot"></div>
    <div class="slot"></div>
    <div class="button"></div>
    <div class="button"></div>
  </div>
</div>