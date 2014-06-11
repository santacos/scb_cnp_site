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

    </body>
</html>