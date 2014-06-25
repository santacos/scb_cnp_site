<!DOCTYPE html>
<html>
	@include('admin.partials.assets')
	    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header bg-purple">SCB recruitment</div>
            <!-- <form action="{{ URL::to('/') }}" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <p><a href="#">I forgot my password</a></p>
                    
                    <a href="{{ URL::to('register') }}" class="text-center">Register a new membership</a>
                </div>
            </form> -->
            
            <div class="body bg-gray">
                
                    <a href="{{ URL::to('/hm')}}" class="btn btn-info btn-block">Hiring manager</a>
               
              
                    <a href="{{ URL::to('/hrbp-officer')}}" class="btn btn-success btn-block">HRBP officer</a>
                
                
                <a href="{{ URL::to('/hrbp-manager')}}" type="submit" class="btn btn-danger btn-block">HRBP manager</a> 
                
                     
                <a type="submit" href="{{ URL::to('/recruiter')}}" class="btn btn-warning btn-block">Recruiter</a>
                
                
                <a type="submit" href="{{ URL::to('/home')}}"class="btn bg-teal btn-block">Candidate</a>
                
            </div>
            
            
    
                

            
        </div>      
<i id="starTemp" class="fa fa-fw fa-star" style="display:none;position:absolute;left:0px;top:-50px;font-size:0px;color:yellow;"></i>
<i id="MstarTemp" class="fa fa-fw fa-star-o" style="display:none;position:absolute;left:0px;top:-50px;font-size:20px;color:yellow;"></i>
    </body>
<script type="text/javascript">
    var count = 0;
    function addStar(){
        var star = document.getElementById("starTemp").cloneNode();
        star.id = "star"+count++;
        star.style.display = 'inline';
        star.style.top = 90 + 'px';
        var rand = Math.random();
        star.style.left = 480 + rand*300 + 'px';
        star.xspeed = (rand*2-1)*10;
        star.yspeed = (Math.random()*2-3)*3;
        star.live = 0;
        star.copy = 0;
        document.body.appendChild(star);
        $(star).ready(function(){
            setInterval(function(){
                doEffect(star);
                if(star.copy++ < 20 && star.copy%2 == 0){
                    addMStar(star);
                }
            },30);
        });
    }
    function doEffect(x){
        x.yspeed += 0.25;
        x.live++;
        if(x.style.top.substring(0,x.style.top.length-2) > 550){
            x.style.top = 90 + 'px';
            var rand = Math.random();
            x.style.left = 480 + rand*300 + 'px';
            x.xspeed = (rand*2-1)*10;
            x.yspeed = (Math.random()*2-3)*3;
            x.live = 0;
            $(x).animate({
                opacity:'1',
                fontSize:'0px'
            },1);
        }else if(x.live < 10){
            $(x).animate({
                top:'+='+x.yspeed+'px',
                left:'+='+x.xspeed+'px',
                fontSize:'+=2px'
            },10);
        }else if(x.style.top.substring(0,x.style.top.length-2) > 400){
            $(x).animate({
                top:'+='+x.yspeed+'px',
                left:'+='+x.xspeed+'px',
                opacity:'-=0.10'
            },10);
        }else{
            $(x).animate({
                top:'+='+x.yspeed+'px',
                left:'+='+x.xspeed+'px'
            },10);
        }
    }
    addStar();
    addStar();
    addStar();
    addStar();
    function addMStar(x){
        var star = document.getElementById("MstarTemp").cloneNode();
        star.id = "star"+count++;
        star.style.display = 'inline';
        star.style.top = x.style.top;
        star.style.left = x.style.left;
        $(star).animate({
                top: "+=5px",
                left: "+=5px",
                opacity: "0.5"
        },0);
        star.live = 0;
        document.body.appendChild(star);
        $(star).ready(function(){
            setInterval(function(){
                doEffectM(star,x);
            },100);
        });
    }
    function doEffectM(x,y){
        x.live++;
        if(x.live < 5){
            $(x).animate({
                fontSize: "-=2px",
                opacity: "-=0.07"
            },100);
        }else{
            x.style.top = y.style.top;
            x.style.left = y.style.left;
            $(x).animate({
                    top: "+=5px",
                    left: "+=5px",
                    opacity: "0.5",
                    fontSize: "20px"
            },0);
            x.live = 0;
        }
    }
</script>

</html>