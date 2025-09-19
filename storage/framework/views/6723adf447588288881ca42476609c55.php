<section>
    
    <div class="container mx-auto">

        
            
            

        <?php if(auth()->guard()->check()): ?>

        <title>Pin test</title>

        <!--BODY-->




    </div>





    <div align="center">
        <img class="img-fluid" src="/images/dunningkrugeradjustedforcorruptionb.jpg"
        
        
    </div>
    <br>
    <div class="grid grid-cols-12">
        <div class="col-span-4">
            <img alt="" id="pin" height="144" src="/images/pinlarge.png" width="152">
        </div>
    </div>






    <br>




        



























































        <br>
        <br>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
        <script>

            if (!window.location.search.includes('reloaded')) {
                window.location.href = window.location.href + '?reloaded=true';
            }


        </script>

        <script>
            $(document).ready(function () {
                $("#pin").draggable();
                // $("#target").droppable({
                //     greddy: true,
                //     tolerance: 'touch',
                //     drop: function (event, ui) {
                //         ui.draggable.draggable('option', 'revert', 'true');
                //         alert("OK Knowing where you are is the first step to improvement!");
                //
                //     }
                // });




            });

        </script>
        <br>
        <br>
        <br>

        </div>
        <?php endif; ?>


        <?php if(auth()->guard()->guest()): ?>



        <title>Pin test</title>




        <!--BODY-->
        <div class="container">
            
                
                
            
            <br>

                <div align="center">
                    <img class="img-fluid" src="/images/dunningkrugeradjusted.jpg"


                </div>


            <br>
            <div class="grid grid-cols-12">
                <div class="col-span-4">
                    <img alt="" id="pin" height="144" src="/images/pinlarge.png" width="152">
                </div>
            </div>


            
                
            
            <!-- <button class="btn btn-primary align-center clearfix" type="button" data-toggle=
           "collapse" data-target="#collapsepin" aria-expanded="false" aria-controls=
                   "collapsepin">Click here for feedback?</button>
             <div class="collapse" id="collapsepin">
               <div class="container">
                 <div class="card text-center">
                   <h5 class="card-header" align="center"></h5>
                   <div class="card-body text-left">
                     <p><b>Take a look at the bottom of the ladder on the image above!</b><br>
                       Can you see that following process is how you climb up the Capability Maturity ladder?<br>
                       If you think that Agile does not follow process (a typical Capability Maturity Level 1 perception) you are seriously uninformed. <a href="/scrum" target="_blank"><br>
                       Open Scrum here</a> to see this
                       agile method's processes.  Did you see that Scrum has the core processes PP and PMC?&nbsp;&nbsp;Now see if you can tie PP and PMC in Scrum back to the <a href="/">PMBOK dashboard</a>. <br>
                       <em>Note: Each link above opens in a new tab so you can "cross compare" results</em>.</p>
                     <p><b>Now take a good look at the Program Termination Zone on the image above on this page.</b><em>&nbsp;&nbsp;<br>
                       Remember that a Program is simply a bunch of strategically aligned projects.</em></p>
                     <p>For Systems Engineering the CMMi Dashboard for
                       Development <b><a href="/cmmidevdash" target="_blank">is your playbook!</a></b> <br>
                       This is one of 4 process improvement dashboards used by the Carnegie Mellon University in
                       their Capability Maturity Model integrated body of knowledge.<br>
                       See if you can find the Capability Maturity Level 2 project management processes (especially PP and PMC) on the CMMi Dev Dashboard. <br>
                       They are found under (<em><a href="/cmmidevdash" target="_blank">'PA'
                       (Process Area) which is right next to 'ML' (Maturity Level) on the CMMi Dev Dashboard</a></em>).<br>
                       The 4 CMMi dashboards
                       [<a href="/pmway/?slide=14" target="_blank">CMM People</a>, <a href="/cmmidevdash" target="_blank">CMMi for Development</a>, CMMi for Services &amp; CMMi for
                       Acquisition] combine and use most of these processes, while some have specialist processes dedicated only to
                       specific dashboards.<br>
                       <br>
                       <b>The above information, in a 'nutshell' is the absolute essence of being able to operate at Capability Maturity Level 2!</b></p>
                   </div>
                   <div class="card-footer"> </div>
                 </div>
               </div>
             </div>-->
            <br>
            <br>
            <br>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

            <script>
                $(document).ready(function () {
                    $("#pin").draggable();
                    // $("#target").droppable({
                    //     greddy: true,
                    //     tolerance: 'touch',
                    //     drop: function (event, ui) {
                    //         ui.draggable.draggable('option', 'revert', 'true');
                    //         alert("OK Knowing where you are is the first step to improvement!");
                    //
                    //     }
                    // });




                });

            </script>
            <br>
            <br>
            <br>
        </div>
        <?php endif; ?>

</section><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\home.blade.php ENDPATH**/ ?>